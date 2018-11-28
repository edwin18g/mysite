
<?php echo getNewSnapshotHome(5); ?>
<div class="jumbotron" style="background:url(<?php echo base_url('uploads/users/covers/placeholder.jpg'); ?>) center center no-repeat;background-size:cover;-webkit-background-size:cover;background-position:fixed;padding-top:240px;padding-bottom:0;margin-bottom:0;width:100%"></div>
<div class="container" style="position:relative">
    <div class="row" style="position:absolute;bottom:0;width:100%">
        <div>
            <div class="col-sm-2 nomargin relative">
              <div class="userImage">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0 text-center" style="padding:0">
                        <div class="rounded" style="width:100%;border:6px solid #eee;overflow:hidden">
                            <?php echo '<img src="' . base_url('uploads/users/' . imageCheck('users', getUserPhoto($page['userID']))) . '" class="image-rounded img-bordered" style="width:100%" alt="" />'; ?>
                        </div>
                    </div>
                </div>
              
            </div>
            
        </div>
    </div>
</div>
<div style="border-bottom:1px solid #ddd">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2" style="position:relative">
                <div class="btn-group btn-group-justified">
                    <a class="ajaxloads btn btn-default btn-lg active" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar" style="border-right:none"><i class="fa fa-newspaper-o"></i><span class="hidden-xs"> &nbsp; Wall</span></a>
                    <a class="ajaxloads btn btn-default btn-lg" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/friends" style="border-right:none"><i class="fa fa-users"></i><span class="hidden-xs"> &nbsp; Friends</span> <small class="badge" id="friends-count">0</small></a>
                    <a class="ajaxloads btn btn-default btn-lg" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/followers" style="border-right:none"><i class="fa fa-retweet"></i><span class="hidden-xs"> &nbsp; Followers</span> <small class="badge" id="followers-count">0</small></a><a class="ajaxloads btn btn-default btn-lg" href="http://kuzhithuraidiocese.com/new/fr-jaya-kumar/following"><i class="fa fa-random"></i><span class="hidden-xs"> &nbsp; Following</span> <small class="badge" id="following-count">0</small></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="profileView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_table">
        <div class="modal-content modal_cell">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h3 id="myModalLabel"><i class="fa fa-user"></i> &nbsp; kuzhi</h3>
                            </div>
                            <div class="modal-body">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-10 col-xs-offset-1">
                                            <h4><i class="fa fa-info-circle"></i> <?php echo phrase('account_details'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-1 col-xs-offset-1 text-left"><i class="fa fa-quote-left"></i></label>
                                        <div class="col-xs-9">
                                            text
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-1 col-xs-offset-1 text-left"><i class="fa fa-map-marker"></i></label>
                                        <div class="col-xs-9">
                                            text
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-1 col-xs-offset-1 text-left"><i class="fa fa-mobile"></i></label>
                                        <div class="col-xs-9">
                                            text
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-1 col-xs-offset-1 text-left"><i class="fa fa-venus-mars"></i></label>
                                        <div class="col-xs-9">
                                            text
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-1 col-xs-offset-1 text-left"><i class="fa fa-child"></i></label>
                                        <div class="col-xs-9">
                                          text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <div class="col-xs-4 text-left">
                                        <button type="button" data-dismiss="modal" class="btn btn-default"><i class="fa fa-times"></i> <?php echo phrase('close'); ?></button>
                                    </div>
                                    <div class="col-xs-8">
                                        
                                            
                                                <span class="btn-group">
                                                   
                                                </span>
                                            
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

