<?php 
	
	$query = $pdo->prepare("SELECT * FROM blog_posts ORDER BY id DESC");
 	$query->execute();

 	$blogPosts = $query->fetchall(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Blog</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1>Blog Title</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>Posts</h2>
			<a class="btn btn-primary" href="insert-post.php">New post</a>
			<table class="table">
				<tr>
					<th>Title</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
			<?php 

			foreach ($blogPosts as $blogPost) {
				echo '<tr>';
				echo '<td>' . $blogPost['title'] . '</td>';
				echo '<td>edit</td>';
				echo '<td>Delete</td>';
				echo '</tr>';
			}

			 ?>	
			</table>
		</div>
		<div class="col-md-4">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
		<footer>This is a footer</footer>
		<a href="admin/index.php">Admin panel</a>
		</div>
	</div>
	</div>
</body>
</html>