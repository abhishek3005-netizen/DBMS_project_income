<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername,$username, $password);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,'income');
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$query="INSERT INTO ";
mysqli_query($conn,$query);
$a = '';
if( isset( $_POST['fname'])) {
 $a = $_POST['fname'];
}
$b = '';
if( isset( $_POST['mname'])) {
 $b = $_POST['mname'];
}
$c= '';
if( isset( $_POST['lname'])) {
 $c = $_POST['lname'];
}
 $d= '';
if( isset( $_POST["dob"])) {
 $d = $_POST["dob"];
}
$e = '';
if( isset( $_POST["taxid"])) {
 $e = $_POST["taxid"];
}
$f = '';
if( isset( $_POST["add"])) {
 $f = $_POST["add"];
}
$g = '';
if( isset( $_POST["add2"])) {
 $g = $_POST["add2"];
}
$h = '';
if( isset( $_POST["city"])) {
 $h = $_POST["city"];
}
$i = '';
if( isset( $_POST["state"])) {
 $i = $_POST["state"];
}
$j = '';
if( isset( $_POST["zip"])) {
 $j = $_POST["zip"];
}
$k = '';
if( isset( $_POST["country"])) {
 $k = $_POST["country"];
}
$l = '';
if( isset( $_POST["number"])) {
 $l = $_POST["number"];
}
$m = '';
if( isset( $_POST["userid"])) {
 $m = $_POST["userid"];
}
$n= '';
if( isset( $_POST["password"])) {
 $n = $_POST["password"];
}
$o = '';
if( isset( $_POST["retype_password"])) {
 $o = $_POST["retype_password"];
}
$p = '';
if( isset( $_POST["doctype"])) {
 $p = $_POST["doctype"];
}
$q = '';
if( isset( $_POST["docid"])) {
 $q = $_POST["docid"];
}
$r = '';
if( isset( $_POST["docexp"])) {
 $r = $_POST["docexp"];
}
$s = '';
if( isset( $_POST["acn"])) {
 $s = $_POST["acn"];
}
$t = '';
if( isset( $_POST["amount"])) {
 $t = $_POST["amount"];
}
$u = '';
if( isset( $_POST["bank"])) {
 $u = $_POST["bank"];
} 
$v = '';
if( isset( $_POST["depname"])) {
 $v = $_POST["depname"];
}
$w = '';
if( isset( $_POST["relation"])) {
 $w = $_POST["relation"];
}
$x = '';
if( isset( $_POST["street"])) {
 $x = $_POST["street"];
}
$y = '';
if( isset( $_POST["sex"])) {
 $y = $_POST["sex"];
}
$z = '';
if( isset( $_POST["acctype"])) {
 $z = $_POST["acctype"];
}
$a1 = '';
if( isset( $_POST["ifsc"])) {
 $a1 = $_POST["ifsc"];
}
$a2 = '';
if( isset( $_POST["empid"])) {
 $a2 = $_POST["empid"];
}
$a3 = '';
if( isset( $_POST["grsal"])) {
 $a3 = $_POST["grsal"];
}
$a4 = '';
if( isset( $_POST["pno"])) {
 $a4 = $_POST["pno"];
}
$a5 = '';
if( isset( $_POST["ptype"])) {
 $a5 = $_POST["ptype"];
}
$a6 = '';
if( isset( $_POST["pname"])) {
 $a6 = $_POST["pname"];
}
$a7 = '';
if( isset( $_POST["grsal"])) {
 $a7 = $_POST["grsal"];
}
$a8 = '';
if( isset( $_POST["isscomp"])) {
 $a8 = $_POST["isscomp"];
}
$a9 = '';
if( isset( $_POST["pan"])) {
 $a9 = $_POST["pan"];
}
$a10 = '';
if( isset( $_POST["expdate"])) {
 $a10 = $_POST["expdate"];
}
$a11 = '';
if( isset( $_POST["depfname"])) {
 $a11 = $_POST["depfname"];
}
$a12 = '';
if( isset( $_POST["depmname"])) {
 $a12 = $_POST["depmname"];
}
$a13 = '';
if( isset( $_POST["deplname"])) {
 $a13 = $_POST["deplname"];
}
$a14 = '';
if( isset( $_POST["dob2"])) {
 $a14 = $_POST["dob2"];
}
$a15 = '';
if( isset( $_POST["paymentid"])) {
 $a15 = $_POST["paymentid"];
}
$a16 = '';
if( isset( $_POST["issuedate"])) {
 $a16 = $_POST["issuedate"];
}


// table insertion query 

