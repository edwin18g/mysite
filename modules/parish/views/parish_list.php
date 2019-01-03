
	<?php
		$totSegments = $this->uri->total_segments();
		$uriSegments = $this->uri->segment($totSegments);
		if(!is_numeric($uriSegments) || is_numeric($this->uri->segment(2)))
		{
			$offset = 0;
		} else if(is_numeric($uriSegments)){
			$offset = $this->uri->segment($totSegments);
		}
		
		$limit 	= 25;
		if($keywords)
		{
			$search	= listparish($keywords, $limit, $offset);
			$count 	= parishSearchCount($keywords);
		}
		else
		{
			$search	= listparish(null, $limit, $offset);
			$count 	= parishSearchCount($keywords);
		}
	?>
	
	<div class="jumbotron bg-primary">
		<div class="container first-child">
			<div class="row">
				<div class="col-md-8 col-sm-offset-2">
					<form class="form-horizontal submitForm" action="<?php echo base_url('parish'); ?>" method="post" data-save="<?php echo phrase('search'); ?>" data-saving="<?php echo phrase('searching'); ?>" data-alert="<?php echo phrase('unable_to_submit_inquiry'); ?>">
						<div class="input-group">
							<input type="text" class="form-control input-lg" name="query" placeholder="<?php echo 'Search Priest'//echo phrase('search_user'); ?>"<?php echo ($keywords != null ? ' value="' . $keywords . '"' : 'test'); ?> />
							<span class="input-group-btn">
								<input type="hidden" name="hash" value="<?php echo sha1(time()); ?>" />
								<button type="submit" class="btn btn-lg btn-success nomargin submitBtn"><i class="fa fa-search"></i> <?php echo phrase('search'); ?></button>
								
							</span>
							
						</div>
						<div class="form-group">
  <label for="sel1">Filter:</label>
  
  <select id="p_type" class="form-control" placeholder="Filter By" name="p_type" >
										<?php foreach($p_type as $key=>$pType):?>
										<option value="<?php echo $key?>" ><?php echo $pType ?></option>
										<?php endforeach;?>
										</select>
</div>
						<div class="form-group">
							<div class="col-sm-12 statusHolder">
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php if($keywords): ?>
				<br />
				<div class="alert alert-<?php echo ($count > 0 ? 'info' : 'danger'); ?>"><?php echo phrase('showing'); ?> <b><?php echo $offset . ' - ' . ($count > $limit && $limit+$offset < $count ? $limit+$offset : $count) . ' ' . phrase('from') . ' ' . ($count > 0 ? $count : 0); ?></b> <?php echo phrase('results_for_keywords'); ?> <b>"<?php echo $keywords; ?>"</b></div>
				<?php endif; ?>
				
				<?php
					$n	= 1;
					echo '<div class="row grid">';
					foreach($search as $c)
			{
				$hex		= '#' . random_hex();
				echo '<div class="col-sm-6 grid-item">
					<div class="first image-placeholder relative">
						<div class="col-sm-12 nomargin nogap_ltr rounded-top">
							<div class="row article_cover" style="background:' . $hex . ' url(' . base_url('uploads/users/covers/' . imageCheck('covers', getUserCover($c['id']), 1)) . ') center center no-repeat;background-size:cover;-webkit-background-size:cover">
								<div class="col-sm-12 nomargin absolute text-shadow" style="width:100%">
									<div class="col-xs-3">
										<a href="' . base_url($c['slug']) . '" class="ajaxloads hoverCard">
											<img src="' . base_url('uploads/users/thumbs/' . imageCheck('users', getUserPhoto($c['id']), 1)) . '" class="img-rounded bordered img-responsive" alt="" />
										</a>
									</div>
									<div class="col-xs-9 relative">
										
										<a href="' . base_url($c['slug']) . '" class="ajaxloads hoverCard">
											<b>' . $c['cname'] . '</b> 
										</a>
										<br />
										<small>@' . $c['slug'] .  '</small>
									</div>
								</div>
							</div>
						</div>
					</div></div>
				';
			}
					echo '</div>';
					
				?>
				
				<div class="row">
					<div class="col-sm-12 text-center">
					<button  class="ajaxloadmore btn btn-default btn-block"><i class="fa fa-envelope"></i> Load More</button>
						<?php
				
						//echo generatePagination('parish', $keywords, null, $keywords, $limit, $offset);
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	var admin_url   = '<?php echo base_url()?>';
	var offset 		= 0;
	var limit 		= 25;
	var keyword     = '';
	var record_showing = '<?php echo (!empty($search))?count($search):0?>';
	$('.ajaxloadmore').click(function(){
		console.log('click');
		$.ajax({
                    url: admin_url+'parish',
                    type: "POST",
                    data: {'records': record_showing},
                    success: function(response){
						response = JSON.parse(response);
						console.log(response);
                    }
                });
		
		
	});
	</script>