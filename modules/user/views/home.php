
<?php echo getNewSnapshotHome(5); ?>


<div style="border-bottom:1px solid #ddd">
    <div class="hidden-xs">
        <div class="row">
            <div class="" style="position:relative">
                <div class="btn-group btn-group-justified">
                    <a class="ajaxloads btn btn-default btn-sm active " href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar" style="border-right:none"><i class="fa fa-newspaper-o"></i><span class="hidden-xs"> &nbsp; Administration</span></a>
                    <a class="ajaxloads btn btn-default btn-sm" href="<?php echo base_url('priest'); ?>" style="border-right:none"><i class="fa fa-users"></i><span class="hidden-xs"> &nbsp; Priests</span> </a>
                    <a class="ajaxloads btn btn-default btn-sm" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/followers" style="border-right:none"><i class="fa fa-retweet"></i><span class="hidden-xs"> &nbsp; Parishes</span> </a>
                    <a class="ajaxloads btn btn-default btn-sm" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/following"><i class="fa fa-random"></i><span class="hidden-xs"> &nbsp; Organizations</span> </a>
                    <a class="ajaxloads btn btn-default btn-sm" href="<?php echo base_url('pages/history')?>" style="border-right:none"><i class="fa fa-retweet"></i><span class="hidden-xs"> &nbsp; History</span> </a>
                    <a class="ajaxloads btn btn-default btn-sm" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/following"><i class="fa fa-random"></i><span class="hidden-xs"> &nbsp; Contact Us</span> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
		<div class="col-md-3">
			<div class="whitebg">
				<div class="tabbable" id="btabs">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#panelbishop" data-toggle="tab">Bishop</a>
						</li>
						<li>
							<a href="#panelbcal" data-toggle="tab">Calendar</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="panelbishop">
							<img src="http://www.kuzhithuraidiocese.com/images/bishop-message.png" class="textwrap">
							<p>The Most Rev. Msgr. V. Jeromedhas, SDB was born on October 21, 1951 at Paduvoor, Diocese of Kottar. <a href="aboutbishop.php">Read More ...</a></p>
							<p class="textwrap readbuttonup"><a href="#bishopmessageenglish" role="button" class="btn" data-toggle="modal">Message</a></p>
							<p class="textwrap readbuttondown"><a href="#bishopmessagetamil" role="button" class="btn" data-toggle="modal"><strong>தமிழில்</strong></a></p>
							<p></p>
						</div>
						<div class="tab-pane" id="panelbcal"><a href="newsletter/News letter - August 2018.pdf" target="“_blank”">
							<iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=rcdiocesekuzhithurai%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FCalcutta" width="100%" height="200" scrolling="yes" class="iframe-class" frameborder="0"></iframe><br>
							</a><center><a href="newsletter/News letter - August 2018.pdf" target="“_blank”"></a><a href="calendar.php">Click here to Enlarge Calendar</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 nomargin-xs nopadding-xs">
					
			<h2>&nbsp;Latest Article</h2>
				
				
			
					<?php
						if(getHeadlineNews('all', 5) !== null)
						{
							echo getHeadlineNews('all', 5);
						}
					?>
				
				
		</div>
		
		<div class="col-md-3 nomargin-xs nopadding-xs">
			<h2>&nbsp;News &amp; Events</h2>
			<?php
						if(getNewsAndEvents('all', 5) !== null)
						{
							echo getNewsAndEvents('all', 5);
						}
					?>
				
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6">
			<div class="whitebg mleft">
                <h2>&nbsp;Welcome</h2>
				<p>
						Pope Francis created a new Latin rite Diocese of Kuzhithurai, carved out of the Diocese of Kottar, in Kanniyakumari District, Tamil Nadu, India making it a suffragan of the metropolitan see of Madurai and with great joy and pastoral concern, he announced it officially on 22nd December 2014 at 12.00 hrs, Italian Time/16.30 hrs (IST) appointing Fr. Jeromedhas Varuvel S.D.B. as its first Bishop. 
				</p>
				<p class="textwrapl readbuttonright"><a href="welcome.php" role="button" class="btn">Read More...</a></p>
			</div>
		</div>
		</div>
	</div>