$query11="INSERT INTO tax_registration VALUES ('$e','$m','$c','$a','$b','$n')";  //tax_no   user_id	 lname	fname	mname	passsword 
$res11=mysqli_query($conn,$query11);
if($res11)
{echo"query11success";}
else {printf("query11Errormessage: %s\n", $conn->error);}

$query9="INSERT INTO document VALUES ('$q','$p','$r')";  // docid doctype doc_exp
$res9=mysqli_query($conn,$query9);
if($res9)
{echo"query9success";}
else {printf("query9Errormessage: %s\n", $conn->error);}

$query10="INSERT INTO myprofile2 VALUES ('$e','$q','$d','$a','$c','$b','$y','$x','$i')";// tax _id doc_id dob fname lname mname sex street state 
$res10=mysqli_query($conn,$query10);
if($res10)
{echo"query10success";}
else {printf("query10Errormessage: %s\n", $conn->error);}

$query3="INSERT INTO account VALUES ('$s','$u')";//  Account_no	B_name
$res3=mysqli_query($conn,$query3);
if($res3)
{echo"query3success";}
else {printf("query3Errormessage: %s\n", $conn->error);}

$query6="INSERT INTO account_info VALUES ('$a1','$s','$z')";  // ifsc acno type
$res6=mysqli_query($conn,$query6);
if($res6)
{echo"query6success";}
else {printf("query6Errormessage: %s\n", $conn->error);}

$query12="INSERT INTO policy VALUES ('$e','$a4')";//  tax_no	p_no
$res12=mysqli_query($conn,$query12);
if($res12)
{echo"query12success";}
else {printf("query12Errormessage: %s\n", $conn->error);}

$query17="INSERT INTO salary_details VALUES ('$a2','$a','$a7','$e')";//  emp_id	emp_name
$res17=mysqli_query($conn,$query17);
if($res17)
{echo"query17success";}
else {printf("query17Errormessage: %s\n", $conn->error);}


$query1="INSERT INTO contact VALUES ('$e','$l') ";// 	tax_no	phone
$res1=mysqli_query($conn,$query1);
if($res1)
{echo"query1success";}
else {printf("query1Errormessage: %s\n", $conn->error);}

$query2="INSERT INTO amount VALUES ('$u','$t')";//  b_name	amount
$res2=mysqli_query($conn,$query2);
if($res2)
{echo"query2success";}
else {printf("query2Errormessage: %s\n", $conn->error);}



$query4="INSERT INTO dependent VALUES ('$e','$a11','$a12','$a13','$w','$a14')";//tax_no fname mname Lname Relationship dob
$res4=mysqli_query($conn,$query4);
if($res4)
{echo"query4success";}
else {printf("query4Errormessage: %s\n", $conn->error);}

$query5="INSERT INTO password VALUES ('$e','$n')";// taxid password
$res5=mysqli_query($conn,$query5);
if($res5)
{echo"query5success";}
else {printf("query5Errormessage: %s\n", $conn->error);}



$query7="INSERT INTO bank VALUES ('$u','$a1')";  // bank ifsc 
$res7=mysqli_query($conn,$query7);
if($res7)
{echo"query7success";}
else {printf("query7Errormessage: %s\n", $conn->error);}

$query8="INSERT INTO city VALUES ('$i','$h')";  // state city
$res8=mysqli_query($conn,$query8);
if($res8)
{echo"query8success";}
else {printf("query8Errormessage: %s\n", $conn->error);}


// continue your tables from here



$query13="INSERT INTO policy_details VALUES ('$a4','$a5','$a6','$a16','$a10','$a8')";//  p_no	p_type	p_name	iss_date	exp_date	iss_comp
$res13=mysqli_query($conn,$query13);
if($res13)
{echo"query13success";}
else {printf("query13Errormessage: %s\n", $conn->error);}

$query14="INSERT INTO document_status VALUES ('$q','ACCEPTED')";//  doc_id	status
$res14=mysqli_query($conn,$query14);
if($res14)
{echo"query14success";}
else {printf("query14Errormessage: %s\n", $conn->error);}

$query15="INSERT INTO employee_details VALUES ('$e','$a4','$a2')";//  tax_no	pan_no
$res15=mysqli_query($conn,$query15);
if($res15)
{echo"query15success";}
else {printf("query15Errormessage: %s\n", $conn->error);}

$query16="INSERT INTO payee_info VALUES ('$a15','$s','$e','$u','18-10-2020')";//  payment_id	account_no	tax_id	b_name	date
$res16=mysqli_query($conn,$query16);
if($res16)
{echo"query16success";}
else {printf("query16Errormessage: %s\n", $conn->error);}





?> 