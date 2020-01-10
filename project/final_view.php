<?php
$link = mysqli_connect("localhost", "admin", "admin", "cv_project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Personal Info
$sql = "SELECT * FROM personal";
if($result = mysqli_query($link, $sql)){
    while($row = mysqli_fetch_array($result)){
        ?>
        <h1>Perosnal Info</h1>
        <?php
        echo "<tr>";
            echo "<td>Name: " . $row['name'].  "<br></td>";
            echo "<td>email: " . $row['email'].  "<br></td>";
            echo "<td>street: " . $row['street'].  "<br></td>";
            echo "<td>city: " . $row['city'].  "<br></td>";
            echo "<td>country: " . $row['country'].  "<br></td>";
            echo "<td>phone: " . $row['phone'].  "<br></td>";

        echo "</tr>";
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Education Info
$sql = "SELECT * FROM education";
if($result = mysqli_query($link, $sql)){
    while($row = mysqli_fetch_array($result)){
        ?>
        <h1>Education</h1>
        <?php
        echo "<tr>";
        echo "<td>Instituion: " . $row['institution'].  "<br></td>";
        echo "<td>City: " . $row['city'].  "<br></td>";
        echo "<td>Country: " . $row['country'].  "<br></td>";
        echo "<td>Degree: " . $row['degree'].  "<br></td>";
        echo "<td>Graduation Date: " . $row['graduation_date'].  "<br></td>";
            
        echo "</tr>";
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Experience Info
$sql = "SELECT * FROM experience";
if($result = mysqli_query($link, $sql)){
    while($row = mysqli_fetch_array($result)){
        ?>
        <h1>Experience</h1>
        <?php
        echo "<tr>";
        echo "<td>Job Title: " . $row['job_title'].  "<br></td>";
        echo "<td>Company: " . $row['company'].  "<br></td>";
        echo "<td>City: " . $row['city'].  "<br></td>";
        echo "<td>Country: " . $row['country'].  "<br></td>";
        echo "<td>Start Date: " . $row['start_date'].  "<br></td>";
        echo "<td>End Date: " . $row['end_date'].  "<br></td>";            
        echo "</tr>";
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Skills Info
$sql = "SELECT * FROM skills";
if($result = mysqli_query($link, $sql)){
    while($row = mysqli_fetch_array($result)){
        ?>
        <h1>Skills</h1>
        <?php
        echo "<tr>";
            echo "<td>Skill 1: " . $row['skill1'].  "<br></td>";
            echo "<td>Skill 2: " . $row['skill2'].  "<br></td>";            
            echo "<td>Skill 3: " . $row['skill3'].  "<br></td>";            
            echo "<td>Skill 4: " . $row['skill4'].  "<br></td>";            
            echo "<td>Skill 5: " . $row['skill5'].  "<br></td>";            
            echo "<td>Skill 6: " . $row['skill6'].  "<br></td>";            

        echo "</tr>";
    }

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>