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
	<table>
	<thead>
		<tr>
			<th>Article Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($artlicles)): ?>
		<?php foreach ($artlicles as $art): ?>
		<tr>
			<td><?php echo $art->article_title; ?></td>
			<td><a href="#" class="btn btn-info">Edit</a></td>
			<td>
				<?php echo
				form_open('profile_con/delpost'),
				form_hidden('id',$art->id),
				form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
				form_close();
				 ?>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="3">No Data Available</td>
		</tr>
	<?php endif; ?>
	</tbody>
	</table>
	
</div>
</div>
</body>
</html>
