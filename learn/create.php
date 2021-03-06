<?php require_once('init.php'); ?>
<?php 
  	// if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['body'])) {
  	// $title = $_POST['title'];
  	// $author = $_POST['author'];
  	// $body = $_POST['body'];
		// $sql = "INSERT INTO posts(title, author, body) VALUES(:title, :author, :body)";
		// $statement = $conn->prepare($sql);
		// if ($statement->execute([':title' => $title, ':author' => $author, ':body' => $body])) {
		// 	$message = "Created Successfully";
		// };}
		$newpost = new Post();
		$newpost-> createpost();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Blog Site</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" >
    <meta name="theme-color" content="#563d7c">
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
        <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="/learn/index.php">Home</a>
          </div>
          <div class="col-4 pt-1">
            <h4>Your Article</h4>
          </div>
          <div class="col-4 text-center">
            <h2>BlogSite</h2>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
        </div>
        </header>

      <div class="jumbotron p-3 p-md-4 text-white rounded ">
        <div class="col-md-6 px-0">
          <h3 class="display-5 font-bold "></h3>
        </div>
      </div> 
<?php if(!empty($message)): ?>
	<div class="alert alert-success">
		<?php $message; ?>
	</div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-12" >
    	<div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" >
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" >
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary pull-right" value="Create">
        </div>
    </div>
</form>

<?php require_once('footer.php'); ?>
