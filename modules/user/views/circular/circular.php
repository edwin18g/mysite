
	<?php 
		$totSegments = $this->uri->total_segments();
		$uriSegments = $this->uri->segment($totSegments);
		if(!is_numeric($uriSegments)){
			$offset = 0;
		} else if(is_numeric($uriSegments)){
			$offset = $this->uri->segment($totSegments);
		}
		$limit = 12;
	?>
	
	<div class="bg-info">
		<div class="container-fluid first-child">
			<div class="row">
				<div class="col-sm-7  hidden-xs">
					<span class="Page-title">User <i class="fa fa-angle-double-right"></i> Circulars <i class="fa fa-angle-double-right"></i></span>
				</div>
				<div class="col-sm-2">
					<div class="col-12-xs">
						<a href="<?php echo base_url('user/circular/add'); ?>" class="btn btn-md btn-block btn-primary newAdministration"><i class="fa fa-plus"></i> &nbsp; Add Circular</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 hidden-xs hidden-sm sticky" style="background: #fff;margin: 0px;position: static;">
			
				<?php echo ($this->input->is_ajax_request() ? $this->load->view('dashboard_navigation') : $template['partials']['navigation']); ?>
				
			</div>
			<div class="col-md-7 sticky">
				<!--circular list--->
				<div class="tab-router router-tab-active" data-id="circular-list"> 
				<table class="table table-hover">
					<tr>
						<th>
							<?php echo phrase('title'); ?>
						</th>
						<th class="">
							Role
						</th>
						
						<th class="text-right col-xs-4">
							<?php echo phrase('action'); ?>
						</th>
					</tr>
					
					<?php
						if($administration)
						{
							foreach($administration as $c)
							{
								echo '
									<tr id="post' . $c['id'] . '">
										<td>
											<a href="' . base_url( $c['userName']) . '" target="_blank">' . $c['full_name'] . '</a>
										</td>
										<td class="">
											' . $a_type[$c['a_type']]. '
										</td>
										
										<td class="text-right col-xs-4">
											<div class="btn-group">
										<a class="btn btn-default btn-sm" href="'.base_url('user/administration/edit/' . $c['id']) .'"  data-push="tooltip" data-placement="top" title="edit"><i class="btn-icon-only fa fa-pencil"> </i></a>			
												<a class="btn btn-default btn-sm" href="javascript:void(0)" onclick="confirm_modal(\'' . base_url('user/administration/remove/' . $c['id']) . '\', \'post' . $c['id'] . '\')" data-push="tooltip" data-placement="top" title="' . phrase('remove') . '"><i class="btn-icon-only fa fa-times"> </i></a>
											</div>
										</td>
									</tr>
								';
							}
						}
					?>
					
				</table>
				<hr/>
				<div class="row">
					<div class="col-sm-12 text-center">
					
						<?php echo generatePagination('posts', null, ($this->session->userdata('user_level') == 1 ? null : $this->session->userdata('userID')), 'user', $limit, $offset); ?>
						
					</div>
				</div>
				
				</div>
				<!--circular end-->
				
				
				
				<!--add start-->
				<div class="tab-router router-tab" data-id="add">
			
				
				<hr/>
				<div class="row">
					<div class="col-sm-12 ">
						<section class="form-horizontal" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Circular Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="circular_title" placeholder="Title">
    </div>
  </div>
  
  <div class="form-group clearfix">
  	<div class="col-sm-10 col-sm-offset-2"> 
                      <div class="fle-upload">
                        <label class="fle-lbl">BROWSE PDF </label>
                        <input type="file" class="form-control upload" id="file">
                        <input value="" readonly="" class="form-control upload-file-name" id="upload_user_file" type="text">
                      </div>
                      </div>
                                            </div>
  <div class="form-group"> 
   <div class="clearfix progress-custom  col-sm-10 col-sm-offset-2" id="percentage_bar" style="display: none">
                        <div class="progress width100 ">
                            <div style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success">
                                <span class="sr-only">10% Complete</span>
                            </div>
                        </div>
                        <span class="">Uploading...<b class="percentage-text">10%</b></span>
                    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a onclick="circular_save()" class="btn btn-default">Submit</a>
    </div>
  </div>
</section>
					
  
					
                                           
						
					</div>
				</div>
			</div> <!--add end-->
			</div>
			<div class="col-md-3"> 
				<a href="<?php echo base_url('user/circular#add'); ?>" class="btn btn-md btn-block btn-primary newAdministration"><i class="fa fa-plus"></i> &nbsp; Add Circular</a>
				<a href="<?php echo base_url('user/circular#circular-list'); ?>" class="btn btn-md btn-block btn-primary newAdministration"> &nbsp; Circulars</a>
			</div>
		</div>
	</div>
	
	<script>
	var admin_url   			= '<?php echo base_url()?>';
   var url        			= '';
   var keyword    			= null;
   var slug       			= '';
    var currentRequest 	= null; 
    var classActiveTab  = 'router-tab-active';
    
    var slugs     =  {};
    slugs = {'/':'circular-list','add':'add','circular-list':'circular-list'};
    function router () 
    {
      url       = location.hash.slice(1) || '/';
      
      $('.tab-router').removeClass(classActiveTab);
      $('.tab-router').each(function(index){
      	var cSlug  			= $(this).attr('data-id');
      	 var ctab 			= $(this).hasClass('router-tab');
      	 if(cSlug == url)
      	 {
      	 	 $(this).addClass(classActiveTab);
      	 	 $(this).removeClass('router-tab');
      	 	 cSlug();
      	 }
      	   else {
      	   		if(ctab == false)
      	{
      		$(this).addClass('router-tab');
      	}
      	   } 
      	   
      
      });
      
       console.log(url);
       
     
    }
    
    
    
    function circular-list()
    {
      console.log('i am callback');
    }
    
    function add()
    {
    	console.log('i am callback add');
    }
   
    window.addEventListener('hashchange', router);
    window.addEventListener('load', router);
	</script>