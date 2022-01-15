<!doctype html>

<html>

<head>

</head>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<table >

<tr>

<td>Id:<br><input type="text" name="roll" placeholder="pT-14520">

</tr>

<tr>

<td>First Name:<input type="text" name="name" maxlength="20"
placeholder="First Name" ></td>

</tr>

<tr>

<td>Last Name:<input type="text" name="lname" maxlength="20"
placeholder="Last Name"></td>

</tr>

<tr>

<td>Date of Birth:<input type="Date" name="dof" maxlength="20"
placeholder="28/12/1993"></td>

</tr>

<tr>

<td>Qualification:<input type="text" name="qua" maxlength="20"
placeholder="Qualification"></td>
</tr>

<tr>

<td>Sex:<input type="radio" name="sex" value="male" checked="checked">male

<input type="radio" name="sex" value="female">female

</td>

</tr>

<tr>

<td>Email:<input type="email" name="email" autocomplete="on" ></td>

</tr>

<tr>

<td>Contact:<input type="text" name="contact" maxlength="10"
placeholder="1234567890"></td>

</tr>

<tr>

<td>Address:<textarea rows="7" cols"3" name="a"></textarea></td>

</tr>

<tr>

<td><input type="submit" value="PoSt" name="sub"><input type="reset"
value="reset"></td>

</tr>

</table>

</form>

</body>

</html>
 <style>

table

{



 background: #EDEDED;

 border:2px solid ;

 width:200px;

 border-spacing:10px;

 margin-left:auto;

 margin-right:auto;

 }

</style>

<?php

$a1=mysql_connect("localhost", "root", "")or die("connection fail");

$b=mysql_select_db("test", $a1);

if(isset($_POST['sub']))

 {

error_reporting(0);

$roll=$_POST['roll'];

$name=$_POST['name'];

$lname=$_POST['lname'];

$dob=$_POST['dof'];

{

}

?>