<?php
include('dbconnection.php');

if (isset($_POST['submit'])) {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Details - View Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background: #f5f5f5;
      font-family: 'Roboto', sans-serif;
    }
    .table-wrapper {
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      max-width: 900px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .table-title h2 {
      margin-bottom: 30px;
      font-weight: bold;
    }
    table th {
      width: 25%;
    }
    table td, table th {
      vertical-align: middle !important;
    }
    .btn {
      margin-top: 20px;
    }
  </style>
</head>

<body>
<div class="container-xl">
  <div class="table-wrapper">
    <div class="table-title">
      <h2>User <b>Details</b></h2>
    </div>

    <table class="table table-bordered">
      <tbody>
        <?php
          $vid = $_GET['viewid'];
          $ret = mysqli_query($con, "SELECT * FROM data WHERE ID = $vid");
          while ($row = mysqli_fetch_array($ret)) {
        ?>
        <tr>
          <th>Full Name</th>
          <td><?php echo $row['FullName']; ?></td>
          <th>Education</th>
          <td><?php echo $row['EducationBackground']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $row['Email']; ?></td>
          <th>Phone</th>
          <td><?php echo $row['PhoneNumber']; ?></td>
        </tr>
        <tr>
          <th>Work Experience</th>
          <td><?php echo $row['WorkExperience']; ?></td>
          <th>Skills</th>
          <td><?php echo $row['Skills']; ?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo $row['Address']; ?></td>
          <th>Created At</th>
          <td><?php echo $row['CreatedData']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <form method="POST">
      <button type="submit" name="submit" class="btn btn-success">Back to User Management</button>
    </form>
  </div>
</div>
</body>
</html>
