<?php include('header.php'); ?>


<div class="container" style="margin-top: 50px;">

<div class="container">
	<div class="row">
		<a href="<?php base_url() ?>profile_con/addpost" class="btn btn-lg btn-primary" style="margin-bottom: 10px;">Add Post</a>
	</div>
	
</div>

<?php if($insert_post = $this->session->flashdata('insert_post')): 
$msg_class = $this->session->flashdata('msg_class');

?>
<div class="row">
	<div class="col-lg-6">
		<div class="alert <?php echo $msg_class?>">
			<?php echo $insert_post; ?>
		</div>
	</div>
</div>
<?php endif; ?>



<div class="table">
	<div class="row">
	<?php if(count($artlicles)): ?>
<?php foreach ($artlicles as $art): ?>
<div class="card my-4 mx-4" style="width: 18rem;">
<?php if(!is_null($art->image_path)) {?>  
<img class="img-thumbnail" src="<?php echo $art->image_path ?>" alt="">
<?php } ?>
  <div class="card-body">
    <p class="card-text"><?php echo $art->article_title; ?>	</p>
    <a href="<?php echo base_url("profile_con/editpost/{$art->id}") ?> " class="btn btn-info">Edit</a>
	<a href="<?php echo base_url("profile_con/delpost/{$art->id}") ?> " class="btn btn-danger">Delete</a>
  </div>
</div>
<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="3">No Data Available</td>
		</tr>
	<?php endif; ?>
</div>
	
	</div>	
</div>






</body>
</html>
