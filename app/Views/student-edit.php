<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Student</title>
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
</head>
<body>
<div class="container-fluid">

<?= form_open_multipart('Students/update/'.$students['id'] ) ?>

<div class="header">
    <h1 class="h1-header">
        Update Student
    </h1>
    </div>

    <div class="form-group">
        <input type="text" class="form-input" name="schoolid"  placeholder="School Id" value="<?= $students['schoolid']?>" id="">
    </div>    
    <div class="form-group">
        <input type="text" class="form-input" name="firstname" placeholder="First Name" value="<?= $students['first_name']?>" id="">
    </div>     
    <div class="form-group">
        <input type="text" class="form-input" name="lastname" placeholder="Last Name" value="<?= $students['last_name']?>" id="">
    </div>    
    <div class="form-group">
        <input type="email" class="form-input" name="email" placeholder="Email" value="<?= $students['email']?>" id="">
    </div>  
    <div class="form-group">
        <input type="text" class="form-input" name="current_class" placeholder="Current Class" value="<?= $students['current_class']?>" id="">
    </div> 
   
    <div class="form-group">
    <input class="form-control form-control-lg file-input" id="formFileLg" name="userfile" type="file">
    </div>    



<div class="form-group">
        <input type="submit" class="form-input submit" value="ADD STUDENT">
    </div> 
</form>

<?php

if(isset($errors)){
    echo '<ul class="alert error" role="alert">';
    foreach ($errors as $error)
    {
        echo '<li>'.esc($error).'</li>';
    }
    echo '</ul>';
}
?>
</div>

</body>
</html>