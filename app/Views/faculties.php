<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Faculty</title>
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
</head>
<body>
<div class="container-fluid">

<?= form_open_multipart('Faculties/save') ?>

<div class="header">
    <h1 class="h1-header">
        Faculty Members
    </h1>
    </div>

    <div class="form-group">
        <input type="text" class="form-input" name="schoolid"  placeholder="School Id" id="">
    </div>    
    <div class="form-group">
        <input type="text" class="form-input" name="firstname" placeholder="First Name" id="">
    </div>     
    <div class="form-group">
        <input type="text" class="form-input" name="lastname" placeholder="Last Name" id="">
    </div>    
    <div class="form-group">
        <input type="email" class="form-input" name="email" placeholder="Email" id="">
    </div>  
    <div class="form-group">
    <input class="form-control form-control-lg file-input" id="formFileLg" name="userfile" type="file">
    </div>    



<div class="form-group">
        <input type="submit" class="form-input submit" value="ADD FACULTY MEMBER">
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