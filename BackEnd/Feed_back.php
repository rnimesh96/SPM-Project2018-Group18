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
    $SuName= $_POST['SuName'];
    $CmnyName=$_POST['CmnyName'];
    $StdName= $_POST['StdName'];
    $StdID= $_POST['StdID'];
    $Message= $_POST['Message'];


    if($Advertiser_name !=''){
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