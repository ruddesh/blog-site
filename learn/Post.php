<?php 
require_once('init.php');

class Post extends Db{

// Using PDO 

    public function getposts(){
    	$sql = "SELECT * FROM posts ";
    	$stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    	$posts = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $posts;
    }

    public function createpost() {
        $message = '';

        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['body'])) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $body = $_POST['body'];

            $sql = "INSERT INTO posts(title, author, body) VALUES(:title, :author, :body)";
            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':title' => $title, ':author' => $author, ':body' => $body])) {
                header("Location: /learn/index.php");               
                $message = "Created Successfully";
            };
        }
    }

    public function editpost() {
        $id = $_GET['id'];

        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['body'])) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $body = $_POST['body'];

            $sql = "UPDATE posts SET title=:title, author=:author, body=:body WHERE id=:id";
            $statement = $this->connect()->prepare($sql);
            if ($statement->execute([':title' => $title, ':author' => $author, ':body' => $body, ':id' => $id])) {
                header("Location: /learn/index.php");
                
            };
        }
    }
    
    public function getid(){
        $id = $_GET['id'];
        $sql = 'SELECT * FROM posts WHERE id= :id';
        $statement = $this->connect()->prepare($sql);
        $statement->execute([':id' => $id]);
        $person = $statement->fetch(PDO::FETCH_OBJ);
        return $person;
    }

    // public function editpost() {
    //     $id = $_GET['id'];
    //     $sql = 'SELECT * FROM posts WHERE id= :id';
    //     $statement = $this->connect()->prepare($sql);
    //     $statement->execute([':id' => $id]);

    //     if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['body'])) {
    //         $title = $_POST['title'];
    //         $author = $_POST['author'];
    //         $body = $_POST['body'];

    //         $sql = "UPDATE posts SET title=:title, author=:author, body=:body WHERE id=:id";
    //         $statement = $this->connect()->prepare($sql);
    //         if ($statement->execute([':title' => $title, ':author' => $author, ':body' => $body, ':id' => $id])) {
    //             header("Location: /learn/index.php");
                
    //         };
    //     }
    // }

    public function deletepost() {
        $id = $_GET['id'];

        $sql = 'DELETE FROM posts WHERE id= :id';
        $statement = $this->connect()->prepare($sql);
        if ($statement->execute([':id' => $id])) {
            header("Location: /learn/index.php");
        }
    }
}
 
