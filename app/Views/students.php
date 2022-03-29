<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
</head>
<body>
<div class="container-fluid">

<?= form_open_multipart('Students/save') ?>

<div class="header">
    <h1 class="h1-header">
        Add Student
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
        <input type="text" class="form-input" name="current_class" placeholder="Current Class" id="">
    </div> 
    <div class="form-group">
        <input type="password" class="form-input" name="password" placeholder="Password" autocomplete="off" readonly 
        onfocus="this.removeAttribute('readonly');"id="">
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