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
	
	function home_block()
	{
		echo "i am rune";
	}
	function index($slug = null, $limit = 10, $offset = 0)
	{
		$limit   						= 25;
		$offset  						= 0;
		$parishCount 				= parishCount();
		$parishCount  			= intval($parishCount);
	
		if($this->input->post('records'))
		{
			
			$viewedRecord				= intval($this->input->post('records'));
			$offset  						= $this->input->post('records') - 1;
			$loadmore_status 		= 0;
			$ccount 						= (int) listparish(null,$limit,$offset,true);
			$myArr[] 						= listparish(null, $limit, $offset);
			//$viewedRecord 			= 25;
		//	$parishCount      	= 79;
			$viewedRecord  = ($viewedRecord + $ccount);
			$remainRecord = $parishCount - $viewedRecord ;
//var_dump($remainRecord); die;
			
			$myArr[] 			= ( $remainRecord <= 0 )?'hide':$remainRecord;
			$myArr[]			=  $viewedRecord;
			$myJSON 			= json_encode($myArr,true);
			echo $myJSON;die;

		}			
		else
		{
			$pCCount		= listparish(null, $limit, $offset,true);
			$search			= listparish(null, $limit, $offset);
			$remainRecord   = $parishCount - $pCCount;
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
				
			
				$data['parishCount']		= $parishCount;
				$data['search']				= $search;
				$data['p_type']     =  array(0=>'All',
								1=>'Parishess',
								2=>'Shrines',
								
							);
				
				$data['remainRecord']		= $remainRecord;
				$this->template->build('parish_list', $data);
				
			}

			
		}

		
	}
}
