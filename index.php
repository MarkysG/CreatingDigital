<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>CRUD Demo</h1>
  <p>Create, read, update, and delete the following records below</p>

  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>

  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="Last">Last:</label>
    <input type="text" class="form-control m-2" id="Last" name="Last">
    <label for="First">First:</label>
    <input type="text" class="form-control m-2" id="First" name="First">
    <label for="Phone">Phone:</label>
    <input type="number" class="form-control m-2" id="Phone" name="Phone">
    <label for="Email">Email:</label>
    <input type="text" class="form-control m-2" id="Email" name="Email">
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>