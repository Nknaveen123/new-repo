<?php session_start(); 
    $error_array = []; 
    $data = []; 
    $name = strtolower($_POST['name']); 
    $em = $_POST['email']; 
    $p1 = $_POST['password1']; 
    $p2 = $_POST['password2']; 
    $a=$_POST['age'];
    $D=$_POST['dob'];
    echo($name); 
    if (empty($name)) 
        { $error_array['name'] = 'Name is required.'; 
        }
    if (empty($em)) 
        { $error_array['email'] = 'Email is required.'; 
        }
    if (empty($p1)) 
        { $error_array['password'] = 'password is required.'; }
    if (empty($a)) 
        { $error_array['age'] = 'age is required.'; }
    if (empty($D)) 
        { $error_array['dob'] = 'dob is required.'; }
    if (!empty($p1) && !empty($p2) && $p1 != $p2)
        { array_push($error_array,"Your passwords do not match<br>"); }
    if (!empty($errors)) { 
        $data['success'] = false; 
        $data['errors'] = $errors; } 
    else { 
        $data['success'] = true; 
        $data['message'] = 'Success!'; } 
    if(filter_var($em,FILTER_VALIDATE_EMAIL)){ 
        $e = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $echeck = mysqli_query($con,"SELECT email from details WHERE email='$e'");}