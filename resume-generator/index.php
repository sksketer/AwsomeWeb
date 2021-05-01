<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESUME Form</title>
    <link rel="stylesheet" href="/css/formstyle.css">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}
        body{
            height: 100%;
            background: radial-gradient(rgb(255, 255, 255), rgb(44, 44, 77));
            background-repeat: no-repeat;
        }
        .Rheading{
            align-items: right;
        }
        .container{
    align-items: center;
    text-align: center;
}
.border{
    
    background: linear-gradient(rgba(160, 253, 38, 0.5), rgba(69, 241, 69, 0.555), rgb(160, 253, 38, 0.5));
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
    font-size: 28px;
    margin-bottom: -10px;
    text-transform: uppercase;
}
.bio h2{
    text-align: center;
    font-weight: lighter;
    font-size: 18px;
}
.bio h2 img{
    width: 18px;
}
.intro{margin: 0 0 0 30px;}
.intro h2{ }
.intro p{  }
.about{margin: 0 30px 0 0; text-align: right;}
.about p img{ 
    width: 15px;
}
.about p{ 
    margin:3px 0 -1px 0;
    font-size: 20px;
    
}
#homeicon
{
    width: 20px;
}
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

.input-data input{
    display: block;
    margin: 0 auto 0 auto;
    width: 250px;
}
.name, .nic_name, .email, .course, .phonenumber, .address, .city, .photo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    align-items: center;
    padding: 10px;
    margin: 15px;
}
.input-skill{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin: 20px;
}
.input-skill input{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
    padding: 2px;
}
.submit{
    padding: 10px;
    margin: 15px;
}
    </style>
</head>
<body>
<div class="container">
    <h1 class="Rheading">Resume Generator</h1><br>
    <form action="output.php" method="POST" class="form">
        <div class="input-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="text" name="name" placeholder="Name" class="name">
            <input type="text" name="nic_name" placeholder="Nik Name" class="nic_name"><br>
            <input type="text" name="course" placeholder="Course" class="course"><br>
            <textarea name="about_me"  placeholder="About" id="" cols="30" rows="10"></textarea>
            <input type="email" name="email" placeholder="Email id" class="email"><br>
            <input type="text" name="phonenumber" placeholder="Phone no." class="phonenumber"><br>
            <input type="text" name="address" placeholder="Address" class="address">
            <input type="text" name="city" placeholder="City" class="city"><br>
        </div>
        <div class="input-skill">
            <input type="text" name="skill_1" placeholder="Skill 1" class="skill1">
            <input type="text" name="skill_2" placeholder="Skill 2" class="skill2">
            <input type="text" name="skill_3" placeholder="Skill 3" class="skill3">
            <input type="text" name="skill_4" placeholder="Skill 4" class="skill4">
            <input type="text" name="skill_5" placeholder="Skill 5" class="skill5">
        </div>
        <div class="input-project">
            <div class="project1">
                <input type="text" name="project1" placeholder="project 1">
                <input type="text" name="technology1" placeholder="Technology used in project 1">
            </div>
            <div class="project2">
                <input type="text" name="project2" placeholder="project 2">
                <input type="text" name="technology2" placeholder="Technology used in project 2">
            </div>
            <div class="project3">
                <input type="text" name="project3" placeholder="project 3">
                <input type="text" name="technology3" placeholder="Technology used in project 3">
            </div>    
        </div>
        <br>
        <div class="input-achievements">
            <div class="achievement1">
                <input type="text" name="Achievements1" placeholder="Achievements 1">
                <input type="text" name="year1" placeholder="year">
            </div>
            <div class="achievement2">
                <input type="text" name="Achievements2" placeholder="Achievements 2">
                <input type="text" name="year2" placeholder="year">
            </div>
            <div class="achievement3">
                <input type="text" name="Achievements3" placeholder="Achievements 3">
                <input type="text" name="year3" placeholder="year">
            </div>
        </div>
        <input type="submit" name="" value="Submit" class="submit">
    </form>
</div>
    
</body>
<html>