<?php
include('dbconnection.php');

if (isset($_GET['delid'])) {
    $rid = intval($_GET['delid']);
    $sql = mysqli_query($con, "DELETE FROM data WHERE ID = $rid");
    echo "<script>alert('Data deleted'); window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ashir — PHP CRUD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    body {
      background: #f5f5f5 url('BackgroundForm.png') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Roboto', sans-serif;
      color: #333;
    }
    .table-wrapper {
      background: rgba(255,255,255,0.95);
      padding: 25px;
      border-radius: 10px;
      margin: 30px auto;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      max-width: 98%;
    }
    h2 {
      font-weight: 700;
      font-size: 24px;
    }
    .btn {
      font-weight: bold;
    }
    .table td, .table th {
      vertical-align: middle;
    }
    .table td i {
      font-size: 18px;
      margin: 0 5px;
      cursor: pointer;
    }
    .view { color: #03A9F4; }
    .edit { color: #FFC107; }
    .delete { color: #E34724; }
  </style>
</head>
<body>

<div class="container-xl">
  <div class="table-wrapper">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h2>User <b>Management</b></h2>
      </div>
      <div class="col-sm-6 text-right">
        <a href="insert.php" class="btn btn-secondary">
          <i class="material-icons">&#xE147;</i> Add New User
        </a>
      </div>
    </div>

    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Education</th>
          <th>Experience</th>
          <th>Skills</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $ret = mysqli_query($con, "SELECT * FROM data ORDER BY CreatedData DESC");
        $cnt = 1;
        if (mysqli_num_rows($ret) > 0) {
          while ($row = mysqli_fetch_array($ret)) {
        ?>
        <tr>
          <td><?php echo $cnt++; ?></td>
          <td><?php echo $row['FullName']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['PhoneNumber']; ?></td>
          <td><?php echo $row['Address']; ?></td>
          <td><?php echo $row['EducationBackground']; ?></td>
          <td><?php echo $row['WorkExperience']; ?></td>
          <td><?php echo $row['Skills']; ?></td>
          <td><?php echo $row['CreatedData']; ?></td>
          <td>
            <a href="read.php?viewid=<?php echo $row['ID']; ?>" class="view" title="View"><i class="material-icons">&#xE417;</i></a>
            <a href="edit.php?editid=<?php echo $row['ID']; ?>" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>
            <a href="index.php?delid=<?php echo $row['ID']; ?>" class="delete" title="Delete" onclick="return confirm('Delete this entry?');"><i class="material-icons">&#xE872;</i></a>
          </td>
        </tr>
        <?php }} else { ?>
        <tr>
          <td colspan="10" class="text-center text-danger">No records found</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
