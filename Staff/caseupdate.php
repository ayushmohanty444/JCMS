<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: s_login.php");
    exit();
}
include 'head.php';
include 's_nav.php';
include '../dbcon.php';

if (isset($_POST['submit'])) {
    $case = $_POST['caseno'];
    $year = $_POST['year'];
    $date = $_POST['date'];
    $remark = $_POST['remark'];

    $sql = "INSERT INTO `case_history` (`slno`, `case_no`, `year`, `next_date`, `remark`) VALUES (NULL, '$case', '$year', '$date', '$remark')";
    $run = mysqli_query($con, $sql);
    if ($run) {
        echo '<div class="alert alert-success alert-dismissible align-items-center fade show text-center" role="alert">
        <strong>Remark Update Successfully!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASE INFORMATION UPDATE | JCMS</title>
</head>
<style>
.card {
    margin-top: 40px;

    background: hsla(0, 0%, 100%, 0.8);
    backdrop-filter: blur(30px);
    margin-right: 10%;
    margin-left: 10%;

}

.row {
    --bs-gutter-x: 3.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: 1.5rem;
    margin-right: calc(1* var(--bs-gutter-x));
    margin-left: 3.5rem;
}

.me-md-2 {
    margin-right: .5rem;
    margin-top: 2rem;
}
</style>

<body>

    <section class="mb-4">
        <div class="card">
            <div style="background-color:#F4CC4C; text-align: center;">
                <h3 class="p-2">Case Information Update Form</h3>

            </div>
            <div class="card-body py-5 px-md-5">
                <!-- form started -->
                <form method="POST">
                    <div class="row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Case Type</label>
                        <div class="col-sm-5 mb-2">
                            <select class="form-select" id="casetype" name="casetype" required>
                                <option selected>Choose...</option>
                                <option value="WP(C)">WP(C) - WP(C)-Writ Petition under Art.226 and 227</option>
                                <option value="ABLAPL">ABLAPL - ABLAPL- Anticipatory Bail</option>
                                <option value="CRLMC">CRLMC - CRLMC-Appl.under Sec.482 Cr.P.C</option>
                                <option value="CMAPL">CMAPL - CMAPL-Miscellaneous Applications</option>
                                <option value="CMP">CMP - CMP-Civil Miscellaneous Petition</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Case Number</label>
                        <div class="col-sm-5">
                            <input type="number" maxlength="6" class="form-control" id="caseno" placeholder="1234"
                                name="caseno">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Year</label>
                        <div class="col-sm-5">
                            <input type="number" maxlength="4" class="form-control" id="year" placeholder="YYYY"
                                name="year">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Next Date</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" placeholder="DD-MM-YYYY" name="date">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-form-label">Remark</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" rows="3" placeholder="Status" name="remark"></textarea>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary me-md-2" style="background-color: black" type="submit"
                            name="submit">SUBMIT</button>
                        <button class="btn btn-primary me-md-2" style="background-color: #F4CC4C;"
                            type="reset">RESET</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <?php include 'foot.php' ?>
</body>

</html>