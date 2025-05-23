<?php 
include('dbconnection.php');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $edu = $_POST['education'];
    $exp = $_POST['experience'];
    $skill = $_POST['skills'];

    $query = mysqli_query($con, "INSERT INTO data (FullName, Email, PhoneNumber, Address, EducationBackground, WorkExperience, Skills) VALUES ('$fullname', '$email', '$phone', '$add', '$edu', '$exp', '$skill')");

    if ($query) {
        echo "<script>alert('Data inserted successfully'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Insert failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Resume Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background: #f2f2f2 url('BackgroundForm.png') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      background: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    label {
      font-weight: bold;
      color: #333;
      margin-bottom: 6px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    textarea {
      height: 120px;
      resize: vertical;
    }

    button {
      width: 100%;
      background: #000;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      border-radius: 6px;
      transition: 0.3s;
    }

    button:hover {
      background: #28a745;
      color: #000;
    }

    .text-center a {
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Resume Form</h2>

  <form method="POST">
    <label>Full Name</label>
    <input type="text" name="fullName" required>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Phone Number</label>
    <input type="tel" name="phone" required>

    <label>Address</label>
    <input type="text" name="address" required>

    <label>Education Background</label>
    <textarea name="education" required></textarea>

    <label>Work Experience</label>
    <textarea name="experience" required></textarea>

    <label>Skills</label>
    <textarea name="skills" required></textarea>

    <button type="submit" name="submit">Submit</button>
  </form>

  <div class="text-center mt-3">
    Already added your resume? <a href="index.php">View Records</a>
  </div>
</div>

</body>
</html>
