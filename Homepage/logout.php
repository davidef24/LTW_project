<?php
    session_start();
// remove all session variables
    session_unset();
// destroy the session
    session_destroy();
//Reindirizza alla home page
    header("Location: http://localhost:3000/Homepage/homepage.html");
?>