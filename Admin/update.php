<?php
include("connect.php");

// Retrieve the data sent from the frontend
$data = json_decode(file_get_contents('php://input'), true);

// Iterate through the data and update the corresponding records
foreach ($data as $id => $fields) {
  foreach ($fields as $fieldName => $value) {
    // Sanitize the input data before updating the database
    $sanitizedValue = mysqli_real_escape_string($connect, $value);

    // Update the record in the database
    $updateQuery = "UPDATE users SET $fieldName = '$sanitizedValue' WHERE id = '$id'";
    mysqli_query($connect, $updateQuery);
  }
}

// Fetch the updated records from the database
$query = "SELECT * FROM users WHERE id IN (" . implode(",", array_keys($data)) . ")";
$result = mysqli_query($connect, $query);

// Prepare the updated data to be sent back to the frontend
$updatedData = [];
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];
  unset($row['id']);
  $updatedData[$id] = $row;
}

// Send the updated data back to the frontend
echo json_encode($updatedData);

mysqli_close($connect);
?>
