<?p<html>
<head>
</head>
<?php
if (!isset($_POST["sub"])) {
 ?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>
<table style="background: #AAFFFF; margin-left:100px; margin-top:50px;
margin-bottom:100px; padding:10px; " >
 <tr>
 <td style="color:#333333;font-size:20px;">Name</td>
 <td><input name="name" type="text" required/></td>

 </tr>
 <tr>
 <td style="color:#333333;font-size:20px;">Email</td>
 <td><input name="email" type="email" required/></td>

 </tr>
 <tr>
 <td style="color:#333333;font-size:20px;">Messege</td>
 <td><textarea name="mess" cols="15" rows="10" required ></textarea></td>

 </tr>
 <tr>
 <td><input name="res" type="reset" value="Reset"/></td>
 <td><input name="sub" type="submit" value="Submit"></td>

 </tr>
</table>
</form>
 <?php
 } else {
 if (isset($_POST["name"])) {
 $from = $_POST["name"]; // sender
 $subject = $_POST["email"];
 $message = $_POST["mess"];
 mail("Shivesh179@gmail.com",$subject,$message,"From: $from\n");
 echo "Thanks";