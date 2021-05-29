<?php
  include 'db.php';
  $sql = "select * from clients";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";

    if(isset($_GET['id']) && $row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="Last" value="'.$row['Last'].'"></td>';
        echo '<td><input type="text" class="form-control" name="First" value="'.$row['First'].'"></td>';
        echo '<td><input type="number" class="form-control" name="Phone" value="'.$row['Phone'].'"></td>';
        echo '<td><input type="text" class="form-control" name="Email" value="'.$row['Email'].'"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '</form>';
      } else {

    echo "<td>" . $row['Last'] . "</td>";
    echo "<td>" . $row['First'] . "</td>";
    echo "<td>" . $row['Phone'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
      }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>