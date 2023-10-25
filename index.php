<DOCTYPE! html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>                                                        
    <div id="bond-paper">
    <div id="container">
        <div id="content">
            <img src="my-passport-photo.jpg" alt="profile picture" id="profile-pic" width="192px" height="192px">
            <table style="margin-left: 20px">
                <?php
                    echo "<td>
                   
                    <div class='vertical-center'>
                        <img src='user.png' alt='' id='p-img'> 
                        <p id='p-info'>Artemio III E. Lorredo</p>
                </div>

                    <div class='vertical-center'>
                        <img src='email-logo.png' alt='' id='p-img'> 
                        <p id='p-info'>Email Address: 0321-3038@lspu.edu.ph</p>
                </div>

                <div class='vertical-center'>
<img src='school.png' alt='' id='p-img'>
                <p id='p-info'>Laguna State Polytechnic University</p>
                </div>
                <div class='vertical-center'>
<img src='num-icon.png' alt='' id='p-img'>
                <p id='p-info'>Mobile Number: 09455781374</p>
                </div>
                <div class='vertical-center'>
<img src='location.png' alt='' id='p-img'>
                <p id='p-info'>Home Address: Brgy. Rodriguez Macalelon, Quezon</p>
                </div>            
                        </td>";
                ?>
            </table>
        </div>
    </div>
    <div id="container-2">
        <div class="content-2">
        <div id='educ-highlight'><h2 id='name1'>Educational Background</h2></div>
        <div id='p-info-highlight'><h2 id='name1'>Personal Information</h2></div>
        <div id='skills-highlight'> <h2 id='name1'>Skills</h2></div>
                <div id="container-4">
                    <?php
                        echo "<td>
                        <p><strong>Age      :</strong> 21 yrs. old<br>
                        <strong>Birthdate   :</strong> December 12, 2001<br>
                        <strong>Birthplace  :</strong> Brgy. Masipag Macalelon, Quezon<br>
                        <strong>Nationality :</strong> Filipino<br>
                        <strong>Religion    :</strong> Roman Catholic<br>
                        <strong>Gender      :</strong> Male<br>
                        <strong>Height      :</strong> 174cm<br>
                        <strong>Weight      :</strong> 82kg<br>
                        <strong>Civil Status:</strong> Single</p><br><br>
                            </td>";

                        echo "<td>
                                <p><strong>Current College School:</strong> Laguna State Polytechnic University<br>
                                <strong>Senior High School    :</strong> Gumaca National High School<br>
                                <strong>Junnior High School   :</strong> Macalelon High School<br>
                                <strong>Elementary            :</strong> Macalelon Central Elementary School</p><br><br>
                            </td>";
                        echo "<ul>
                                <li>Basic Programming</li>
                                <li>Basic Web Dev</li>
                                <li>Basic Network Configuration</li>
                                <li>Communication Skills</li>
                                <li>Basic MS Word and MS Excel</li>
                            </ul>"
                    ?>
                </div>
                
            </div>
            <div class="content-2-half">
            <div id="container-3">
                <?php
                        echo "<h2 id='name'><u>Objective</u></h2>";
                        echo "<td>
                                <p>Secure a responsible career opportunity to fully utilize my training and skills, while making a significant contribution to the success of the company</p>
                            </td>";
                        echo "<h2 id='name'><u>On the Job Training(OJT):</u></h2>";
                        echo "<td>
                                <p>Gumaca National High School Library
                                November 2019- January 2020
                                </p>
                                <p>Duties & Activities:</p>
                                <ul>
                                <li>Keeping Library well and clean</li>
                                <li>Making bibliographic description</li>
                                <li>Making stamp of ownership</li>
                            </ul>
                            </td>";
                            echo "<h2 id='name'><u>Certification/Seminars/Training</u></h2>";
                            echo "<td>
                                    <ul>
                                    <li>Work Immersion Seminar Gumaca National High School (October 2019)</li>
                                    <li>National Service Training Program - Civic Welfare Training Service (2021-2022)</li> 
                                </ul>
                                </td>";
                            echo "<h2 id='name'><u>Character Reference:</u></h2>";  
                            echo "<td>
                            <p>HON. ARTEMIO A. MAMBURAO<br>		
                                    Municipal Mayor<br>			 
                                    Macalelon, Quezon<br>			
                                    +63 984280250<br><br>
                            </p>
                                </td>";
                            echo "<p class='signature'><u>Artemio III E. Lorredo</u></p>";
                            echo "<p class='signature1'>Applicant</p>";
                        
                    ?>
                    
                </div>
    </div>
    </div>
    </div>
</body>
</html>