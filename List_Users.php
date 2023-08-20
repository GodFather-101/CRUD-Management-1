<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-blue-500 flex flex-col justify-center items-center font-sans">
    <div class="text-white font-bold">
      <div class="m-10 mb-5">
        <h1 class="text-4xl uppercase">CRUD Management System</h1>
      </div>

      <div class="m-5 text-center">
        <h2 class="text-3xl opacity-60">Users List</h2>
      </div>
    </div>
    <div
      class="w-14 h-14 bg-gray-700 cursor-pointer rounded-2xl transition-all duration-300 delay-100  hover:bg-green-500 hover:border-none flex justify-center items-center" >
      <a href="./Add_Users.php"><button class="animate-bounce hover:animate-none text-white">
          <i class="fa-solid fa-user-plus fa-xl  hover:animate-pulse"></i></button></a>
    </div>

    <!-- Table starts -->
    <div class="bg-white transition-all opacity-90 hover:opacity-100 mt-5 p-5 rounded-xl overflow-y-scroll w-full h-80 max-w-4xl">
      <table class="border-collapse w-full">
          <tr class="bg-gray-300 text-gray-800 text-left h-10">
            <th>S.No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone.No</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
          <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($con, $sql);
    
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $gender = $row['gender'];
                $contact = $row['contact'];
                $email = $row['email'];
    
    
                echo '<tr class="hover:bg-blue-400 text-base h-10 border-b-2">
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $age . '</td>
                <td>' . $gender . '</td>
                <td>' . $contact . '</td>
                <td>' . $email . '</td>
                <td>
                <a href="./Edit.php?id=' . $id . '"><button><i class="fa-solid fa-pen bg-green-400 rounded-md text-bold text-white p-1 mr-2"></i></button></a>
                  <a href="./delete.php?id=' . $id . '"><button><i class="fa-solid fa-user-minus bg-red-500 rounded-md text-white text-bold p-1 ml-2"></i></button></a>
                </td>
              </tr>';
              }
            }
            ?>
      </table>
    </div>
  </body>
</html>
