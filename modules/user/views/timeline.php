
	<?php
		$totSegments = $this->uri->total_segments();
		$uriSegments = $this->uri->segment($totSegments);
		if(!is_numeric($uriSegments)){
			$offset = 0;
		} else if(is_numeric($uriSegments)){
			$offset = $this->uri->segment($totSegments);
		}
		if(is_numeric($this->uri->segment(2)) && strlen($this->uri->segment(2)) == 10)
		{
			$timestamp	= $this->uri->segment(2);
		}
		else
		{
			$timestamp	= null;
		}
		$limit = 20;
		
		foreach($profile as $page):
			?>
				<div class="container">
					<?php 
		include 'user_navigation.php';
	?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3   sticky card" style="background:#fff;">
				<h4 class="sub-head"><i class="fa fa-info-circle"></i> <?php echo phrase('about_me'); ?></h4>
				<!-- <p class="text-muted">
					<i class="fa fa-quote-left"></i> < ?php echo $page['bio']; ?>
				</p> -->
				<ul class ="list-group">
					<li class="list-group-item"> <span class="Ul-left"><i class="fa fa-angle-double-right"></i> <?php echo ' '.phrase('father_name'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_father_name'] != null)?$page['pr_father_name']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('mother_name'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_mother_name'] != null)?$page['pr_mother_name']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('birth_date'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_birth_date'] != null)?$page['pr_birth_date']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('birth_place'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_birth_place'] != null)?$page['pr_birth_place']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('seminary'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_seminary'] != null)?$page['pr_seminary']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('ordination_date'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_ordination_date'] != null)?$page['pr_ordination_date']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('place_ordination'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_place_ordination'] != null)?$page['pr_place_ordination']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('ordination_by'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_ordination_by'] != null)?$page['pr_ordination_by']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.phrase('parish'); ?>   </span><br><span class="Ul-right"><?php echo ($page['pr_parish'] != null)?$page['pr_parish']:'-' ; ?></span></li>
					<?php if($customfield):?>
						<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i><?php echo ' '.$customfield['custom_name']; ?>   </span><br><span class="Ul-right"><?php echo ($customfield['custom_value'] != null)?$customfield['custom_value']:'-' ; ?></span></li>
					<?php endif; ?>
				</ul>
				<div class="clearfix"></div>
					<h4 class="sub-head"><i class="fa fa-info-circle"></i> Contact</h4>
				<!-- <p class="text-muted">
					<i class="fa fa-quote-left"></i> < ?php echo $page['bio']; ?>
				</p> -->
				<ul class ="list-group">
					<li class="list-group-item"> <span class="Ul-left" ><i class="fa fa-angle-double-right"></i> Address   </span><br><span class="Ul-right"><?php echo ($page['address'] != null)?$page['address']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left" ><i class="fa fa-angle-double-right"></i>Email  </span><br><span class="Ul-right"><?php echo ($page['email'] != null)?$page['email']:'-' ; ?></span></li>
					<li class="list-group-item"><span class="Ul-left"><i class="fa fa-angle-double-right"></i>Mobile   </span><br><span class="Ul-right"><?php echo ($page['mobile'] != null)?$page['mobile']:'-' ; ?></span></li>
					
				</ul>
			
				
			</div>
			<div class="col-md-6 sticky">
			
				<?php
					if($page['userID'] == $this->session->userdata('userID')):
				?>
				<div class="row">
					<div class="col-sm-12 nomargin">
						<form action="<?php echo base_url('user/updates'); ?>" method="post" class="form-horizontal image-placeholder rounded bordered" id="addUpdateForm">
							<div class="col-sm-12">
								<div class="control-group">
									<textarea id="updateInput" class="form-control" placeholder="<?php echo phrase('whats_on_your_mind'); ?>" name="content"></textarea>
								</div>
								<div class="control-group row statusHolder">
									<div class="col-xs-4">
										<div class="btn-group">
											<a href="<?php echo base_url('user/snapshots/add'); ?>" data-push="tooltip" data-placement="top" data-title="<?php echo phrase('upload_a_snapshot'); ?>" class="btn btn-default newPost"><i class="fa fa-image"></i></a>
											<a href="<?php echo base_url('user/posts/add'); ?>" data-push="tooltip" data-placement="top" data-title="<?php echo phrase('write_new_article'); ?>" class="btn btn-default newPost"><i class="fa fa-newspaper-o"></i></a>
										</div>
									</div>
									<div class="col-xs-8 text-right">
										<div class="btn-group">
											<select name="visibility" class="btn form-control bordered" style="width:inherit;display:inline">
												<option value="0"><?php echo phrase('public'); ?></option>
												<option value="1"><?php echo phrase('followers'); ?></option>
												<!-- <option value="2">< ?php echo phrase('friends'); ?></option> -->
											</select>
											<button class="btn btn-primary" type="submit"><i id="update-icon" class="fa fa-edit"></i> <?php echo phrase('post'); ?></button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br />
				<div id="fetch_new_update"></div>
					
				<?php endif; ?>
				
				<?php
					$n				= 1;
					$timeline		= getTimelines($page['userID'], $limit, $offset, $timestamp);
					//print_r($timeline); exit();
					if(sizeof($timeline) > 0)
					{
						foreach($timeline as $row)
						{
							if($n == 7)
							{
								echo '
									<div class="image-placeholder">
									
										' . widget_randomAds() . '
										
									</div>
								';
							}
							
							if($row['is_comment'] != 'YES' && $row['is_like'] != 'YES' && $row['is_repost'] != 'YES')
							{
								if($row['is_update'] == 'YES')
								{
									echo parsingStatusByID($row['update_contributor'], 'submitting', $row['updateID']);
								}
								elseif($row['is_post'] == 'YES')
								{
									echo parsingPostByID($row['post_contributor'], 'submitting', $row['postID']);
								}
								elseif($row['is_snapshot'] == 'YES')
								{
									echo parsingImageByID($row['snapshot_contributor'], 'submitting', $row['snapshotID']);
								}
								elseif($row['is_openletter'] == 'YES')
								{
									echo parsingOpenletterByID($row['openletter_contributor'], 'submitting', $row['letterID']);
								}
								elseif($row['is_tv'] == 'YES')
								{
									echo parsingChannelByID($row['tv_contributor'], 'submitting', $row['tvID']);
								}
							}
							else
							{
								if($row['is_comment'] == 'YES')
								{
									if($row['commentType'] == 0)
									{
										echo parsingStatusByID($row['commenterID'], 'commenting', $row['item_commented'], $row['commentID'], $row['comment_time']);
									}
									elseif($row['commentType'] == 1)
									{
										echo parsingPostByID($row['commenterID'], 'commenting', $row['item_commented'], $row['commentID'], $row['comment_time']);
									}
									elseif($row['commentType'] == 2)
									{
										echo parsingImageByID($row['commenterID'], 'commenting', $row['item_commented'], $row['commentID'], $row['comment_time']);
									}
									elseif($row['commentType'] == 3)
									{
										echo parsingOpenletterByID($row['commenterID'], 'commenting', $row['item_commented'], $row['commentID'], $row['comment_time']);
									}
									elseif($row['commentType'] == 4)
									{
										echo parsingChannelByID($row['commenterID'], 'commenting', $row['item_commented'], $row['commentID'], $row['comment_time']);
									}
								}
								elseif($row['is_like'] == 'YES')
								{
									if($row['likeType'] == 0)
									{
										echo parsingStatusByID($row['likerID'], 'liking', $row['item_liked'], $row['likeID'], $row['like_time']);
									}
									elseif($row['likeType'] == 1)
									{
										echo parsingPostByID($row['likerID'], 'liking', $row['item_liked'], $row['likeID'], $row['like_time']);
									}
									elseif($row['likeType'] == 2)
									{
										echo parsingImageByID($row['likerID'], 'liking', $row['item_liked'], $row['likeID'], $row['like_time']);
									}
									elseif($row['likeType'] == 3)
									{
										echo parsingOpenletterByID($row['likerID'], 'liking', $row['item_liked'], $row['likeID'], $row['like_time']);
									}
									elseif($row['likeType'] == 4)
									{
										echo parsingChannelByID($row['likerID'], 'liking', $row['item_liked'], $row['likeID'], $row['like_time']);
									}
								}
								elseif($row['is_repost'] == 'YES')
								{
									if($row['repostType'] == 0)
									{
										echo parsingStatusByID($row['reposterID'], 'reposting', $row['item_reposted'], $row['repostID'], $row['repost_time']);
									}
									elseif($row['repostType'] == 1)
									{
										echo parsingPostByID($row['reposterID'], 'reposting', $row['item_reposted'], $row['repostID'], $row['repost_time']);
									}
									elseif($row['repostType'] == 2)
									{
										echo parsingImageByID($row['reposterID'], 'reposting', $row['item_reposted'], $row['repostID'], $row['repost_time']);
									}
									elseif($row['repostType'] == 3)
									{
										echo parsingIOpenletterByID($row['reposterID'], 'reposting', $row['item_reposted'], $row['repostID'], $row['repost_time']);
									}
									elseif($row['repostType'] == 4)
									{
										echo parsingChannelByID($row['reposterID'], 'reposting', $row['item_reposted'], $row['repostID'], $row['repost_time']);
									}
								}
								elseif(isset($row['is_folowing']))
								{
									echo $row['userID'] . ' is following ' . $row['is_following'];
								}
								elseif(isset($row['is_friendship']))
								{
									echo $row['fromID'] . ' is became friend width ' . $row['toID'];
								}
							}
							$n++;
						}
					}
					else
					{
						echo '<div class="col-sm-12 text-center" style="padding:60px 0"><div class="alert alert-danger"><h4>' . $page['full_name'] . ' ' . phrase('does_not_have_any_update') . ($timestamp ? ' ' . phrase('in') . ' ' . date('F', $timestamp) : '') . '</h4></div></div>';
					}
				?>
					
				<div class="row">
					<div class="col-sm-12 text-center">
					
						<?php echo timelinePaging($page['userID'], $limit, $offset, $timestamp); ?>
						
					</div>
				</div>
			</div>
			<div class="col-md-2 hidden-xs hidden-sm sticky">
				<h4><i class="fa fa-calendar"></i> &nbsp; <?php echo phrase('timeline'); ?></h4>
			
				<?php echo widget_timeLine($page['userName']); ?>
			</div>
			<div class="col-md-2 hidden hidden-sm sticky">
				<div class="row">
					<h4><i class="fa fa-certificate"></i> &nbsp; <?php echo phrase('top_contributors'); ?></h4>
				
					<?php echo widget_topContributors(); ?>
					
				</div>
				<br /><br />
				<h4><i class="fa fa-tags"></i> &nbsp; <?php echo phrase('trending'); ?></h4>
						
				<?php echo widget_hashTags(true, 10); ?>
						
			</div>
		</div>
	</div>
	
	<?php endforeach; ?>