
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Get Post Tutorial</title>
  </head>
  <body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid my-3">
            <a class="navbar-brand" href="#">Get/Post</a>
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
            $_email = $_POST['email'];
            $_pass = $_POST['psswd'];
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success ! </strong> Your '. $_email . ' and ' . $_pass . 'has been submitted . 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
       }
    ?>
    <div class="container">
        <?php
            echo "<h1> Get Post Tutorial </h1> ";
        ?>
        <h2 class="my-4">Enter your Details : </h2>
        <form action="\CWHPHP\GetPost.php" method="post">
            <div class="mb-3">
                <label for="email"  class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="psswd"  class="form-label">Password</label>
                <input type="password" name="psswd" class="form-control" id="psswd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
