<?php
// Connect to the database (replace with your database connection code)
@include 'config.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the id from the form submission
$id = $_POST['id'];

// Update the 'valide' column in the database
$query = "DELETE From user_form  WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header('location:admin_page.php');

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
