<?php
// Database conenction
$conn = mysqli_connect('localhost', 'root', '', 'listForm');
if($conn === false){
    die("Connection Failed : " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$desc = mysqli_real_escape_string($conn, $_REQUEST['desc']);
$price = mysqli_real_escape_string($conn, $_REQUEST['price']);
 
// Attempt insert query execution
$sql = "INSERT INTO form (name, `desc`, price) VALUES ('$name', '$desc', '$price')";
if(mysqli_query($conn, $sql)){
    // Get last insert id
    $last_id = mysqli_insert_id($conn);
    // Retrieve data where id is last insert id
    $sql = "SELECT * FROM form  WHERE id='$last_id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "Hi " . $row["name"] . ", you have submitted SUCCESSFULLY!<br>";
        echo "Description : " . $row["desc"] . "<br>Price : " . $row["price"];
    }
    // Redirect to index.php after 5 seceonds
    header( "refresh:5;url=index.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
