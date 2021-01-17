<html>
<head>
<title> Transactions View </title>
<link rel="stylesheet" href="css/admindesign.css">
</head>
<body>
<?php
require 'connection.php';
if(isset($_POST['month']))
{
  $month =$_POST['month'];
  $monthnew=date("m",strtotime($month));

  $sql="SELECT (SELECT sum(amount)from user_payment where payment_date like '_____$monthnew%')as income,(SELECT sum(trainer_salary)from trainer)as trainer_fees"; //fetching salary from user_info and trainer table
$getd=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($getd);
$income=$row['income'];
$salary_paid=$row['trainer_fees'];
//new query to get values from other bills table
$sqlob="select * from other_bills where payment_date like '_____$monthnew%' ";
$getob=mysqli_query($conn,$sqlob);
$rowob=mysqli_fetch_assoc($getob);
if(mysqli_num_rows($getob)>0){
$elec_bill=$rowob['elec_bills'];
$machine_maint=$rowob['machine_maint'];
$other_bill=$rowob['other_bill'];
/*echo $elec_bill."<br/>";
echo $machine_maint."<br/>";
echo $other_bill."<br/>";*/}
else{
  echo "no bills record <br/>";
  $elec_bill=0;
  $machine_maint=0;
  $other_bill=0;


}
//calculations:
$net_income=$income-($salary_paid+$elec_bill+$machine_maint+$other_bill);
//insertion query into transactions
$sql2="insert into transactions(ofdate,income,salary_paid,elec_bill,machine_maint,other_bill,net) values('$month','$income','$salary_paid','$elec_bill','$machine_maint','$other_bill','$net_income')
on DUPLICATE key UPDATE
income=$income,
salary_paid=$salary_paid,
elec_bill=$elec_bill,
machine_maint=$machine_maint,
other_bill=$other_bill,
net=$net_income ";
$insertd=mysqli_query($conn,$sql2);
if($insertd)
{
  echo '<script></script>';
}
else
{
  echo "coudnt insert into transacitons".mysqli_error($conn);
}
//view query of transaction table
$sql3="select *from transactions where ofdate like '_____$monthnew%' ";
$viewd=mysqli_query($conn,$sql3);
if(mysqli_num_rows($viewd)>0)
{
  echo  '<table>
      <tr> <th> Date </th>
              <th> Income</th>
              <th> Salary Paid </th>
              <th> Electricity Bill</th>
              <th> Machine Maintenance</th>
              <th> Other Bill </th>
              <th> Net Income </th>
      </tr>';
while($row2=mysqli_fetch_assoc($viewd))
{
  echo '<tr>
          <td>'.$row2['ofdate'].'</td>
          <td>'.$row2['income'].'</td>
          <td>'.$row2['salary_paid'].'</td>
          <td>'.$row2['elec_bill'].'</td>
          <td>'.$row2['machine_maint'].'</td>
          <td>'.$row2['other_bill'].'</td>
          <td>'.$row2['net'].'</td>';
}
}
}
else {
  echo "error: ";
}
 ?>
</body>
</html>
