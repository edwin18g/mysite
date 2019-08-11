
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
					<span class="Page-title">User <i class="fa fa-angle-double-right"></i> News & Events <i class="fa fa-angle-double-right"></i></span>
					
				</div>
				<div class="col-sm-2">
					<div class="col-12-xs">
						<a href="<?php echo base_url('user/openletters/add'); ?>" class="btn btn-md btn-block btn-primary newPost"><i class="fa fa-plus"></i> &nbsp; Add News & Events</a>
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
				<table class="table table-hover">
					<tr>
						<th>
							<?php echo phrase('title'); ?>
						</th>
						<th class="hidden-xs">
							<?php echo phrase('target'); ?>
						</th>
						<th class="hidden-xs">
							<?php echo phrase('date_created'); ?>
						</th>
						<th class="text-right col-xs-4">
							<?php echo phrase('action'); ?>
						</th>
					</tr>
					
					<?php
						$n = 1;
						$openletters = getPosts('openletters', ($this->session->userdata('user_level') == 1 ? null : $this->session->userdata('userID')), null, $limit, $offset);
						if($openletters)
						{
							foreach($openletters as $c)
							{
								echo '
									<tr class="openletter' . $c['letterID'] . '">
										<td>
											<a href="' . base_url('openletters/' . $c['slug']) . '" target="_blank">' . truncate($c['title'], 50) . '</a>
										</td>
										<td class="hidden-xs">
											' .$c['targetName'] . '
										</td>
										<td class="hidden-xs">
											' . date('d M Y', $c['timestamp']) . '
										</td>
										<td class="text-right col-xs-4">
											<div class="btn-group">
												<a class="btn btn-default btn-sm newPost" href="' . base_url('user/openletters/edit/' . $c['slug']) . '" data-push="tooltip" data-placement="top" title="' . phrase('edit_letter') . '"><i class="btn-icon-only fa fa-edit"> </i></a>
												<a class="btn btn-default btn-sm" href="javascript:void(0)" onclick="confirm_modal(\'' . base_url('user/openletters/remove/' . $c['letterID']) . '\', \'openletter' . $c['letterID'] . '\', \'openletter' . $c['letterID'] . '\')" data-push="tooltip" data-placement="top" title="' . phrase('remove') . '"><i class="btn-icon-only fa fa-times"> </i></a>
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
					
						<?php echo generatePagination('openletters', null, ($this->session->userdata('user_level') == 1 ? null : $this->session->userdata('userID')), 'user', $limit, $offset); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>