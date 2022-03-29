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
<form action="<?= base_url('Subjects/update/'.$subjects['id']);?>">
<div class="header">
    <h1 class="h1-header">
    Update Subject
    </h1>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="subject_code" value="<?= $subjects['subject_code']?>" placeholder="Enter Subject Code">
    <input type="text" class="form-control" name="subject" value="<?= $subjects['subject']?>" placeholder="Enter Subject">
    <input type="text" class="form-control" name="description" value="<?= $subjects['description']?>" placeholder="Enter Description">
    </div>    
<div class="form-group">
<button type="submit" class="form-input submit">UPDATE CLASS</button>
    </div> 
</form>
</div>
</body>
</html>