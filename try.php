<?php	
    <form method="post" action="try.php">
        <p>What is your name? <input type="text" name="feedback" /></p>

        <p>How many green apples? <input type="number" min="0" max="100" name="id" /></p>
        <p><input type="submit" /></p>
    </form>
    
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
        $query = $conn->prepare("INSERT INTO calvintest (id, feedback) VALUES (?, ?)");
        $query->bind_param("is", $_POST["id"], $_POST["feedback"]);
        
        // Run the query to store the result of the previous question
        $query->execute();
        
        // Close the query and connection since we're done with them
        $query->close();
        $conn->close();
    
    
    ?>
