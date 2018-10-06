<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
<?php




$mysqli = new mysqli("localhost", "root", "It12345@#1", "CSSE");

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$InternName=$_POST['InternName'];
$StudentID= $_POST['StudentID'];
$Internprivateaddress= $_POST['Internprivateaddress'];
$ContactNo= $_POST['ContactNo'];
$EmailAddress= $_POST['EmailAddress'];
$InternshipTitle=$_POST['InternshipTitle'];
$Specialisation=$_POST['Specialisation'];
$OverallinternshipPeriodFrom= $_POST['OverallinternshipPeriodFrom'];
$PeriodTo= $_POST['PeriodTo'];
$SummeryofthekeyTasks= $_POST['SummeryofthekeyTasks'];
$Detailsandnotesofworkcarriedout= $_POST['Detailsandnotesofworkcarriedout'];
$certified1=$_POST['certified1'];
$Remarks=$_POST['Remarks'];
$certified2= $_POST['certified2'];
$ExternalSupervisorName= $_POST['ExternalSupervisorName'];
$Date= $_POST['Date'];




if($StudentID !=''){
//Insert Query of SQL
$query = $mysqli->query("INSERT INTO Form_3(InternName,StudentID,Internprivateaddress,ContactNo,EmailAddress,InternshipTitle,Specialisation,
OverallinternshipPeriodFrom,PeriodTo,SummeryofthekeyTasks,Detailsandnotesofworkcarriedout,certified1,Remarks,certified2,ExternalSupervisorName,Date
) values ('$InternName','$StudentID','$Internprivateaddress','$ContactNo','$EmailAddress','$InternshipTitle','$Specialisation',
'$OverallinternshipPeriodFrom','$PeriodTo','$SummeryofthekeyTasks','$Detailsandnotesofworkcarriedout','$certified1','$Remarks','$certified2','$ExternalSupervisorName',
'$Date'
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