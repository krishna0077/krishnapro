<?php 
include('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>College-Notes-Gallery</title>
    <script src="dashboard/js/tinymce/tinymce.min.js"></script>
    <script src="dashboard/js/tinymce/script.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/cms-home.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/material-icons.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->


    <link rel="stylesheet" href="loginstyle.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    .iframe-container {
        overflow: hidden;
        // Calculated from the aspect ration of the content (in case of 16:9 it is 9/16= 0.5625)
        padding-top: 56.25%;
        position: relative;
    }

    .iframe-container iframe {
        border: 0;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    </style>
</head>


<body>