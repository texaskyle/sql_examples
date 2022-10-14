<?php
require 'connection.inc.php';
?>

<form action="index.php" method="GET">
    <strong>Choose a food type:</strong> 
    <select name="uh">
    <option value="u">unHealthy</option>
    <option value="h">Healty</option>
    </select><br><br>

    <input type="submit" name="submit">
</form>
<?php

// checing wherether a file form has been submitted
if (isset($_GET['uh']) && !empty($_GET['uh'])) {
  echo    $uh = strtolower($_GET['uh']);



// $query = "SELECT food, calories FROM meals ORDER BY calories ASC ";

// $query = "SELECT food, calories FROM meals WHERE healthy_unhealthy = 'h'  ORDER BY calories ASC ";
if ($uh == 'u' || $uh == 'h' ) {

$query = "SELECT food, calories FROM meals WHERE healthy_unhealthy = 'h' AND calories = 600 ORDER BY calories ASC ";

//using an if statement to check if the query has been run
if ($query_run = mysqli_query($conn, $query)) {
    // if the query is suuucess we perform a while loop to grab the data. 
    // we will use an associative array which contains two arguments the key and the vlaue

    // an if statement to check if there are values returned
    if(mysqli_num_rows($query_run) == NULL){
        echo "No results found";
    }else{
    while ($query_row = mysqli_fetch_assoc($query_run)) {
        // reassigning the variables
        $food = $query_row['food'];
        $calories =  $query_row['calories'];

        echo $food." has ".$calories."<br>"; 
    }
    }
}else{
    echo "connection failed";
}
}else{
    echo "must be u, or h";
}
}
?>