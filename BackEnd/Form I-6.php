    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    </body>
    <?php
    $connection = mysql_connect("localhost", "username", "pw");  // Establishing Connection with Server
    $db = mysql_select_db("dbname", $connection); // Selecting Database from Server
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $StudentName= $_POST['name'];
    $StudentID=$_POST['ITNO'];
    $Introduction1= $_POST['Introduction1'];
    $Introduction2= $_POST['Introduction2'];
    $Introduction3= $_POST['Introduction3'];
    $IntrenIns1= $_POST['IntrenIns1'];
    $IntrenIns2= $_POST['IntrenIns2'];
    $IntrenIns3= $_POST['IntrenIns3'];
    $LearnOut1= $_POST['LearnOut1'];
    $LearnOut2= $_POST['LearnOut2'];
    $LearnOut3= $_POST['LearnOut3'];
    $CV1= $_POST['cv1'];
    $CV1= $_POST['cv2'];

    if($Advertiser_name !=''){
    //Insert Query of SQL
    $query = mysql_query("INSERT INTO form6(StudentID,StudentName,Address,HomePhone,MobilePhone,Email,semester,year,CGPA,EmployeeName,
    $StudentName,$StudentID,$Introduction1,$Introduction2,$Introduction3,$IntrenIns1,$IntrenIns2,$IntrenIns3,
    $LearnOut1,$LearnOut2,$LearnOut3,$CV1,$CV2) values ('$StudentID','$StudentName','$Address','$HomePhone','$MobilePhone','$Email','$semester','$year','$CGPA','$EmployeeName
    ','$EmployeeAddress','$SupervisorName','$SupervisorPhone','$SupervisorTitle','$SupervisorEmail','$InternshipStartDate','$InternshipEndDate','$NoOFHours','$
    studentTasks','$studentLearn','$ExternalSupervisorName','$Date'
    )");

    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
    mysql_close($connection); // Closing Connection with Server
    ?>

    </html>