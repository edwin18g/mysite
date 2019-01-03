<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Parish extends CI_Controller
{
	public $settings = array();
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Parish_model');
		/* CACHE CONTROL*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
		$this->settings = globalSettings();
		if(!$this->session->userdata('online'))
		{
			$ip		= getenv('remote_addr');
			$this->session->set_userdata('online', TRUE);
			insertVisitor();
		}
	}
	
	public function _remap($method = null)
	{
		if(method_exists($this, $method))
		{
			call_user_func(array($this, $method));
			return false;
		}
		else
		{
			$this->index($method);
		}
	}
	
	function index($slug = null, $limit = 10, $offset = 0)
	{
		$limit   = 25;
		$offset  = 0;

		if($this->input->post('records'))
			{
				$offset  			= $this->input->post('records') - 1;
				$loadmore_status 	= 0;
				$myArr[] 			= listparish(null, $limit, $offset);
				$myArr[] 			= $loadmore_status;
				$myJSON 			= json_encode($myArr,true);
				echo $myJSON;die;
				
				//echo "test<pre>"; print_r(listparish(null, $limit, $offset));die;
				$this->output->set_content_type('application/json');
				$this->output->set_output(
					json_encode(
						array(
							'meta'		=> $data['meta'],
							'response'		=> array('list'=>listparish(null, $limit, $offset) ,'loadmore_hide'=>$loadmore_status)
						)
					)
				);

			}
		if($this->input->post('hash'))
		{
			$this->form_validation->set_rules('query', phrase('keywords'), 'trim|required|xss_clean|max_length[20]|alpha');
			
			if($this->form_validation->run() == FALSE)
			{
				echo json_encode(array('status' => 204, 'messages' => array(validation_errors('<span><i class="fa fa-ban"></i> &nbsp; ', '</span><br />'))));
			}
			else
			{
				echo json_encode(array("status" => 200, "redirect" => base_url('parish/' . urlencode(str_replace(' ', '-', $this->input->post('query'))))));
			}
		}
		else
		{
			$query = str_replace('-', ' ', $this->uri->segment(2));
			
			if($query != null)
			{
				$data['keywords']	= $query;
				$data['meta']		= array(
					'title' 		=> phrase('searching') . ' "' . $query . '"',
					'descriptions'	=> phrase('searching') . ' "' . $query . '"',
					'keywords'		=> format_tag($query),
					'image'			=> guessImage('users', $slug),
					'author'		=> $this->settings['siteTitle']
				);
			}
			else
			{
				$data['keywords']	= null;
				$data['meta']		= array(
					// 'title' 		=> phrase('search_user'),
					'title' 		=> 'Parish',
					//'descriptions'	=> phrase('search_user'),
					'descriptions'	=> 'Administration',
					'keywords'		=> 'Administration, users, article, posts, tags, snapshots',
					'image'			=> guessImage(),
					'author'		=> $this->settings['siteTitle']
				);
			}
			
		
			
			if($this->input->is_ajax_request())
			{
					$this->output->set_content_type('application/json');
					$this->output->set_output(
						json_encode(
							array(
								'meta'		=> $data['meta'],
								'html'		=> $this->load->view('parish_list', $data, true)
							)
						)
					);
				
				
			}
			else
			{
				$this->template->build('parish_list', $data);
			}
		}
	}
}
