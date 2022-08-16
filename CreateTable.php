<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $psswd = "";
// Connecting to a database and creating a table


     function Create_con($servername,$username,$psswd){
        

        $conn = mysqli_connect($servername,$username,$psswd);
        if($conn){
            echo "<br>";
            echo '
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Connection Established !</strong>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div><br>
            ';
        }else{
            echo "<br>";
            die("Sorry we can't connect ".mysqli_connect_error());
                echo "<br>";
        }
        $database = "dbArman";
        $sql = "create database $database";
        $res = mysqli_query($conn,$sql);
        if($res){
            echo "<br>";
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Database created Successfully !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }else{
            echo "<br>";
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Database creation Failed !</strong> '.mysqli_error($conn).'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';

        }
        return $database;
     }

     function create_table($servername,$username,$psswd){
        $db = Create_con($servername,$username,$psswd);
        $conn2 = mysqli_connect($servername,$username,$psswd,$db);
        if($conn2){
            echo "<br>";
            echo '
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Connection with database Established !</strong>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div><br>
            ';
            $sql = "CREATE TABLE `trip` (`S.no` INT(3) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`S.no`)) ";
            $res = mysqli_query($conn2,$sql);
            if($res){
                echo "<br>";
                 echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Table created Successfully !</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
                                        
            
            }else{
                echo "<br>";
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Table creation Failed !</strong>'.mysqli_error($conn2).'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
            
            }
        }else{
            echo "<br>";
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>"failed to establish a connection with database '.mysqli_error($conn2).'<br></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';


        }

     }
     create_table($servername,$username,$psswd);

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>