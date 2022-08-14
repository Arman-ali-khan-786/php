<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-4">String Functions : </h1>
        <?php
        // . operator concates 2 strings
        $name = "Arman Ali Khan";
        ?>
        <ul>
            <li>strlen(String) : to find length of the String</li>
            <?php echo "My name is $name and len of it is ".strlen($name);?>
            <li>strrev(String) : to reverse a String</li>
            <?php echo "Reverse of my name is ".strrev($name);?>
            <li>strpos(String, searchString) : to search  a String and returns the 1st ocurrence position in the form of index</li>
            <?php echo "Position of Khan ".strpos($name,"Khan");?>
            <li>str_replace (replacestr, replacewithstr , inOriginalStr) : to replace a string with given string in original string </li>
            <?php echo "Arman replaced with Aman and the String is : ".str_replace("Arman","Aman",$name);?>
            <li>str_repeat(String, number) : to repeat a string given no. of times  </li>
            <?php echo "My is name is repeated 5 times".str_repeat($name,5);?>
            <li>rtrim(string) : deletes spaces from right sides </li>
            <li>ltrim(string) : deletes spaces from left sides </li>


        </ul>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>