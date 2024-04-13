<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: j_login.php");
    exit();
}

include '../dbcon.php';
$is = $_SESSION['username'];
$sql = "select * from `judge_info` where  `j_email` = '$is' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $Name = $row['j_name'];
        $Regd = $row['j_regd'];
        $a = $row['j_phn'];
        $email = $row['j_email'];
        $img = $row['j_path'];
    }
} else {
    echo "Unable to Show your Information";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DASHBOARD | JCMS</title>
</head>

<body>
    <?php include 'head.php'; ?>
    <?php include 'j_nav.php'; ?>


    <div class="container boxtbl">
        <div class="row">
            <div class="col-auto me-auto">
                <h3>Welcome <strong><?php echo $Name; ?></strong></h3>
                <h6 class="d-inline-flex"><strong>Employee ID:</strong><?php echo $Regd; ?> </h6>
            </div>
            <div class="col-2"><img class="round" src="<?php echo $img; ?>" alt="logo" height="100" width="80"></div>
        </div>
    </div>
    <div class="container boxtbl">
        <h3 class="text-center">Table</h3>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Case No</th>
                    <th>Parties Name</th>
                    <th>Date</th>
                    <th>Time slot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>02/2023</td>
                    <td>XYZ Vs. ABC</td>
                    <td>2011/04/25</td>
                    <td>10:30 AM</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>02/2023</td>
                    <td>XYZ Vs. ABC</td>
                    <td>2011/04/25</td>
                    <td>10:30 AM</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>02/2023</td>
                    <td>XYZ Vs. ABC</td>
                    <td>2011/04/25</td>
                    <td>10:30 AM</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>02/2023</td>
                    <td>XYZ Vs. ABC</td>
                    <td>2011/04/25</td>
                    <td>10:30 AM</td>
                </tr>

            </tbody>
        </table>
    </div>

    <?php include 'foot.php'; ?>
</body>

</html>