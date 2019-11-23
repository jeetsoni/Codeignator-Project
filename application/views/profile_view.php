<?php include('header.php'); ?>
<div class="container" style="margin-top: 50px;">
	
<div class="container">
	<div class="row">
		<a href="<?php base_url() ?>profile_con/addpost" class="btn btn-lg btn-primary" style="margin-bottom: 10px;">Add Post</a>
		
	</div>
	
</div>
<div class="table">
	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Article Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($artlicles)): ?>
		<?php foreach ($artlicles as $art): ?>
		<tr>
			<td>1</td>
			<td><?php echo $art->article_title; ?></td>
			<td><a href="#" class="btn btn-primary">Edit</a></td>
			<td><a href="#" class="btn btn-danger">Delete</a></td>
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
