<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


$select = " SELECT * FROM user_form  ";

$result = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="styles.css">

</head>
<body>
<header>
      <a href="#" class="logo">ELECTRO NACER</a>
      <nav class="navigation">
      <a href="admin_page.php">Users </a>
      <a href="admin2_page.php">Products </a>
     
        <a href="products.php">Catalogue</a>
        <a href="logout.php">Logout </a>
        
      
     
    </header>
<!--    

<!-- component -->
<div class="flex min-h-screen items-center justify-center bg-white">
    <div class="p-6 overflow-scroll px-0">

    <form action="logout.php" method="post">
        <button type="submit">Déconnexion</button>
    </form>
  <table class="w-full min-w-max table-auto text-left">
    <thead>
      <tr>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">name</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">email</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">user type</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">status</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">transmetre</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">delete</p>
        </th>
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
          <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">accept</p>
        </th>
      </tr>
    </thead>
    <tbody>
     
      <!-- <tr>
        <td class="p-4">
          <div class="flex items-center gap-3">
            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">netflix</p>
          </div>
        </td>
        <td class="p-4">
          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$14,000</p>
        </td>
        <td class="p-4">
          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 3:30am</p>
        </td>
        <td class="p-4">
          <div class="w-max">
            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
              <span class="">cancelled</span>
            </div>
          </div>
        </td>
        <td class="p-4">
        <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"  class="h-4 w-4" viewBox="0 0 30 30">
    <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"></path>
</svg>
            </span>
        </td>
        <td class="p-4">
          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
              </svg>
            </span>
          </button>
        </td>
        <td class="p-4">
          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
              </svg>
            </span>
          </button>
        </td>
      </tr> -->


<?php
// Assuming $conn is your database connection
$select = " SELECT * FROM user_form  ";

$result = mysqli_query($conn, $select);

// Check if the query was successful
if ($result) {
    // Loop through each row in the result set
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td class="p-4">
                <div class="flex items-center gap-3">
                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">' . $row['name'] . '</p>
                </div>
              </td>';
        echo '<td class="p-4">' . '$' . $row['email'] . '</td>';
        echo '<td class="p-4">' . $row['user_type'] . '</td>';
        echo '<td class="p-4">';
        echo '<div class="w-max">';
        
        // Check the value of $row['valide']
        if ($row['valide'] == 0) {
            // If the value is 0, display "Non Valide" with red background
            echo '<div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">';
            echo '<span class="">Non Valide</span>';
        } else {
            // If the value is 1, display "Valide" with green background
            echo '<div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">';
            echo '<span class="">Valide</span>';
        }
        
        echo '</div>';
        echo '</div>';
        echo '</td>';
       
        
        echo '<td class="p-4">
        <form id="changeRole" action="changeRole.php" method="post">
        <input type="hidden" name="id" value="' . $row['id'] . '">
        <input type="hidden" name="type" value="' . $row['user_type'] . '">

        <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="submit">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                </svg>
            </span>
        </button>
    </form>
    </td>
    <td class="p-4">
    <form id="deleteUser" action="deleteUser.php" method="post">
    <input type="hidden" name="id" value="' . $row['id'] . '">
    <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="submit">
        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
            </svg>
        </span>
    </button>
</form>
    </td>
    
    <td class="p-4">
        <form id="updateForm" action="updateValideInscription.php" method="post">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="submit">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                    </svg>
                </span>
            </button>
        </form>
    </td>';


        // Add similar code for the other buttons

        echo '</tr>';
    }

    // Free up the result set
    mysqli_free_result($result);
} else {
    // Handle the case where the query was not successful
    echo 'Error executing query: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>




    </tbody>
  </table>
  
</div>

</div>
<script>
    function submitForm() {
        document.getElementById('updateForm').submit();
    }
    function submitForm() {
        document.getElementById('deleteUser').submit();
    }
    function submitForm() {
        document.getElementById('changeRole').submit();
    }
</script>
<footer>
    <div class="footer-content">
        <h3>ElectroNacer</h3>
      
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2020 ElectroNacer <span></span></p>
    </div>
</footer>
</body>
</html>