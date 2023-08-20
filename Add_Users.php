<?php

include "db.php";

if (isset($_POST['submit'])) {
  $Name = $_POST['name'];
  $Age = $_POST['age'];
  $Gender = $_POST['gender'];
  $Email = $_POST['email'];
  $Contact = $_POST['contact'];

  $sql = "INSERT INTO  `users` (name,age,gender,email,contact) VALUES ('$Name',$Age,'$Gender','$Email','$Contact')";
  $res = mysqli_query($con, $sql);
  if ($res) {
    header("Location: /CRUD/List_Users.php"); /* Redirect browser */
    // exit();
  } else {
    die(mysqli_error($con));
  };
};
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-500 flex justify-center items-center flex-col">
  <div class="Header mt-20 mb-16 text-white text-bolder text-4xl border-b-4 opacity-80">
    <h3>Add User</h3>
  </div>
  <div class="bg-white p-10 rounded-lg transition-all ease-in duration-300">
    <form name="myForm" method="post" action="" autocomplete="off" class="relative">
      <div class="flex mt-5 mb-5 justify-between flex-row">
        <label class="mr-5" for="Name">Name</label>
        <input class="transition-all ease-in-out pl-1 duration-300 border border-solid border-gray-600 focus:border focus:p-1 focus:outline-none active:border-none active:outline-none rounded-md" type="text" pattern="[A-Za-z ]{1,32}" maxlength="25" minlength="1" name="name" autocomplete="off" id="name" required />
      </div>
      <div class="flex mt-5 mb-5 justify-between flex-row">
        <label class="mr-5" for="Age">Age</label>
        <input class="transition-all ease-in-out pl-1 duration-300 border border-solid border-gray-600 focus:border focus:p-1 focus:outline-none active:border-none active:outline-none rounded-md" type="text" pattern="[0-1]{1-9}[0-9]{0,2}" minlength="1" maxlength="3" name="age" autocomplete="off" id="age" required />
      </div>
      <div class="flex mt-5 mb-5 justify-between flex-row">
        <p class="mr-12">Gender</p>
        <input class="border border-solid border-gray-600 active:border-none active:outline-none rounded-md" type="radio" name="gender" value="Male" />
        <label class="mr-5" for="male">Male</label><br />
        <input class="border border-solid border-gray-600 rounded-md" type="radio" name="gender" value="Female" />
        <label class="mr-5" for="female">Female</label><br />
        <input class="border border-solid border-gray-600 rounded-md" type="radio" name="gender" value="Others" />
        <label class="mr-5" for="others">Others</label>
      </div>
      <div class="flex mt-5 mb-5 justify-between flex-row">
        <label class="mr-5" for="Email">Email</label>
        <input class="transition-all ease-in-out pl-1 duration-300 border border-solid focus:border focus:p-1 focus:outline-none border-gray-600 active:border-none active:outline-none rounded-md" type="email" name="email" autocomplete="off" id="email" required />
      </div>
      <div class="flex mt-5 mb-5 justify-between flex-row">
        <label class="mr-5" for="Phone">Contact No</label>
        <input class="transition-all ease-in-out pl-1 duration-300 border border-solid focus:border focus:p-1 focus:outline-none border-gray-600 active:border-none active:outline-none rounded-md" type="tel" pattern="^[789]\d{9,9}$" minlength="10" maxlength="10" name="contact" autocomplete="off" id="contact" required />
      </div>
      <div class="flex mt-5 mb-5 justify-center flex-row">
        <button class="transition-all text-bolder ease-in-out duration-300 bg-gray-200 inline-block m-2 pt-1 pb-1 pl-2 pr-2 rounded-lg border hover:bg-green-600 hover:text-white" name="submit">
          Add User
        </button>
      </div>
    </form>
  </div>
</body>

</html>