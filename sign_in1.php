<head>
<title>Sign-Up</title>
<style>
#body-color{
background-color:white;
}
#Sign-Up{
margin-top:150px;
margin-bottom:150px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px; 
background:AliceBlue;
width:400px;
border-radius:20px;
box-shadow:7px 7px 6px;
}
#button{
border-radius:10px;
width:100px;
height:40px;
background:#FF00FF;
font-weight:bold;
font-size:20px;
}




</style>
</head>
<body id="body-color">
<div id="Sign-Up">
<fieldset style="width:30%"><legend>Registration Form</legend>
<table border="0">
<tbody><tr>
<form method="POST" action="connectivity-sign-up.php"></form>
<td>Name</td><td> <input name="name" type="text"></td>
</tr>
<tr>
<td>Email</td><td> <input name="email" type="text"></td>
</tr>
<tr>
<td>UserName</td><td> <input name="user" type="text"></td>
</tr>
<tr>
<td>Password</td><td> <input name="pass" type="password"></td>
</tr>
<tr>
<td>Confirm Password </td><td><input name="cpass" type="password"></td>
</tr>
<tr>
<td><input id="button" name="submit" value="Sign-Up" type="submit"></td>
</tr>

</tbody></table>
</fieldset>
</div>





</body>
