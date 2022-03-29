<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Faculty</title>
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/faculty.css');?>">   
</head>
<body>
<div class="container-fluid">

<?= form_open_multipart('Faculties/update/'.$faculties['id'] ) ?>

<div class="header">
    <h1 class="h1-header">
        Update Faculty Members
    </h1>
    </div>

    <div class="form-group">
        <input type="text" class="form-input" name="schoolid"  placeholder="School Id"  value="<?= $faculties['schoolid']?>" id="">
    </div>    
    <div class="form-group">
        <input type="text" class="form-input" name="firstname" placeholder="First Name" value="<?= $faculties['first_name']?>" id="">
    </div>     
    <div class="form-group">
        <input type="text" class="form-input" name="lastname" placeholder="Last Name" value="<?= $faculties['last_name']?>" id="">
    </div>    
    <div class="form-group">
        <input type="email" class="form-input" name="email" placeholder="Email" value="<?= $faculties['email']?>" id="">
    </div>  
    <div class="form-group">
    <input class="form-control form-control-lg file-input" id="formFileLg" name="userfile" type="file">
    </div>    



<div class="form-group">
        <input type="submit" class="form-input submit" value="UPDATE FACULTY MEMBER">
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