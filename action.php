 <?php
$nazivvica=$_POST["nazivvica"];
$zanr=$_POST["zanr"];
$tekst=$_POST["tekst"];
if (empty($nazivvica)|| empty($zanr) ||empty (tekst)){ //echo "Niste unjeli sve podatke u odgovaraju'a polja";
													 header('Location:error.php'); } 
else {


    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "root", "vicevi");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Attempt insert query execution

    $sql = "INSERT INTO tablica (nazivvica, zanr, tekst) VALUES ('$nazivvica', '$zanr', '$tekst')";

    if(mysqli_query($link, $sql)){

        //echo "Records added successfully.";
		
    header('Location:preview.php');


    } else{
header('Location:index.php');
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);}

    ?>
<!--<html>
<head>
</head>
<body><br>Welcome <?php echo $_POST["ime"]; ?><br>
Ti si u: <?php echo $_POST["zanr"]; ?>
<a href="preview.php"><img src="http://cdn2.business2community.com/wp-content/uploads/2015/01/click_here_button.jpg";/></a>
</body>
</html>



