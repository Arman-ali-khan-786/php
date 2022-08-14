<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        echo "<h1> php Data types : </h1>
        <ul>
          <li>String</li>
          <li>Integer</li>
          <li>Float</li>
          <li>Boolean</li>
          <li>Object</li>
          <li>Array</li>
          <li>Null</li>
        </ul>"
        
        ?>
        <?php
        echo "<h1>String:</h1>";
        $name = "Arman";
        $friend  = "Bhakta";
        echo "$friend and $name are good friends <br> ";
        echo "<h1>Integers :</h1>";
        $n = 43;
        $n2 = -45;
        echo "$n <br>";
        echo "$n2 <br>";
        echo "<h1>Float :</h1>";
        $n1 = 3.45;
        echo "$n1 <br>";
        echo "<h1>Boolean :</h1>";
        $x = true;
        $y = false;
        echo var_dump($x);
        echo "<br>";
        echo var_dump($y);
        echo "<br>";
        echo "<h1>Object :</h1>";
        echo "<p> they are an instance of a class</p>";
        echo "<h1>Array :</h1>";
        $fruits = array("Mango" , "Banana","Apple","Orange");
        echo var_dump($fruits)," <br> is an array of Fruits <br>";
        echo $fruits[0],"<br>"; 
        echo $fruits[1],"<br>"; 
        echo $fruits[2],"<br>"; 
        echo $fruits[3],"<br>"; 
        echo "<h1>NULL :</h1>";
        $name = null;
        echo "Name is $name ",var_dump($name);


        
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>