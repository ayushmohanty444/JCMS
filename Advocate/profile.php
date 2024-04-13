<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: a_login.php");
    exit();
}
include '../dbcon.php';
$is = $_SESSION['username'];
$sql = "select * from `advocate_info` where  `a_email` = '$is' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $Name = $row['a_name'];
        $Regd = $row['a_regd'];
        $a = $row['a_phn'];
        $email = $row['a_email'];
        $img = $row['a_path'];
    }
} else {
    echo "Unable to Show your Information";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile | JCMS</title>
</head>
<style>
    label {
        color: blue;
        font-weight: 700;
    }

    .boxtbl {
        height: 600px;
    }
</style>

<body>
    <?php include 'head.php'; ?>
    <?php include 'a_nav.php'; ?>

    <div class="container boxtbl">
        <h3 class="text-center underline" style="color:whitesmoke; font-weight:700;"><u>Profile Information</u></h3>
        <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color" style="line-height: 70px;">Welcome <?php echo $Name; ?></h3>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>NAME:</label>
                                        <p><?php echo $Name; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>REGISTRATION NUMBER:</label>
                                        <p><?php echo $Regd; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>PHONE NUMBER:</label>
                                        <p><?php echo $a; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>E-MAIL:</label>
                                        <p><?php echo $email; ?></p>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>info@domain.com</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>820-885-3321</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="<?php echo $img; ?>" height="300" width="300" alt="profile">
                        </div>
                    </div>
                </div>
                <!-- <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>


    </div>
    <?php include 'foot.php'; ?>
</body>

</html>