<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/stylesheets/reset.css">
    <link rel="stylesheet" href="../resources/stylesheets/styles.css">
    <title>Change</title>
</head>
<body>
<div class="wrapper">
    <div class="comment-wrapper2">
        <div class="comment-insert">
            <form method="POST" action="">
                <div class="comment-insert-container">
                    <textarea id="comment-post-text" class="comment-insert-text"></textarea>
                </div>

                <div id='comment-post-btn' class='comment-post-btn-wrapper'>
                    <button class='knappenjava' type='submit' name='commentSubmit'>Comment</button>
                </div>
            </form>
        </div>
        <a id="achange2" href="start.php">Back to message</a>
    </div>

</div>

