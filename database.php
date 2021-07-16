<?php

//<-------------------------------------CONNECTING TO DATABASE-------------------------------------->

$email=$_POST['email'];
$customername=$_POST['customername'];
$amount=$_POST['amount'];

$conn =mysqli_connect('localhost','root','','pooja');
if(!$conn){
    die('not connected');    
}


$query="INSERT INTO transcation(email,customername,amount)VALUES('$email','$customername','$amount')";
$result=mysqli_query($conn,$query);
if(!$result){
    die('Query FAILER').mysqli_error();

}else{
    echo "<script> alert('Transaction Successful');
                                     window.location='transactionlist.php';
             </script>";
                    
}



?>