<?php
//this show how the page looks when logged out
session_start();

session_destroy();

//after destroying the session, return back to the userloginpage
header("Location: userlogin.php");
exit;

?>