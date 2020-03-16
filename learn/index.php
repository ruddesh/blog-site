<?php require_once('init.php'); ?>
<?php require_once('header.php'); ?>
<?php 
    $allposts = new Post();
    $posts = $allposts->getposts(); 
?>


      <div class="jumbotron p-3 p-md-4 text-white rounded ">
        <div class="col-md-6 px-0">
          <h3 class="display-5 font-bold ">Read Below</h3>
        </div>
      </div> 

      <div class="row mb-2">
        
        <?php foreach($posts as $post) : ?>
            <div class="col-md-12">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?php //echo $post['title']; ?></h3> <!-- would have to use like this if it was FETCH_ASSOC -->
                  <h3 class="mb-0"><?php echo $post->title; ?></h3>  <!-- cause used FETCH_OBJ on line 5 -->
                  <div class="mb-1 text-muted"><?php echo $post->created_at; ?></div>
                  <div class="mb-1 text-muted">By: <?php echo $post->author; ?></div>
                  <p class="mb-auto"><?php echo $post->body; ?></p><br>
                    <a href="edit.php?id=<?php echo $post->id ?>" class="col-md-1 btn btn-info">Edit</a><br>
                    <a onclick="return confirm('Delete?')" href="delete.php?id=<?php echo $post->id ?>" class="col-md-1 btn btn-danger">Delete</a>
                </div>
              </div>
            </div>

        <?php endforeach; ?>
     
      </div>
    </div>

<?php require_once('footer.php'); ?>

    