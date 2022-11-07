<?php include("includes/header.php"); ?>

<?php

if(!$session->is_signed_in()){
    header("location:login.php");
}

?>

<?php

if (empty($_GET['id'])) {
    header("location:users.php");
}

$user = User::find_by_id($_GET['id']);

if ($user) { 

    $user->delete();
    header("location:users.php");

} else {

    header("location:users.php");

}
