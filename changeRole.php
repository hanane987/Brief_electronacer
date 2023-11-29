<?php
// Connect to the database (replace with your database connection code)
@include 'config.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the id from the form submission
$id = $_POST['id'];
$type=$_POST['type'];
if($type =='user'){
    $query = "UPDATE user_form SET user_type = 'admin' WHERE id = $id";

}else{
    $query = "UPDATE user_form SET user_type = 'user' WHERE id = $id";

}
// Update the 'valide' column in the database

if (mysqli_query($conn, $query)) {
    header('location:admin_page.php');

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
