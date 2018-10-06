    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    </body>
    <?php
    $mysqli = new mysqli("localhost", "root", "It12345@#1", "CSSE");
 
    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $SuName= $_POST['SuName'];
    $CmnyName=$_POST['CmnyName'];
    $StdName= $_POST['StdName'];
    $StdID= $_POST['StdID'];
    $Message= $_POST['Message'];


    if($SuName !=''){
    //Insert Query of SQL
    $query = mysql_query("INSERT INTO feedback(SupervicerName,CmpanyName,StudentName,StudentID,Message) values('$SuName','$CmnyName','$StudentID','$StdName','$StdID','$Message')");

    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
    mysql_close($connection); // Closing Connection with Server
    ?>

    </html>
