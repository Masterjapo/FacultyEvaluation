<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
    <title>Classes</title>
</head>
<body>



<div class="container">

<div class="row">
  <div class="header">
    <h1 class="h1-header">
        Classes
    </h1>
    </div>
  </div>


  <div class="row">
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
    Add Class
  </button>  
</div>
<div class="modal fade" id="form" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="Classes/save/'">
<div class="header">
    <h1 class="h1-header">
    Add Class
    </h1>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="curriculum"  placeholder="Enter Curriculum">
    <input type="text" class="form-control" name="year_level"  placeholder="Enter Year Level">
    <input type="text" class="form-control" name="section" placeholder="Enter section">
    </div>    
<div class="form-group">
<button type="submit" class="form-input submit">ADD CLASS</button>
    </div> 
</form>
    </div>
  </div>
  </div>
  <div class="row">
  <table class="table" id="posts">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">School Id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($classes as $item) : ?>
    <tr>
      <th scope="row"><?= $item['id']?></th>
      <td><?= $item['curriculum']?><?= $item['curriculum']?><?= $item['year_level']?>-<?= $item['section']?> </td>
      <td>
      <a class="btn btn-success"   href="<?= base_url('Classes/edit/'.$item['id']);?>"><img src="<?= base_url('assets/assets/update.svg');?>" width="30" height="30" class="d-inline-block align-top" alt=""></a>  
      <a class="btn btn-danger" href="<?= base_url('Classes/delete/'.$item['id']);?>"><img src="<?= base_url('assets/assets/delete.svg');?>" width="30" height="30" class="d-inline-block align-top" alt=""></a> 
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
  </div>
</div>
</body>
</html>