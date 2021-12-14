<?php
$conn = mysqli_connect("localhost", "root", "", "banque_normande");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$id =  htmlspecialchars("default");
$account_number = rand(100000,900000);
$amount = htmlspecialchars($_REQUEST['amount']);
$account_type =  htmlspecialchars($_REQUEST['account_type']);
$account_creation_date = $date = date('y-m-d');
$owner_id = htmlspecialchars("default");

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO Account  VALUES ('$id', '$account_number', 
      '$amount','$account_type','$account_creation_date','$owner_id')";

if (mysqli_query($conn, $sql)) {
    include("Template/Header.php");
    echo "<h3>Le compte à été ajouté  !</h3>";
    include("Template/user_account.php");
    include("Template/Footer.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
