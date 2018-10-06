<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
<?php
$mysqli = new mysqli("localhost", "root", "It12345@#1", "CSSE");
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$StudentName=$_POST['StudentName'];
$StudentID= $_POST['StudentID'];
$StudentPhone= $_POST['StudentPhone'];
$StudentEmail= $_POST['StudentEmail'];
$EmployeeName= $_POST['EmployeeName'];
$SupervisorPhone=$_POST['SupervisorPhone'];
$Degreetitle=$_POST['Degreetitle'];
$Specification= $_POST['Specification'];
$InternshipDuration= $_POST['InternshipDuration'];
$NumberOfCredits= $_POST['NumberOfCredits'];
$InternshipTitle= $_POST['InternshipTitle'];
$Commnents1=$_POST['Commnents1'];
$Commnents2=$_POST['Commnents2'];
$FinalGrade= $_POST['FinalGrade'];
$ExaminerName= $_POST['ExaminerName'];
$ExternalSupervisorName= $_POST['ExternalSupervisorName'];
$Date=$_POST['Date'];


if($StudentID !=''){
//Insert Query of SQL
$query = $mysqli->query("INSERT INTO Form_7(StudentName,StudentID,StudentPhone,StudentEmail,EmployeeName,SupervisorPhone,Degreetitle,
Specification,InternshipDuration,NumberOfCredits,InternshipTitle,Commnents1,Commnents2,FinalGrade,ExaminerName,ExternalSupervisorName,Date
) values ('$StudentName','$StudentID','$StudentPhone','$StudentEmail','$EmployeeName','$SupervisorPhone','$Degreetitle',
'$Specification','$InternshipDuration','$NumberOfCredits','$InternshipTitle','$Commnents1','$Commnents2','$FinalGrade','$ExaminerName',
'$ExternalSupervisorName','$Date'
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