<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/stylesheets/reset.css">
    <link rel="stylesheet" href="../resources/stylesheets/styles.css">
    <title>Display</title>
    <meta http-equiv="refresh" content="60" >
</head>
<body onload="startTime()">
<div class="wrapper">
    <div class="comments-list">
        <?php
            if (isset($message)){
                echo "<p>{$message}</p>";
            }
        ?>
        <!--<ul class="comments-holder-ul">
        </ul> -->
    </div>
    <p id="welcome">Välkommen!</p>
    <a id="achange" href="admin.php">Change message</a>
    <div id="txt"></div>
</div>

<script type="text/javascript" src="../resources/scripts/time.js"></script>
