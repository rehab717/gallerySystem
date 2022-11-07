<?php include("includes/header.php"); ?>

<?php

if(!$session->is_signed_in()){
    header("location:login.php");
}

?>

<?php

if (empty($_GET['id'])) {

    header("location:photos.php");
    
}

$photo = Photo::find_by_id($_GET['id']);

if ($photo) {

    $photo->delete_photo();
    header("location:photos.php");

} else {

    header("location:photos.php");

}


