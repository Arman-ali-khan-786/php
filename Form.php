<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Contact Us</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="\CWHPHP\GetPost.php">Home</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <?php
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $query = $_POST['query'];
            $_database = "Contacts";
            $conn = mysqli_connect("localhost","root","",$_database);
            if($conn){
                echo "<br>";
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Connection Established !</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
                echo "<br>";
                $sql = "INSERT INTO `contactdetails` ( `Name`, `email`, `query`, `Date`) VALUES ( '$name', '$email', '$query', current_timestamp());";
                $res = mysqli_query($conn,$sql);
                if($res){
                    echo "<br>";
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successful !</strong> Details Submitted ..
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                    echo "<br>";

                }else{
                    echo "<br>";
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Failed !</strong> fail to submit details try again later due to'.mysqli_error($conn).'
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                    echo "<br>";
                }
            }else{
                echo "<br>";
                die("Sorry failed to connect !!".mysqli_connect_error());
            }
       }
    ?>
    <div class="container my-3">
        <?php
            echo "<h1> <u>Complete Form Submission tutorial using php </u></h1> ";
        ?>
        <h2 class="my-4">Contact Us if you have any query : </h2>
        <form action="\CWHPHP\Form.php" method="post">
            <div class="mb-3">
                <label for="name"  class="form-label">Name :</label>
                <input type="text" name="name" class="form-control" id="name" >
            
            </div>
            <div class="mb-3">
                <label for="email"  class="form-label">Email :</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="query"  class="form-label">Write your Query if any :</label>
                <textarea type="password" name="query" class="form-control" id="query"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
