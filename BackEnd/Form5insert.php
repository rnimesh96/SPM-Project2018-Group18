<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
<?php

$mysqli = new mysqli("localhost", "root", "It12345@#1", "CSSE");

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$StudentID=$_POST['StudentID'];
$StudentName= $_POST['StudentName'];
$EmployeeName= $_POST['EmployeeName'];
$SupervisorName= $_POST['SupervisorName'];
$differances= $_POST['differances'];
$Volumeofwork=$_POST['Volumeofwork'];
$Qualityofwork=$_POST['Qualityofwork'];
$Analyticalability= $_POST['Analyticalability'];
$PeriAbilitytoresolveproblemodTo= $_POST['Abilitytoresolveproblem'];
$Accuracyandthroughness= $_POST['Accuracyandthroughness'];
$Abilitytoworkunderpressure= $_POST['Abilitytoworkunderpressure'];
$Oralcommunication=$_POST['Oralcommunication'];
$Writtencommunication=$_POST['Writtencommunication'];
$Originalandcriticalthinking= $_POST['Originalandcriticalthinking'];
$Abilitytolearn= $_POST['Abilitytolearn'];
$Effectiveinorganizingwork= $_POST['Effectiveinorganizingwork'];
$Takestheinitative= $_POST['Takestheinitative'];
$Flexibletononroutinework= $_POST['Flexibletononroutinework'];
$Activeandalert= $_POST['Activeandalert'];
$Attitudetowardorganization=$_POST['Attitudetowardorganization'];
$TeamPlayer=$_POST['TeamPlayer'];
$Diliganceandperserverance= $_POST['Diliganceandperserverance'];
$AcceptsResponsibility= $_POST['AcceptsResponsibility'];



if(StudentID !=''){

$query = $mysqli->query("INSERT INTO Form_5(StudentID,StudentName,EmployeeName,SupervisorName,differances,Volumeofwork,Qualityofwork,Analyticalability,
PeriAbilitytoresolveproblemodTo,Accuracyandthroughness,Abilitytoworkunderpressure,Oralcommunication,Writtencommunication,Originalandcriticalthinking,
Abilitytolearn,Effectiveinorganizingwork,Takestheinitative,Flexibletononroutinework,Activeandalert,Attitudetowardorganization,TeamPlayer,Diliganceandperserverance,
 AcceptsResponsibility
) values ('$StudentID','$StudentName','$EmployeeName','$SupervisorName','$differances','$Volumeofwork','$Qualityofwork',
'$Analyticalability','$PeriAbilitytoresolveproblemodTo','$Accuracyandthroughness','$Abilitytoworkunderpressure','$Oralcommunication','$Writtencommunication',
'$Originalandcriticalthinking','$Abilitytolearn','$Effectiveinorganizingwork','$Takestheinitative','$Flexibletononroutinework','$Activeandalert','$TeamPlayer','$Diliganceandperserverance','$AcceptsResponsibility'
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