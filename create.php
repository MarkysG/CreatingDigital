<?php
  include 'db.php';
  $Last = $_POST["Last"];
  $First = $_POST["First"];
  $Phone = $_POST["Phone"];
  $Email = $_POST["Email"];

//   echo "$First";
  $sql = "insert into clients (Last, First, Phone, Email) values ('$Last', '$First', '$Phone', '$Email')";
//   echo $sql;
//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   $conn->close();
  $conn->query($sql);
  $conn->close();
  header("location: index.php");

?> 