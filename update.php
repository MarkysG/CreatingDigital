<?php
  include 'db.php';
  $id = $_POST['id'];
  $Last = $_POST['Last'];
  $First = $_POST['First'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $sql = "update clients set Last='$Last', First='$First', Phone='$Phone', Email='$Email' where id=$id";
  echo $sql;
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
