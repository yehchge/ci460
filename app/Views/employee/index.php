<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codeigniter 4 CRUD Tutorial</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/emp/new') ?>" class="btn btn-success mb-2">Add Employee</a>
    </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered">
       <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>
       </thead>
       <tbody>
          <?php if(count($employee)){ ?>
          <?php foreach($employee as $single_emp){ ?>
          <tr>
             <td><?php echo $single_emp['id']; ?></td>
             <td><?php echo $single_emp['name']; ?></td>
             <td><?php echo $single_emp['email']; ?></td>
             <td>
              <a href="<?php echo base_url('emp/edit/'.$single_emp['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="javascript:deleteEmployee(<?= $single_emp['id'] ?>);" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php } ?>
         <?php } ?>
       </tbody>
     </table>
  </div>
</div>
<script>

function deleteEmployee(id){
  const url = '<?= site_url('/employee/') ?>' + id;

  fetch(url, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      }
  })
  .then(response => {
      if (response.ok) {
        window.location.reload();
        console.log('Resource deleted successfully');
      } else {
        console.error('Failed to delete resource');
      }
  })
  .catch(error => console.error('Error:', error));


}


</script>
 
</body>
</html>