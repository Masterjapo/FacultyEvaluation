<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
    <title>Update Class</title>
</head>
<body>
    
<div class="container-fluid">
<form action="<?= base_url('Classes/update/'.$classes['id']);?>">
<div class="header">
    <h1 class="h1-header">
    Update Class
    </h1>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="curriculum" value="<?= $classes['curriculum']?>" placeholder="Enter Curriculum">
    <input type="text" class="form-control" name="year_level" value="<?= $classes['year_level']?>" placeholder="Enter Year Level">
    <input type="text" class="form-control" name="section" value="<?= $classes['section']?>" placeholder="Enter section">
    </div>    
<div class="form-group">
<button type="submit" class="form-input submit">UPDATE CLASS</button>
    </div> 
</form>
</div>
</body>
</html>