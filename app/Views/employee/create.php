<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 : Add New Employee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="employee_add" name="employee_add" action="<?= site_url('/employee') ?>">
      <?= csrf_field() ?>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Store</button>
      </div>
    </form>
  </div>
   
</body>
</html>