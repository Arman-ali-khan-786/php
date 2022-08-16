<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Contacts Details</title>
  </head>
  <body>
    <div class="container-fluid">
        <h1 class="display-4">Contact Details : </h1>
        <?php
           $conn = mysqli_connect("localhost","root","","contacts");
           if($conn){
            echo "<br>";
            echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Connection Established !</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';

            $sql = "select * from `contactdetails`";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);
            // echo $num;
            echo "<h4>$num records found in database ..</h4>";
            echo '
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Query</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>';
                while($row = mysqli_fetch_assoc($res)){
                    echo '
                    <tr>
                    <th scope="row">'.$row['S.no'].'</th>
                    <td>'.$row['Name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['query'].'</td>
                    <td>'.$row['Date'].'</td>
                    </tr>
                    ';
                
                }
                echo '
                </tbody>
                </table>';
            
           }else{
            die("Sorry failed to connect due to ".mysqli_connect_error());
           }
        
        ?>
        
           
    </div>


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
