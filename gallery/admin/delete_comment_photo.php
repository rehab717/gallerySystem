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
    $session->message("The comment with {$comment->id} has been deleted");
    header("location:comment_photo.php?id={$comment->photo_id }");

} else {

    header("location:comment_photo.php?id={$comment->photo_id }");

}
