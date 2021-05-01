<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/outputstyle.css">
    <title>My Resume</title>
    <style>
body{
    background-color: rgb(168, 245, 219);
    background-repeat: no-repeat;
}
.border{
    border: 2px solid black;
    height: auto;
    background-color: rgb(184, 202, 250);
}
.image{
    width: 100%;
}

.image img{
    display: block;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    width: 20%;
    height: 10%;
    border: 0.5px solid black;
    border-radius: 50%;
}
.bio{
    
}
.bio p{
    text-align: center;
    text-transform: uppercase;
    font-weight: bolder;
    font-size: 25px;
    margin-bottom: -10px;
}
.bio h2{
    text-align: center;
    font-weight: lighter;
    font-size: 18px;
}
.bio h2 img{
    width: 18px;
}
.intro{margin: 0 0 0 30px;}.intro h2{ }.intro p{  }
.about{margin: 0 30px 0 0; text-align: right;}.about p img{ width: 15px;}.about p{ margin:3px 0 -1px 0;}
#homeicon{width: 20px;}
.border hr{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 95%;
    color: black;
}
.border .center-heading{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    margin: -5px 0 -5px 0;
}
.project, .achievements, .skill{
        text-align: center;
    }
    .project h2, .achievements h2, .skill h2{
        margin: 1px 0 1px 0;
    }
    .project h4, .achievements h4{
        margin: 1px 0 20px 0;    
        font-weight: lighter;
    }
    .center-heading{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
    }
    h2, h4{
    font-weight: lighter;
}
.course{
    font-size: 18px;
    font-weight: bold;
}
    </style>
</head>
<body>
<?php
        
    

    $name = $_POST['name'];
    $nic_name = $_POST['nic_name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $skill_1 = $_POST['skill_1'];
    $skill_2 = $_POST['skill_2'];
    $skill_3 = $_POST['skill_3'];
    $skill_4 = $_POST['skill_4'];
    $skill_5 = $_POST['skill_5'];
    $project_1 = $_POST['project1'];
    $project_2 = $_POST['project2'];
    $project_3 = $_POST['project3'];
    $technology_1 = $_POST['technology1'];
    $technology_2 = $_POST['technology2'];
    $technology_3 = $_POST['technology3'];
    $achievements_1 = $_POST['Achievements1'];
    $achievements_2 = $_POST['Achievements2'];
    $achievements_3 = $_POST['Achievements3'];
    $year_1 = $_POST['year1'];
    $year_2 = $_POST['year2'];
    $year_3 = $_POST['year3'];
    $about_me = $_POST['about_me'];
    

    
        echo'
        <div class="image"><img src="img/photo.png" alt=""></div>
        <div class="bio"><p>'.$name.'</p><h2>('.$nic_name.')</h2></div>
        <div class="intro"><p class="course">'.$course.'</p><p>'.$about_me.'</p></div>
        <div class="about">
            <p><img src="img/mail.png" alt=""> '.$email.'</p>
            <p><img src="img/mobile.png" alt="" > '.$phonenumber.'</p>
            <p><img src="img/home.jpg" alt="" id="homeicon"> '.$address.'</p><p>'.$city.'</p>
        </div>
            <hr>
        ';
    
    if($skill_1 != '' or $skill_2 != '' or $skill_3 != '' or $skill_4 != '' or $skill_5 != '')
    {
        echo'
        <p class="center-heading"><u>SKILL</u></p>

        <div class="skill">
    
        <h2>'.$skill_1.'</h2>
        <h2>'.$skill_2.'</h2>
        <h2>'.$skill_3.'</h2>
        <h2>'.$skill_4.'</h2>
        <h2>'.$skill_5.'</h2>


    </div>
    <hr>
        ';
    }
    
    if($project_1 != '' or $project_2 != '' or $project_3 != '')
    {
        echo'
    
    <p class="center-heading"><u>Project</u></p>
    <div class="project">';
    
    echo'
        <h2>'.$project_1.'</h2>';
        if($project_1 != '' and $technology_1 != ''){
            echo '<h4>('.$technology_1.')</h4>';
        }

    echo'    <h2>'.$project_2.'</h2>';
        if($project_2 != '' and $technology_2 != ''){
            echo '<h4>('.$technology_2.')</h4>';
        }

    echo'<h2>'.$project_3.'</h2>';    
        if($project_3 != '' and $technology_3 != ''){
        echo '<h4>('.$technology_3.')</h4>';
        }
    echo '</div>
    <hr>
        ';
    }

    if($achievements_1 != '' or $achievements_2 != '' or $achievements_3 !='')
    {
        echo'
    
        <p class="center-heading"><u>Achievements</u></p>
        <div class="achievements">';
        
        echo'
            <h2>'.$achievements_1.'</h2>';
            if($achievements_1 != '' and $year_1 != ''){
                echo '<h4>'.$year_1.'</h4>';
            }
    
            echo'
            <h2>'.$achievements_2.'</h2>';
            if($achievements_2 != '' and $year_2 != ''){
                echo '<h4>'.$year_2.'</h4>';
            }
    
            echo'
            <h2>'.$achievements_3.'</h2>';
            if($achievements_3 != '' and $year_3 != ''){
                echo '<h4>'.$year_3.'</h4>';
            }
        echo '</div>
        <hr>
            ';

        
    }
    else
    {
        echo '<br>';
    }


    ?>
</body>
</html>