<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
    <title>Faculties</title>
</head>
<body>
    <div class="container">

  <div class="row">
  <div class="header">
    <h1 class="h1-header">
        Students
    </h1>
    </div>
  </div>


  
<div class="row">
     
<table class="table" id="posts">
  
  <thead>
    
    <tr>
      <th scope="col">#</th>
      <th scope="col">School Id</th>
      <th scope="col">Photo</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>  
      <th scope="col">Current Class</th>  
      <th scope="col">Student Password</th>  
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($students as  $item) : ?>
    <tr>
      <th scope="row"><?= $item['id']?></th>
      <td><?= $item['schoolid']?></td>
      <td>
            <img src="/uploads/student/<?= $item['uploaded_flleinfo']?>" class="profile" height="50" width="50" alt="">
      </td>
      <td><?= $item['first_name']?></td>
      <td><?= $item['last_name']?></td>
      <td><?= $item['email']?></td>
      <td><?= $item['current_class']?></td>
      <td><?= $item['password']?></td>
      <td>
      
      <a class="btn btn-success" href="<?php echo base_url('Students/edit/'. $item['id']);?>"><img src="<?= base_url('assets/assets/update.svg');?>" width="30" height="30" class="d-inline-block align-top" alt=""></a>  
      <a class="btn btn-danger" href="<?= base_url('Students/delete/'.$item['id']);?>"><img src="<?= base_url('assets/assets/delete.svg');?>" width="30" height="30" class="d-inline-block align-top" alt=""></a> 

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  </div>

   
</div>

<div class="d-flex justify-content-center flex-nowrap">
          <?= $pager->links() ?>
        </div>
<script>
    $(document).ready( function () {
      $('#posts').DataTable();
  } );
</script>
</body>
</html>