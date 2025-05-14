<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 : Update Employee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="employee_update" name="employee_update" action="<?= site_url('/employee/'.$employee['id']) ?>">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $employee['name']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $employee['email']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </div>
</form>
</div>
</body>
</html>