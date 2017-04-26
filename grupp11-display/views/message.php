<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../resources/stylesheets/reset.css">
    <link rel="stylesheet" href="../../resources/stylesheets/styles.css">
    <title>Display</title>
    <meta http-equiv="refresh" content="60" >
</head>
<body>
<div class="wrapper">
    <div class="comments-list">
        <?php
            if (isset($message)){
                echo "<div id='read'>{$message}</div>";
            }
        ?>
        <!--<ul class="comments-holder-ul">
        </ul> -->
    </div>
    <a id="achange" href="Admin">Change message</a>
    <div id="txt"></div>
</div>

<script type="text/javascript" src="../../resources/scripts/time.js"></script>
<script type="text/javascript" src="../../resources/scripts/scroll.js"></script>
