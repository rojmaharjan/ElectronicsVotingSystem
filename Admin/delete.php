<?php
include("connect.php");
// Include your database connection

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  // Perform the deletion operation using the received ID
  $query = "DELETE FROM users WHERE id = $id";
  $result = mysqli_query($connect, $query);

  if ($result) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
} else {
  echo json_encode(['success' => false]);
}

mysqli_close($connect);
?>
