
<?php

$mysql = new mysqli('localhost', 'admin', 'admin', 'cv_project') or die(mysqli_error($mysql));

if (isset($_POST['save_personal'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    
    $mysql->query("INSERT INTO personal (name, email, street, city, country, phone) 
    VALUES('$name', '$email', '$street', '$city', '$country', '$phone')") or die($mysql->error);
    header('Location: education_form.php');
}

if (isset($_POST['save_education'])){
    $institution = $_POST['institution'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $degree = $_POST['degree'];
    $graduation_date = $_POST['graduation_date'];
    
    $mysql->query("INSERT INTO education (institution, city, country, degree, graduation_date) 
    VALUES('$institution', '$city', '$country', '$degree', '$graduation_date')") or die($mysql->error);
    header('Location: experience_form.php');
}

if (isset($_POST['save_experience'])){
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $mysql->query("INSERT INTO experience (job_title, company, city, country, start_date, end_date) 
    VALUES('$job_title', '$company', '$city', '$country', '$start_date', '$end_date')") or die($mysql->error);
    header('Location: skills_form.php');
}

if (isset($_POST['save_skills'])){
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];
    $skill5 = $_POST['skill5'];
    $skill6 = $_POST['skill6'];
 
    $mysql->query("INSERT INTO skills (skill1, skill2, skill3, skill4, skill5, skill6) 
    VALUES('$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill6')") or die($mysql->error);
    header('Location: final_view.php');

}
?>