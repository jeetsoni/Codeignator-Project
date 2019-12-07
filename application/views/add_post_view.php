<?php include('header.php'); ?>
		<div class="container">
			<br />
			<div class="col-lg-12">
			<div class="panel panel-default col-lg-6 lform">
				<div class="panel-heading"><h1>Add Post</h1></div>
				
				<div class="panel-body">
					<?php 
					if($this->session->flashdata('message'))
					{
						echo '<div class="alart alart-danger">'.$this->session->flashdata("message").'
								</div>';

					}
					 ?>
					
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>profile_con/add_validation" >
					<?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
					<div class="form-group">
						<label>Post Tittle</label>
						<input type="text"  name="article_title" class="form-control" value="<?php echo set_value('article_title'); ?>" placeholder="Enter Post Title"  >
						<span class="text-danger"><?php echo form_error('article_title'); ?></span>
					</div>

					<div class="form-group">
						<label>Post Body</label>
						<textarea type="text-area" name="article_body" class="form-control" value="<?php echo set_value('article_body'); ?>" rows="10" cols="30" ></textarea>
						<span class="text-danger"><?php echo form_error('article_body'); ?></span>

					</div>
					<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
						<label for="body">Select Image</label>

						<?php echo form_upload(['name'=>'userfile']); ?>

						</div>
					</div>
					<div class="col-lg-6" style=" margin-top: 35px; color: red;">
						<?php if(isset($upload_error)) { echo $upload_error;} ?>

					</div>
					</div>

					<div class="forn-group">
						<input type="submit" value="Add Post" class="btn btn-info">
						<input type="reset"  class="btn btn-danger" value="Reset">
					</div>	


					</form>
					</div>
				</div>
			</div>
		</div>
