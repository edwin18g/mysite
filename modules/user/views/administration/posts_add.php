
	<link href="<?php echo base_url('themes/' . $this->settings['theme'] . '/css/redactor.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('themes/' . $this->settings['theme'] . '/css/tags.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.css" />

	<?php
	if(!$this->input->is_ajax_request()) echo '<br /><br />';
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<form action="<?php echo current_url(); ?>" method="post" class="form-horizontal submitForm" data-save="<?php echo phrase('save'); ?>" data-saving="<?php echo phrase('saving'); ?>" data-alert="<?php echo phrase('unable_to_add_article'); ?>">
				
					<?php if($this->input->is_ajax_request() && isset($modal)) { ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h3><i class="fa fa-plus"></i> &nbsp; <?php echo phrase('write_article'); ?></h3>
					</div>
					<?php } ?>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-8 sticky">
								<h3><?php echo 'Select Priest'//phrase('title_and_content'); ?></h3>
								<div class="form-group">
									<div class="col-sm-12">
										<!-- <input type="text" name="postPriest" class="form-control input-lg" value="< ?php echo htmlspecialchars(set_value('postTitle')); ?>" placeholder="< ?php echo phrase('post_title'); ?>" /> -->
										<select id="select-repo" class="repositories selectized" placeholder="Pick a repository..." ><option value="https://github.com/brianreavis/selectize.js" selected="selected">selectize.js</option></select>
									</div>
								</div>
								<br />
								<div class="form-group">
									<div class="col-sm-12">
										<textarea name="content" class="redactor form-control" placeholder="<?php echo phrase('write_article_here'); ?>"><?php echo set_value('content'); ?></textarea>
									</div>
								</div>
								<br />
								<div class="form-group">
									<div class="col-sm-12">
										<h4><?php echo phrase('tags'); ?></h4>
										<input name="tags"  data-role="tagsinput" class="form-control" type="text" value="<?php echo set_value('tags'); ?>" />
									</div>
								</div>
							</div>
							<div class="col-sm-4 sticky">
								<div class="form-group">
									<div class="col-sm-12">
										<h3>Select Role<?php //echo phrase('post_category'); ?></h3>	
										<?php
											foreach ($a_type as $id =>$t_name)
											{
												echo '<label class="control-label"><input type="checkbox" name="categoryID[]" value="' . $id . '"' . (set_value('categoryID[]') ? (in_array(set_value('categoryID[]'), json_decode(set_value('categoryID[]'))) ? ' checked' : '') : '') . ' /> ' . $t_name . '</label><br />';	
											}
										?>
									</div>
								</div>
								
								<?php if($this->session->userdata('user_level') == 1) { ?>
								<div class="form-group">	
									<label class="control-label col-sm-12 text-left">
										<input name="postHeadline" type="checkbox" value="Y"<?php if(set_value('postHeadline') == 'Y') echo ' checked'; ?> /> 
										<b class="text-danger"><?php echo phrase('headline'); ?></b>
									</label>
								</div>
								<?php } ?>
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 statusHolder">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<div class="col-xs-6 nomargin text-left">
								<?php if($this->input->is_ajax_request() && isset($modal)) { ?>
									<a href="javascript:void(0)" class="btn btn-default btn-lg" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> <?php echo phrase('cancel'); ?></a>
								<?php } else { ?>
									<a href="<?php echo base_url('user/posts'); ?>" class="btn btn-default btn-lg ajaxloads"><i class="fa fa-times"></i> <?php echo phrase('cancel'); ?></a>
								<?php } ?>
							</div>
							<div class="col-xs-6 nomargin">
								<input type="hidden" name="hash" value="<?php echo sha1(time()); ?>" />
								<button class="btn btn-success btn-lg submitBtn" type="submit"><i class="fa fa-save"></i> <?php echo phrase('save'); ?></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url('themes/' . $this->settings['theme'] . '/js/redactor.js'); ?>"></script>
	<script src="<?php echo base_url('themes/' . $this->settings['theme'] . '/js/tags.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.2/js/standalone/selectize.min.js"></script>
	
	<script type="text/javascript">
		if($(window).width() > 768)
		{
			$('.redactor').redactor({
				buttons:["formatting","|","bold","italic","deleted","|","unorderedlist","orderedlist","outdent","indent","|","image", "video", "link", "table","|","alignment","|","horizontalrule"],
				plugins: ['fontcolor'],
				minHeight: 200,
				imageUpload: '<?php echo base_url('user/upload/images/posts');?>',
				imageGetJson: '<?php echo base_url('user/upload/choose/posts');?>',
				imageUploadErrorCallback: function(response)
				{
					alert(response.error);
				}
			});
		}
		$('#select-repo').selectize({
    valueField: 'userID',
    labelField: 'full_name',
    searchField: 'full_name',
    create: false,
    render: {
        option: function(item, escape) {
            return '<div>' +
                '<span class="title">' +
                    '<span class="name"><i class="icon ' + (item.fork ? 'fork' : 'source') + '"></i>' + escape(item.full_name) + '</span>' +
                '</span>' +
            '</div>';
        }
    },
    
    load: function(query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: '<?php echo base_url('user/administration/get_user'); ?>',
            type: 'Post',
			data: {'search':query},
            error: function() {
                callback();
            },
            success: function(res) {
                callback(res.response);
            }
        });
    }
});

	</script>