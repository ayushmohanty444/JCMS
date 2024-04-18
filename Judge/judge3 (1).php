<html>

<head>
    <title>Server Page of Judge 2</title>
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
            $judgement=$_POST['judgement'];

            mysqli_query($con,"insert into casefiling values(judgement='$judgement')") 
        ?>
</body>

</html>