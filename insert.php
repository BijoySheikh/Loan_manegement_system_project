

<?php
$connect = mysqli_connect("localhost", "root", "", "torun");
if(isset($_POST["m_name"], $_POST["f_name"]))
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
 $premier_amount = mysqli_real_escape_string($connect, $_POST["premier_amount"]);
 $savings_amount = mysqli_real_escape_string($connect, $_POST["savings_amount"]);


 $query = "INSERT INTO member_data (m_name, f_name, phone_no, refer_name, present_addr, permanent_addr, upload_img, loan_sirial, loan_date, loan_amount, premier_amount, savings_amount ) VALUES('$m_name', '$f_name', '$phone_no', '$refer_name', '$present_addr', '$permanent_addr', '$upload_img', '$loan_sirial', '$loan_date', '$loan_amount', '$premier_amount', '$savings_amount')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>