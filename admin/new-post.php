<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/admin-global.css">
		<link rel="stylesheet" href="css/admin-new-post.css">
	</head>
	<body>
		<div class="body-wrapper">
			<h1>New Post</h1>
			<form method="POST" action="save-post.php">
				<label>Title</label><input name="title" type="text">
				<label>URL</label><input name="url" type="text">
				<label>Post Body</label><textarea name="post-body"></textarea>
				<input type="submit">
			</form>
		</div>
	</body>
</html>