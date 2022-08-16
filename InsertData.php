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
$db = "dbArman";
$conn = mysqli_connect($servername,$username,$psswd,$db);
if($conn){
    echo "<br>";
    echo '
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Connection Established !</strong>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div><br>
    ';
    $name = "Pratik";
    $dest = "Rayagada";
    $sql = "INSERT INTO `trip` (`Name`, `dest`) VALUES ('$name', '$dest');";
    // $sql = "INSERT INTO `trip` (`Name`, `dest`) VALUES ('Zeehan', 'Jamshedpur');";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<br>";
         echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Record inserted Successfully !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
                                
    
    }else{
        echo "<br>";
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Record insertion  Failed !</strong>'.mysqli_error($conn
            ).'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ';
    
    }
}else{
    echo "<br>";
    die("Sorry we can't connect ".mysqli_connect_error());
    echo "<br>";
}


?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>