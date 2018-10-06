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
$DegreeProgramme= $_POST['DegreeProgramme'];
$DOB= $_POST['DOB'];
$Email= $_POST['Email'];
$NIC= $_POST['NIC'];
$Address=$_POST['Address'];
$ContactNo=$_POST['ContactNo'];
$timelength= $_POST['timelength'];


if($StudentID !=''){
//Insert Query of SQL
$query = $mysqli->query("INSERT INTO FormReg(StudentName,DegreeProgramme,DOB,Email,NIC,Address,ContactNo,
timelength) values ('$StudentName','$DegreeProgramme','$DOB','$Email','$NIC','$Address','$ContactNo',
'$timelength')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>

</html>