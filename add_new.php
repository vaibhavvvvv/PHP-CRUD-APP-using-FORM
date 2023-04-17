<?php
include "db_conn.php"; 

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO `idcrud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (Null,'$first_name','$last_name','$email','$gender')";

  $result = mysqli_query($conn, $sql);

  if($result){
    header("Location: index.php?msg=New Record Created Successfully");
  }
  else{
    echo "Failed: " . mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: black; color: white">
    PHP CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Add New User</h3>
      <p class="text-muted">Complete the form below to add a news user </p>
    </div>
  </div>

  <div class="container d-flex  justify-content-center">
    <form action="" method="post" style="width: 50vw; min-width:300px;" >
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">First Name:</label>
          <input type="text" class="form-control" name="first_name" placeholder="Vaibhav" >
        </div>

        <div class="col">
          <label class="form-label">Last name:</label>
          <input type="text" class="form-control" name="last_name" placeholder="last name" >
        </div>

        <div class="row mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com" >
        </div>

        <!-- <div class="row mb-3" >
          <label class="form-label" >Date of Birth:</label>
        <input type="date" class="form-control" name="dob" required>
        </div>
         -->


        <div class="form-group mb-3">
          <label >Gender:</label>&nbsp
          <input type="radio" class="form-check-input" name="gender" id="male" value="male" >
          <label for="male" class="form-input" >Male</label>
          &nbsp


          <input type="radio" class="form-check-input" name="gender" id="female" value="female" >
          <label for="female" class="form-input" >Female</label>

          <!-- <div class="row mb-3" >
            <label>Hobbies:</label>
            <select name="hobbies[]" multiple required>
              <option value="Reading">Reading</option>
              <option value="Music">Music</option>
              <option value="Sports">Sports</option>
              <option value="Traveling">Traveling</option>
            </select>
          </div> -->

          <!-- <div class="row mb-3">
            <label>Display Pic:</label>
          <input type="file" name="pic" accept="image/*" required>
          </div> -->
          
        </div>

        <div>
          <button class="btn btn-success" type="submit" name="submit" >Save</button>
          <a href="index.php" class="btn btn-danger" >Cancel </a>
        </div>

      </div>
  
  </form>
  </div>


  <!-- bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>