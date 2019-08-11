
	<?php
		// $totSegments = $this->uri->total_segments();
		// $uriSegments = $this->uri->segment($totSegments);
		// if(!is_numeric($uriSegments) || is_numeric($this->uri->segment(2)))
		// {
		// 	$offset = 0;
		// } else if(is_numeric($uriSegments)){
		// 	$offset = $this->uri->segment($totSegments);
		// }
		
		// $limit 	= 25;
		// if($keywords)
		// {
		// 	$search	= listparish($keywords, $limit, $offset);
		// 	$count 	= parishSearchCount($keywords);
		// }
		// else
		// {
			
		// 	$count 	= parishSearchCount($keywords);
		// }
	?>
	
	
	<div class="page-name-block" >
		<div class=" ">
		<span class="Page-title">Parish <i class="fa fa-angle-double-right"></i></span>
		<input type="text" class="form-control serach-btn"  onkeyup="search(this.value)" name="query" placeholder="<?php echo 'Search Parish'//echo phrase('search_user'); ?>"<?php echo ($keywords != null ? ' value="' . $keywords . '"' : 'test'); ?> />
			
  
 
  		<?php foreach($p_type as $key=>$pType):?>
  		<a class="btn btn-link dropdown-toggle filter-content" href="#<?php echo $pType?>" data-id="<?php echo $key?>"><?php echo $pType ?></a>
  		
									
										<?php endforeach;?>
										
   
  
 
	
				
		</div>
	</div>
	<br /><br /><br />
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if($keywords): ?>
				<br />
				<div class="alert alert-<?php echo ($count > 0 ? 'info' : 'danger'); ?>"><?php echo phrase('showing'); ?> <b><?php echo $offset . ' - ' . ($count > $limit && $limit+$offset < $count ? $limit+$offset : $count) . ' ' . phrase('from') . ' ' . ($count > 0 ? $count : 0); ?></b> <?php echo phrase('results_for_keywords'); ?> <b>"<?php echo $keywords; ?>"</b></div>
				<?php endif; ?>
				
				<?php
					$n	= 1;
					echo '<div class="row ">';
					foreach($search as $row)
					{
						
						
						echo '
							<div class="col-sm-4 ">
							
								<a href="'.base_url($row['slug']).'" class="">
					<div class="col-sm-12 card-item">
         		<div class="card ">
            		<img class="card-img-parish" src="'.base_url('uploads/parish/' . imageCheck('parish', $row['cimg'])) .'" alt="Card image cap">
            		<div class="card-body">
               		<h5 class="card-title card-warp">'.$row['cname'].'</h5>
               	
               	
            		</div>
         		</div>
      		</div>
      		</a>
								
							</div>
						';
					}
					echo '</div>';
				?>
				
			
			</div>
		</div>
	</div>
	<script>
	var admin_url   = '<?php echo base_url()?>';
	var offset 		= 0;
	var limit 		= 25;
	var keyword     = '';
	var filter    = "";
	var hash = location.hash.substr(1);
	var record_showing = '<?php echo (!empty($search))?count($search):0?>';
	$('.ajaxloadmore').click(function(){
		console.log('click');
		$.ajax({
                    url: admin_url+'parish',
                    type: "POST",
                    data: {'records': record_showing},
                    success: function(response){
						response = JSON.parse(response,true);
						console.log(response);
						alert(response);
                    }
                });
		
		
	});
	function search(keyword)
	{
		
	}
	</script>