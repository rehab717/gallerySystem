<?php include("includes/header.php"); ?>

<?php

if(!$session->is_signed_in()){
    header("location:login.php");
}

?>

<?php

if (empty($_GET['id'])) {
    header("location:comments.php");
}

$comment = Comment::find_by_id($_GET['id']);

if ($comment) { 

    $comment->delete();
    header("location:comments.php");

} else {

    header("location:comments.php");

}
