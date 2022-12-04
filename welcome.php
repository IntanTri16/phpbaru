<html>
    <body>
        Welcome <?php echo $_POST["firstname"];?><br>
        Your Email Addres is: <?php echo $_POST["email"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO MYGuests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email');";
    

    ?>

    </body>
</html>