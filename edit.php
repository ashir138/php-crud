<?php 
include('dbconnection.php');

if (isset($_POST['submit'])) {
    $eid = $_GET['editid'];

    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $edu = $_POST['education'];
    $exp = $_POST['experience'];
    $skill = $_POST['skills'];

    $query = mysqli_query($con, "UPDATE data SET FullName='$fullname', Email='$email', PhoneNumber='$phone', Address='$add', EducationBackground='$edu', WorkExperience='$exp', Skills='$skill' WHERE ID='$eid'");
    
    if ($query) {
        echo "<script>alert('Data updated successfully');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Info</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background: #63738a;
      font-family: 'Roboto', sans-serif;
      color: #fff;
    }
    .signup-form {
      width: 450px;
      margin: 0 auto;
      padding: 30px 0;
    }
    .signup-form form {
      background: #f2f3f7;
      color: #333;
      border-radius: 5px;
      padding: 30px;
      box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
    }
    .signup-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group textarea,
    .form-group input {
      height: auto;
      resize: none;
    }
    .btn {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="signup-form">
  <form method="POST">
    <?php
      $eid = $_GET['editid'];
      $ret = mysqli_query($con, "SELECT * FROM data WHERE ID='$eid'");
      while ($row = mysqli_fetch_array($ret)) {
    ?>
    <h2>Update Info</h2>

    <div class="form-group">
      <input type="text" name="fullName" class="form-control" value="<?php echo $row['FullName']; ?>" required>
    </div>

    <div class="form-group">
      <input type="email" name="email" class="form-control" value="<?php echo $row['Email']; ?>" required>
    </div>

    <div class="form-group">
      <input type="tel" name="phone" class="form-control" value="<?php echo $row['PhoneNumber']; ?>" pattern="[0-9]+" required>
    </div>

    <div class="form-group">
      <textarea name="address" class="form-control" required><?php echo $row['Address']; ?></textarea>
    </div>

    <div class="form-group">
      <textarea name="education" class="form-control" required><?php echo $row['EducationBackground']; ?></textarea>
    </div>

    <div class="form-group">
      <textarea name="experience" class="form-control" required><?php echo $row['WorkExperience']; ?></textarea>
    </div>

    <div class="form-group">
      <textarea name="skills" class="form-control" required><?php echo $row['Skills']; ?></textarea>
    </div>

    <?php } ?>

    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
    </div>
  </form>
</div>

</body>
</html>
