
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 0px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
  position: absolute;
      width: 95%;
    z-index: 9999;
    height:200px;
    overflow:auto;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
	<?php
	if(!$this->input->is_ajax_request()) echo '<br /><br />';
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="<?php echo current_url(); ?>" method="post" class="form-horizontal submitForm" data-save="<?php echo phrase('save'); ?>" data-saving="<?php echo phrase('saving'); ?>" data-alert="<?php echo phrase('unable_to_add_article'); ?>">
				
					<?php if($this->input->is_ajax_request() && isset($modal)) { ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h3><i class="fa fa-plus"></i> &nbsp; Edit Commission</h3>
					</div>
					<?php } ?>
					
					<div class="modal-body">
						<div class="row">
							
							<div class="col-sm-12 sticky">
								<h5><?php echo 'Commission Name'//phrase('title_and_content'); ?></h5>
									<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="title" class="form-control input-lg" placeholder="" value="<?php echo $commission['c_name']; ?>" />
									</div>
								</div>
									<h5><?php echo 'Commission URl'//phrase('title_and_content'); ?></h5>
									<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="title" class="form-control input-lg" placeholder="" value="<?php echo $commission['slug']; ?>" />
									</div>
								</div>
									
							<h5><?php echo 'Select Commission Admin '//phrase('title_and_content'); ?></h5>
								<div class="form-group">
									<div class="col-sm-12">
										<!-- <input type="text" name="postPriest" class="form-control input-lg" value="< ?php echo htmlspecialchars(set_value('postTitle')); ?>" placeholder="< ?php echo phrase('post_title'); ?>" /> -->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search user" title="Type in a name">

<ul id="myUL">
 
</ul>
									</div>
								</div>
								<br />
								
								
								
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
									<a href="<?php echo base_url('user/administration'); ?>" class="btn btn-default btn-lg ajaxloads"><i class="fa fa-times"></i> <?php echo phrase('cancel'); ?></a>
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


	<script type="text/javascript">
	var base_url  = '<?php echo base_url()?>';
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
            return `<div class="media">
  						<div class="media-left">
    						<img src="`+ base_url+`uploads/users/thumbs/`+item.photo + `" class="media-object" style="width:60px">
  						</div>
  						<div class="media-body">
    						<h4 class="media-heading">` + escape(item.full_name) + `</h4>
    						<p>Lorem ipsum...</p>
  						</div>
					</div>`;
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
var currentRequest = null;

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value;
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
   
   document.getElementById("myUL").innerHTML= ' <li><a href="#">Loading.... please type slow</a></li>';
    
         currentRequest =	$.ajax({
                    url: base_url+'user/commissions/user_filter_select',
                    type: "POST",
                    data: {'keyword':filter,'slug':filter},
                     beforeSend : function()    {           
        if(currentRequest != null) {
            currentRequest.abort();
        }
    },
                    success: function(response){
					
					$('#myUL').html(response);
                    }
                });
   
}
var CommissUser = null;
function selectFilterId(id)
{
	CommissUser = id;
	 ul = document.getElementById("myUL");
	 ul.style.display="none";
}
	</script>