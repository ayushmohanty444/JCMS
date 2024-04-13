<?php
$f = $_GET['fno'];
// echo $f;
include '../dbcon.php';
try {
    $sql = "SELECT * FROM `casefiling` WHERE `filingno`='$f'";
    $run = mysqli_query($con, $sql);
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
            $filingno = $row['filingno'];
            $state = $row['state'];
            $court = $row['court'];
            $casetype = $row['casetype'];
            $date = $row['date'];
            $pname = $row['pname'];
            $pgname = $row['pgname'];
            $page = $row['page'];
            $pgender = $row['pgender'];
            $pnation = $row['pnation'];
            $pcaste = $row['pcaste'];
            $pemail = $row['pemail'];
            $pphn = $row['pphn'];
            $padd = $row['padd'];
            $pcity = $row['pcity'];
            $pstate = $row['pstate'];
            $ppin = $row['ppin'];
            $rname = $row['rname'];
            $rgname = $row['rgname'];
            $rage = $row['rage'];
            $rgender = $row['rgender'];
            $rnation = $row['rnation'];
            $rcaste = $row['rcaste'];
            $radd = $row['radd'];
            $rcity = $row['rcity'];
            $rstate = $row['rstate'];
            $rpin = $row['rpin'];
            $advno = $row['advno'];
            $advname = $row['advname'];
            $fact = $row['fact'];
            $act = $row['act'];
            $section = $row['section'];
            $sts = $row['sts'];
        }
    } else {
        echo "Records not available";
        exit();
    }
} catch (\Throwable $th) {
    echo "Error to Found data";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Information | JCMS</title>
</head>

<body>
    <?php include 'head.php'; ?>
    <section>
        <div class="container text-center">
            <h2><strong>Highcourt of Odisha</strong></h2>
        </div>
        <div class="container border border-primary rounded mb-3">
            <h5 class=""><u>Case Information:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <div class="col">
                        <p><strong>Case Type:</strong> <span><?php echo $casetype; ?></span></p>
                        <p><strong>Filing Number:</strong> <span><?php echo $filingno; ?></span></p>
                        <p><strong>Filing date:</strong> <span><?php echo $date; ?></span></p>
                    </div>

                    <div class="col">
                        <?php
                        $query = "SELECT * FROM `case_info` WHERE `f_filingno`='$filingno' ";
                        $res = mysqli_query($con, $query);
                        if (mysqli_num_rows($res) > 0) {
                            while ($r = mysqli_fetch_assoc($res)) {
                                $case = $r["case_no"] . '/' . $r["year"];
                                $rdate = $r["regd_date"];
                                $jid = $r["j_regd"];
                            }
                        }
                        $query2 = "SELECT * FROM `judge_info` WHERE `j_regd`='$jid' ";
                        $run2 = mysqli_query($con, $query2);
                        $rw = mysqli_fetch_array($run2);
                        $jname = $rw['j_name'];
                        ?>
                        <p><strong>Case No:</strong> <span><?php echo $case; ?></span></p>
                        <p><strong>Registration Date:</strong> <span><?php echo $rdate; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container border border-primary-subtle rounded mb-3">
            <h5 class=""><u>Case Status:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <div class="col">
                        <p><strong>State:</strong> <span><?php echo $state; ?></span></p>
                        <p><strong>Case Status:</strong> <span><?php echo $sts; ?></span></p>
                    </div>

                    <div class="col">
                        <p><strong>Judge:</strong> <span><?php echo $jname; ?></span></p>
                        <p><strong>Court Number:</strong> <span>C5302</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container border border-primary rounded mb-3">
            <h5 class=""><u>Petitioner:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <div class="col">
                        <p><strong>Petitioner Name:</strong> <span><?php echo $pname; ?></span></p>
                        <p><strong>Guaridan:</strong> <span><?php echo $pgname; ?></span></p>
                        <p><strong>Age:</strong> <span>5<?php echo $page; ?></span></p>
                        <h5><u>Address:</u></h5>
                        <p><strong>Village:</strong> <span><?php echo $padd; ?></span></p>
                        <p><strong>City:</strong> <span><?php echo $pcity; ?></span></p>
                    </div>

                    <div class="col">
                        <p><strong>Gender:</strong> <span><?php echo $pgender; ?></span></p>
                        <p><strong>Caste:</strong> <span><?php echo $pcaste; ?></span></p>
                        <p><strong>Nationality:</strong> <span><?php echo $pnation; ?></span></p>
                        <br>
                        <p><strong>State:</strong> <span><?php echo $pstate; ?></span></p>
                        <p><strong>PIN:</strong> <span><?php echo $ppin; ?></span></p>
                    </div>
                </div>
                <h5><u>Advocate:</u></h5>
                <div class="mt-3 row">
                    <p><strong>Advocate Name:</strong> <span><?php echo $advname; ?></span></p>
                    <p><strong>Advocate Registration No:</strong> <span><?php echo $advno; ?></span></p>
                </div>
            </div>
        </div>
        <div class="container border border-primary-subtle rounded mb-3">
            <h5 class=""><u>Respondent:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <div class="col">
                        <p><strong>Respondent Name:</strong> <span><?php echo $rname; ?></span></p>
                        <p><strong>Guaridan:</strong> <span><?php echo $rgname; ?></span></p>
                        <p><strong>Age:</strong> <span><?php echo $rage; ?></span></p>
                        <h5><u>Address:</u></h5>
                        <p><strong>Village:</strong> <span><?php echo $radd; ?></span></p>
                        <p><strong>City:</strong> <span><?php echo $rcity; ?></span></p>
                    </div>

                    <div class="col">
                        <p><strong>Gender:</strong> <span><?php echo $rgender; ?></span></p>
                        <p><strong>Caste:</strong> <span><?php echo $rcaste; ?></span></p>
                        <p><strong>Nationality:</strong> <span><?php echo $rnation; ?></span></p>
                        <br>
                        <p><strong>State:</strong> <span><?php echo $rstate; ?></span></p>
                        <p><strong>PIN:</strong> <span><?php echo $rpin; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container border border-primary rounded mb-3">
            <h5 class=""><u>ACTs:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <p><strong>Under Act(s):</strong> <span><?php echo $act; ?></span></p>
                    <p><strong>Under Section(s):</strong> <span><?php echo $section; ?></span></p>
                </div>
            </div>
        </div>
        <div class="container border border-primary-subtle rounded mb-3">
            <h5 class=""><u>History of Case:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judge</th>
                                <th scope="col">Dates</th>
                                <th scope="col">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>M.K Singh</td>
                                <td>22.02.2024</td>
                                <td>Case Admission</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>M.K Singh</td>
                                <td>25.02.2024</td>
                                <td>Hearing from Petitioner side</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>M.K Singh</td>
                                <td>01.03.2024</td>
                                <td> Order</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container border border-primary rounded mb-3">
            <h5 class=""><u>Orders/Judgements:</u></h5>
            <div class="mt-3">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Order on</th>
                                <th scope="col">Judge</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>200/2023</td>
                                <td>M.K Singh</td>
                                <td>22.02.2024</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>200/2023</td>
                                <td>M.K Singh</td>
                                <td>25.02.2024</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>200/2023</td>
                                <td>M.K Singh</td>
                                <td>01.03.2024</td>
                                <td><a href="#">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-6 text-center">
                    <input type="button" class="btn btn-warning" onclick="window.print()" value="Print">
                </div>
                <div class="col-6 text-center">
                    <a href="clientform.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'foot.php'; ?>
</body>

</html>