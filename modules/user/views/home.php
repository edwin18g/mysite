
<?php echo getNewSnapshotHome(5); ?>

	<!--<div class="container-fluid">-->
	<!--		<img src="http://kuzhithuraidiocese.com/new/uploads/bckhome.png">-->
	<!--	</div>-->

<div class="container">
    <div class="row">
    		<div class="clearfix"></div>
<!--			<div class="col-md-12" style="-->
<!--    background: url(http://kuzhithuraidiocese.com/new/uploads/bckhome.png);-->
<!--    background-position: top;-->
<!--    background-repeat: no-repeat;-->
<!--    margin-top:0px;-->
<!--    padding-top:196px;-->
<!--">-->

				<div class="col-md-12">
					<div class="col-sm-3">	<img src="http://kuzhithuraidiocese.com/uploads/sidebar-banner2.png" / style="width:100%"><div style="
    width: 166%;
    height: 33%;
    background: #fff;
    border-radius: 50%;
    position: absolute;
    top: 274px;
    z-index: -1;
    left: -97px;
    background-image: linear-gradient(#f0f0f0, #fdfdfd);
"></div></div>
					<div class="col-sm-6">
						<div class="whitebg mleft text-center">
					<img src="http://kuzhithuraidiocese.com/images/logo.png" />
					
	                <h2>&nbsp;Diocese of Kuzhithurai</h2>
	                
					<p class="text-justify">
							Pope Francis created a new Latin rite Diocese of Kuzhithurai, carved out of the Diocese of Kottar, in Kanniyakumari District, Tamil Nadu, India making it a suffragan of the metropolitan see of Madurai and with great joy and pastoral concern, he announced it officially on 22nd December 2014 at 12.00 hrs, Italian Time/16.30 hrs (IST) appointing Fr. Jeromedhas Varuvel S.D.B. as its first Bishop. 
					</p>
					<p class="textwrapl readbuttonright"><a href="welcome.php" role="button" class="btn">Read More...</a></p>
				</div>
					</div>
					<div class="col-sm-3">
						<img src ="http://kuzhithuraidiocese.com/uploads/584abb151da7ae6ee4705dcf.png"  style="width: 100%;"/>
					</div>
				
			
			</div>
			<div class="clearfix"></div>
		<div class="col-md-12">
			<div class="whitebg ">
				<div class="tabbable" id="btabs">
					<div class="col-md-4">
						<div style="">
							<ul class="nav home-submenu ">
						<li class="active">
							<a href="#panelbishop" data-toggle="tab">Bishop</a>
						</li>
						<li>
							<a href="#panelbcal" data-toggle="tab">Calendar</a>
						</li>
						<li>
							<a href="#" data-toggle="tab">Circular</a>
						</li>
						<li>
							<a href="#" data-toggle="tab">News Letters</a>
						</li>
					</ul>
							
						</div>
						
					</div>
					
					<div class="col-md-8 tab-content" >
						<div class="tab-pane active block-bishop" id="panelbishop" >
							<div class="media" style="padding:20px">
  <div class="media-left">
    <img src="http://kuzhithuraidiocese.com/uploads/bishop-jerome-dhas.jpg" class="media-object" style="    width: 250px;
    /* padding: 23px; */
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #612958;
    height: 250px;">
  </div>
  <div class="media-body" style="    vertical-align: middle;">
    <h4 class="media-heading">The Most Rev. Msgr. V. Jeromedhas</h4>
   	<p class="text-justify">The Most Rev. Msgr. V. Jeromedhas, SDB was born on October 21, 1951 at Paduvoor, Diocese of Kottar. After his primary education in the ICM Primary School, Velliavilai, he joined St. Aloysius' Minor Seminary, Kottar diocese on sunday 24th May 1964, and did his high school studies at Carmel High School,......</p>
    <div class="col-md-12 text-center">
     	<a href="<?=base_url('bishop')?>" class="btn btn-default btn-block">View More </a>
     </div>
  </div>
</div>
						
						</div>
						<div class="tab-pane" id="panelbcal" style="box-shadow: -20px 0px 15px 0px #96508b3d;background: #fff;

    padding: 20px;    background-image: linear-gradient(to right, rgb(255, 255, 255), rgb(241, 241, 241));
"><a href="newsletter/News letter - August 2018.pdf" target="“_blank”">
							<iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=rcdiocesekuzhithurai%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FCalcutta" width="100%" height="200" scrolling="yes" class="iframe-class" frameborder="0"></iframe><br>
							</a><center><a href="newsletter/News letter - August 2018.pdf" target="“_blank”"></a><a href="calendar.php">Click here to Enlarge Calendar</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 nomargin-xs nopadding-xs">
					
			<h2 class="header-block">&nbsp;Latest Article</h2>
				
				
			
					<?php
					function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}
						if($feature_posts)
						{
							foreach($feature_posts as $k=>$posts){
								
								?>
								
								<a href="<?=base_url('posts/'.$posts['postSlug'])?>" class="">
					<div class="col-md-3 col-xs-12 card-item">
         		<div class="card ">
            		<img class="card-img-top" src="<?php echo getFeaturedImage($posts['postID'], 1) ?>" alt="Card image cap">
            		<div class="card-body">
               		<h5 class="card-title card-warp"><?= $posts['postTitle']?></h5>
               		
               		<div class="content-post-more">
               			<?php echo  trim_text($posts['postContent'], 500, $ellipses = true, $strip_html = true);//truncate($posts['postContent'], 260);?>  
               		</div>
        <span class="content-viewMore">... View More</span>
               	
            		</div>
         		</div>
      		</div>
      		</a>
								<?php 
							}
							
						
						}
					?>
				
				
		</div>
			<?php
						if(getNewsAndEvents('all', 5) !== null)
						{ ?>
						
						
		<div class="col-md-2 nomargin-xs nopadding-xs news-scroll news-events-block" >
			<div class="dropdown open">
    <button type="button" data-toggle="dropdown" class="btn dropdown-toggle" aria-expanded="true">News &amp; Events<span class="caret"></span></button>
   
<div class="dropdown-menu" style="       margin-top: 9px;
    background: #f9f9f9;
    /* color: #fff; */
    font-weight: 800;
    text-align: center;
    /* text-shadow: 1px 4px 7px #000; */
    padding: 9px;
    right: 0px;
    /* box-shadow: 1px 1px 20px 8px #0000006e; */
    border-radius: 18px;
    /* width: 169%; */
" ><?php
			
							echo getNewsAndEvents('all', 5);
				
					?></div>
</div>
			
			
		
			
				
			</div><?php 		} ?>
			
		
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="whitebg mleft parish-block-card">
	                <h2 class="header-block">&nbsp; Parish</h2>
				<div id="parishblock">
					
					<?php if($randoam_parish):foreach($randoam_parish as $praish_ky=>$parish):?>
						<a href="<?=base_url($parish['slug'])?>" class="">
					<div class="col-md-3 col-xs-12 card-item">
         		<div class="card ">
            		<img class="card-img-top" src="<?php echo base_url('uploads/parish/' . imageCheck('parish', $parish['cimg'])); ?>" alt="Card image cap">
            		<div class="card-body">
               		<h5 class="card-title card-warp"><?= $parish['cname']?></h5>
               	
               	
            		</div>
         		</div>
      		</div>
      		</a>
      		<?php endforeach; else: ?>
      		<?php endif;?>
      		
      	
      	</div>
      	<div class="clearfix"></div>
      
     <div class="col-md-12 text-center">
     	<a href="<?=base_url('parish')?>" class="btn btn-default btn-block">View More Parish</a>
     </div>
      
      
				</div>
			
			</div>
			
				<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="whitebg mleft parish-block-card">
	                <h2 class="header-block">&nbsp; Commissions..</h2>
				<div id="parishblock">
					
					<?php if($randoam_commission):foreach($randoam_commission as $praish_ky=>$parish):?>
						<a href="<?=base_url($parish['slug'])?>" class="">
					<div class="col-md-3 col-xs-12 card-item">
         		<div class="card ">
            		<img class="card-img-top" src="<?php echo imageUrlCheck('uploads/commissions/'.$parish['c_img']) ; ?>" alt="Card image cap">
            		<div class="card-body">
               		<h5 class="card-title card-warp"><?= $parish['c_name']?></h5>
               	
               	
            		</div>
         		</div>
      		</div>
      		</a>
      		<?php endforeach; else: ?>
      		<?php endif;?>
      		
      	
      	</div>
      	<div class="clearfix"></div>
      
     <div class="col-md-12 text-center">
     	<a href="<?=base_url('commission')?>" class="btn btn-default btn-block">View More Commissions</a>
     </div>
      
      
				</div>
			
			</div>
			
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="whitebg mleft parish-block-card">
	                <h2 class="header-block">&nbsp; Media ..</h2>
				<div id="parishblock">
					
					<?php if($media_posts):foreach($media_posts as $praish_ky=>$parish):?>
						<a href="<?=base_url('tv/'.$parish['tvSlug'])?>" class="">
					<div class="col-md-3 col-xs-12 card-item">
         		<div class="card ">
            		<img class="card-img-top" src="<?php echo imageUrlCheck('uploads/tv/thumbs/'.$parish['tvFile']) ; ?>" alt="Card image cap">
            		<div class="card-body">
               		<h5 class="card-title card-warp"><?= $parish['tvTitle']?></h5>
               	
               	
            		</div>
         		</div>
      		</div>
      		</a>
      		<?php endforeach; else: ?>
      		<?php endif;?>
      		
      	
      	</div>
      	<div class="clearfix"></div>
      
     <div class="col-md-12 text-center">
     	<a href="<?=base_url('tv')?>" class="btn btn-default btn-block">View More Media</a>
     </div>
      
      
				</div>
			
			</div>
			
		
		</div>
	</div>

 <script>
// 	$(window).scroll(function (event) {
//     var scroll = $(window).scrollTop();
//     if(scroll > 200)
//     {
//     	$('.news-scroll').hide();
//     }
//     else
//     {
//     	$('.news-scroll').show();
//     }
//     // Do something
// });
// </script>