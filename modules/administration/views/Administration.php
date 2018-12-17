
	<?php
		$totSegments = $this->uri->total_segments();
		$uriSegments = $this->uri->segment($totSegments);
		if(!is_numeric($uriSegments) || is_numeric($this->uri->segment(2)))
		{
			$offset = 0;
		} else if(is_numeric($uriSegments)){
			$offset = $this->uri->segment($totSegments);
		}
		
		$limit 	= 12;
		if($keywords)
		{
			$search	= userSearch($keywords, $limit, $offset);
			$count 	= userSearchCount($keywords);
		}
		else
		{
			$search	= listpriests(null, $limit, $offset);
			$count 	= userSearchCount($keywords);
		}
	?>
	
	
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<?php if($keywords): ?>
				<br />
				<div class="alert alert-<?php echo ($count > 0 ? 'info' : 'danger'); ?>"><?php echo phrase('showing'); ?> <b><?php echo $offset . ' - ' . ($count > $limit && $limit+$offset < $count ? $limit+$offset : $count) . ' ' . phrase('from') . ' ' . ($count > 0 ? $count : 0); ?></b> <?php echo phrase('results_for_keywords'); ?> <b>"<?php echo $keywords; ?>"</b></div>
				<?php endif; ?>
				
				<?php
					$n	= 1;
					echo '<div class="row ">';
					foreach($administration as $key =>$role)
					{
						echo '<div class="col-md-10 col-md-offset-2"><h2>'.$role['type_name'].'</h2>';
						foreach($role['user'] as $rkey =>$ruser)
						{
							$size =($ruser['a_type'] == 1)?"6":"4";
							echo '
							<div class="col-sm-'.$size.' ">
								' . getadminstration($ruser) . '
							</div>
						';
						}
						
						echo '</div><br>';
						
					}
					echo '</div>';
				?>
				
				<div class="row">
					<div class="col-sm-12 text-center">
					
						<?php
						if($keywords)
						{
							echo generatePagination('userSearch', $keywords, null, $keywords, $limit, $offset);
						}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>