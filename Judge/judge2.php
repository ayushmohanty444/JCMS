<html>

<head>
    <title>Server Page of Judgement Form</title>
</head>

<body>
    <?php
         try {
            //Database connection
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "jcms";
    
            $con = mysqli_connect($server, $username, $password, $database);
            
        } catch (\Throwable $th) {
            echo "Error";
        }
		
			$casetype=$_POST['casetype'];
			$caseno=$_POST['caseno'];
            $year=$_POST['year'];
			$rows=mysqli_query($con,"Select * from case_info where(case_type='$casetype' AND case_no='$caseno' AND year='$year')");
			//Query for fileno and judge id
			while($row=mysqli_fetch_array($rows)){
				$fileno=$row['f_filingno'];
				$jid=$row['j_regd'];
				$cno=$row['courtno'];
				
				//Query for judge name
				$judge=mysqli_query($con,"Select * from judge_info where(j_regd='$jid')");
				while($judge1=mysqli_fetch_array($judge)){
					$jname=$judge1['j_name'];
					
					$data=mysqli_query($con,"Select * from casefiling where(filingno='$fileno')");
					//query for case information
					while($result=mysqli_fetch_array($data)){
						$state=$result['state'];
						$court=$result['court'];
						
						$date=$result['date'];

						$pname=$result['pname'];
						$pgname=$result['pgname'];
						$page=$result['page'];
						$pgender=$result['pgender'];
						$pnation=$result['pnation'];
						$pcaste=$result['pcaste'];
						
						$padd=$result['padd'];
						$pcity=$result['pcity'];
						$pstate=$result['pstate'];
						$ppin=$result['ppin'];

						$rname=$result['rname'];
						$rgname=$result['rgname'];
						$rage=$result['rage'];
						$rgender=$result['rgender'];
						$rnation=$result['rnation'];
						$rcaste=$result['rcaste'];
						$radd=$result['radd'];
						$rcity=$result['rcity'];
						$rstate=$result['rstate'];
						$rpin=$result['rpin'];

						$advno=$result['advno'];
						$advname=$result['advname'];
						
						$radvno=$result['r_advno'];
						$radvname=$result['r_advname'];

						$fact=$result['fact'];
						$act=$result['act'];
						$section=$result['section'];
					}
				}
            }
			
		?>
    <form method="POST" action="judge3.php">
        <div class="container mt-3">
            <table class="table table-bordered border-warning">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center">Case Information</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Judge -->
                    <tr>
                        <th scope="row">State:</th>
                        <td><?php echo "$state" ?></td>
                        <th scope="row">Court:</th>
                        <td><?php echo "$court" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Filing No:</th>
                        <td><?php echo "$fileno" ?></td>
                        <th scope="row">Filing Date:</th>
                        <td><?php echo "$date" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Case type:</th>
                        <td><?php echo "$casetype" ?></td>
                        <th scope="row">Case No:</th>
                        <td><?php echo "$caseno" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Name of Judge:</th>
                        <td><?php echo "$jname" ?></td>
                        <th scope="row">Court No:</th>
                        <td><?php echo "$cno" ?></td>
                    </tr>
                    <!-- Petitioner -->
                    <tr>
                        <th colspan="4" class="text-center">Petitioner Information</th>
                    </tr>
                    <tr>
                        <th scope="row">Name:</th>
                        <td><?php echo "$pname" ?></td>
                        <th scope="row">Age:</th>
                        <td><?php echo "$page" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Gurdian:</th>
                        <td><?php echo "$pgname" ?></td>
                        <th scope="row">Gender:</th>
                        <td><?php echo "$pgender" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Caste:</th>
                        <td><?php echo "$pcaste" ?></td>
                        <th scope="row">Nationality:</th>
                        <td><?php echo "$pnation" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Village:</th>
                        <td><?php echo "$padd" ?></td>
                        <th scope="row">City:</th>
                        <td><?php echo "$pcity" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">State:</th>
                        <td><?php echo "$pstate" ?></td>
                        <th scope="row">PIN:</th>
                        <td><?php echo "$ppin" ?></td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">Petitioner Counsel</th>
                    </tr>
                    <tr>
                        <th scope="row">Advocate Name:</th>
                        <td><?php echo "$advname" ?></td>
                        <th scope="row">Advocate Registration No:</th>
                        <td><?php echo "$advno" ?></td>
                    </tr>

                    <!-- Respondent -->

                    <tr>
                        <th colspan="4" class="text-center">Respondent Information</th>
                    </tr>
                    <tr>
                        <th scope="row">Name:</th>
                        <td><?php echo "$rname" ?></td>
                        <th scope="row">Age:</th>
                        <td><?php echo "$rage" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Gurdian:</th>
                        <td><?php echo "$rgname" ?></td>
                        <th scope="row">Gender:</th>
                        <td><?php echo "$rgender" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Caste:</th>
                        <td><?php echo "$rcaste" ?></td>
                        <th scope="row">Nationality:</th>
                        <td><?php echo "$rnation" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Village:</th>
                        <td><?php echo "$radd" ?></td>
                        <th scope="row">City:</th>
                        <td><?php echo "$rcity" ?></td>
                    </tr>
                    <tr>
                        <th scope="row">State:</th>
                        <td><?php echo "$rstate" ?></td>
                        <th scope="row">PIN:</th>
                        <td><?php echo "$rpin" ?></td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">Respondent Counsel</th>
                    </tr>
                    <tr>
                        <th scope="row">Advocate Name:</th>
                        <td><?php echo "$radvname" ?></td>
                        <th scope="row">Advocate Registration No:</th>
                        <td><?php echo "$radvno" ?></td>
                    </tr>
                    <tr>
                        <th colspan="4">Case Fact:</th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <?php echo "$fact" ?>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Acts:</th>
                        <td><?php echo "$act" ?></td>
                        <th scope="row">Section:</th>
                        <td><?php echo "$section" ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-3">
                <label for="Judgement" class="form-label">Judgement:</label>
                <textarea class="form-control" name="judgement" id="judgement" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-primary me-md-2" style="background-color: black" type="submit"
                    name="submit">SUBMIT</button>
                <button class="btn btn-primary me-md-2" style="background-color: #F4CC4C;" type="reset">RESET</button>
            </div>
        </div>
    </form>
</body>

</html>