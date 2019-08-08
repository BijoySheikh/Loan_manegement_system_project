
<?php
$connect = mysqli_connect("localhost", "root", "", "torun");

if(isset($_POST["m_name"], $_POST["f_name"], $_POST["phone_no"], $_POST["refer_name"], $_POST["present_addr"], $_POST["permanent_addr"], $_POST["upload_img"], $_POST["loan_sirial"], $_POST["loan_date"], $_POST["loan_amount"], $_POST["profit_amount"], $_POST["total_amount"], $_POST["premier_amount"], $_POST["savings_amount"]))
{

 $m_name = mysqli_real_escape_string($connect, $_POST["m_name"]);
 $f_name = mysqli_real_escape_string($connect, $_POST["f_name"]);
 $phone_no = mysqli_real_escape_string($connect, $_POST["phone_no"]);
 $refer_name = mysqli_real_escape_string($connect, $_POST["refer_name"]);
 $present_addr = mysqli_real_escape_string($connect, $_POST["present_addr"]);
 $permanent_addr = mysqli_real_escape_string($connect, $_POST["permanent_addr"]);
 $upload_img = mysqli_real_escape_string($connect, $_POST["upload_img"]);
 $loan_sirial = mysqli_real_escape_string($connect, $_POST["loan_sirial"]);
 $loan_date = mysqli_real_escape_string($connect, $_POST["loan_date"]);
 $loan_amount = mysqli_real_escape_string($connect, $_POST["loan_amount"]);
 $profit_amount = mysqli_real_escape_string($connect, $_POST["profit_amount"]);
 $total_amount = mysqli_real_escape_string($connect, $_POST["total_amount"]);
 $premier_amount = mysqli_real_escape_string($connect, $_POST["premier_amount"]);
 $savings_amount = mysqli_real_escape_string($connect, $_POST["savings_amount"]);


 $query = "INSERT INTO member_data (m_name, f_name, phone_no, refer_name, present_addr, permanent_addr, upload_img, loan_sirial, loan_date, loan_amount, profit_amount, total_amount, premier_amount, savings_amount )
 VALUES('$m_name', '$f_name', '$phone_no', '$refer_name', '$present_addr', '$permanent_addr','$upload_img', '$loan_sirial', '$loan_date', '$loan_amount', '$profit_amount', '$total_amount', '$premier_amount', '$savings_amount')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
else{
    echo 'Data Not Inserted';
}
}
?> 


 