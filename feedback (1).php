<!doctype html>
<html lang="en">


<?php
    //grab user id from the POST data seent from prev page
   $user_id = $_POST["user_id"];

   if (isset($_POST["feedback"])){
    
    // Database settings
    $mysql_server="localhost";
    $mysql_db="raroyst1_raroystonorgmain";
    $mysql_port="3306";
    $mysql_user="raroyst1_cfbd_cg";
    $mysql_password="W!SCsin2018";
    
    // Connect to the database
    $conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
    
    // Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare our query
    $query = $conn->prepare("INSERT INTO cp_group_2_feedback (feedback,user_id) VALUES (?, ?)");
    $query->bind_param("si", $_POST['feedback'],$user_id);
    
    // Run the query to store the result of the previous question
    $query->execute();
    
    // Close the query and connection since we're done with them
    $query->close();
    $conn->close();
}


?>




<div>
<form action="results.php" method="post">
 
    <p><input name="feedback" type="text" placeholder="Your feedback"/></p>
 
  
    <p><input type="submit" value="Submit" /></p>
</form>
 
</div>










	


</body>
</html>