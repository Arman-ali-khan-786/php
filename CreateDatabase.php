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
    <h1>Creating Database </h1>

    <?php
        // Connecting to a database

        $servername = "localhost";
        $username = "root";
        $password = "";

        // Creating a connection 
        $conn = mysqli_connect($servername,$username,$password);
        if(!$conn){
            die("Sorry we can't connect ".mysqli_connect_error());
            echo "<br>";
        }else{
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Connection Established !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            echo "<br>";
            // Create a DB
            $sql = 'create database School';
            $res = mysqli_query($conn,$sql);
            // echo var_dump($res);   // if db is created it will return true else false
            echo "<h1>And </h1>";
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
                <strong>Sorry Database creation Failed !</strong> because '.mysqli_error($conn).'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';

            }



        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>