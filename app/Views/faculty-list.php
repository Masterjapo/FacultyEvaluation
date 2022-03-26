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
    <div class="container-fluid">

    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">School Id</th>
      <th scope="col">Photo</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($faculties as  $item) : ?>
    <tr>
      <th scope="row"><?= $item['id']?></th>
      <td><?= $item['schoolid']?></td>
      <td>
            <img src="/uploads/<?= $item['uploaded_flleinfo']?>" height="100" width="100" alt="">
       </td>
      <td><?= $item['first_name']?></td>
      <td><?= $item['last_name']?></td>
      <td><?= $item['email']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>