<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: j_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Judgement Panel | JCMS</title>
</head>

<body>
    <?php include 'head.php'; ?>
    <?php include 'j_nav.php'; ?>

    <div class="container boxtbl">
        <span>Information</span>
    </div>
    <div class="container boxtbl">
        <h3 class="text-center">Form</h3>

    </div>

    <?php include 'foot.php'; ?>
</body>

</html>