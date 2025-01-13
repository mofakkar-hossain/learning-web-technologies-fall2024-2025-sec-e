<?php
session_start();
require_once('../model/authorModel.php');

if (!isset($_SESSION['username'])) {
    header('Location: ../view/login.php');
    exit();
}

if (isset($_POST['id'])) {
    $id = $_POST['id']; 

  
    $name = trim($_POST['name']);
    $contact_no = trim($_POST['contact_no']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    
    if ($name == "" || $contact_no == "" || $username == "" || $password == "") {
        echo "All fields are required.";
        exit();
    }

    if (updateAuthor($id, $name, $contact_no, $username, $password)) {
        header('Location: ../view/adminDashboard.php');
        exit();
    } else {
        echo "Error updating author.";
    }
} else {
    echo "No author ID provided.";
    exit();
}
?>
