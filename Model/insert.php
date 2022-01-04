<?php
require('connexionINSERT.php')
?>

<?php
// Taking all 5 values from the form data(input)
$id =  htmlspecialchars("default");
$account_number = rand(100000,900000);
$amount = htmlspecialchars($_REQUEST['amount']);
$account_type =  htmlspecialchars($_REQUEST['account_type']);
$account_creation_date = $date = date('y-m-d');
$owner_id = htmlspecialchars("default");

include('INSERTsql.php');

if (mysqli_query($conn, $sql)) {
    include("../Template/Header.php");
    echo "<h3>Le compte à été ajouté  !</h3>";
    include("../user_account.php");
    include("../Template/Footer.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
