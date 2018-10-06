<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
<?php
$mysqli = new mysqli("localhost", "root", "It12345@#1", "CSSE");// Establishing Connection with Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$StudentID=$_POST['StudentID'];
$StudentName= $_POST['StudentName'];
$Address= $_POST['Address'];
$HomePhone= $_POST['HomePhone'];
$MobilePhone= $_POST['MobilePhone'];
$Email=$_POST['Email'];
$semester=$_POST['semester'];
$year= $_POST['year'];
$CGPA= $_POST['CGPA'];
$EmployeeName= $_POST['EmployeeName'];
$EmployeeAddress= $_POST['EmployeeAddress'];
$SupervisorName=$_POST['SupervisorName'];
$SupervisorPhone=$_POST['SupervisorPhone'];
$SupervisorTitle= $_POST['SupervisorTitle'];
$SupervisorEmail= $_POST['SupervisorEmail'];
$InternshipStartDate= $_POST['InternshipStartDate'];
$InternshipEndDate= $_POST['InternshipEndDate'];
$NoOFHours=$_POST['NoOFHours'];
$studentTasks=$_POST['studentTasks'];
$studentLearn= $_POST['studentLearn'];
$ExternalSupervisorName= $_POST['ExternalSupervisorName'];
$Date=$_POST['Date'];
if($StudentID !=''){
//Insert Query of SQL
$query = $mysqli->query("INSERT INTO Form_1(StudentId, StudentName, Address, HomePhone, MobilePhone, Email, semester, year, CGPA, EmployeeName, EmployeeAddress,SupervisorName, SupervisorPhone, SupervisorTitle, SupervisorEmail, InternshipStartDate, InternshipEndDate, NoOFHours, studentTasks, studentLearn, ExternalSupervisorName, Date
) values ('$StudentID','$StudentName','$Address','$HomePhone','$MobilePhone','$Email','$semester','$year','$CGPA','$EmployeeName
','$EmployeeAddress','$SupervisorName','$SupervisorPhone','$SupervisorTitle','$SupervisorEmail','$InternshipStartDate','$InternshipEndDate','$NoOFHours','$studentTasks','$studentLearn','$ExternalSupervisorName','$Date'
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