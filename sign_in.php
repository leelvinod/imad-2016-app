<head>
<title>Sign-In</title>
<style>
#body-color{
background-color:white;
}
#Sign-In{
margin-top:150px;
margin-bottom:150px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px; 
background:AliceBlue;
width:500px;
border-radius:20px;
box-shadow: 7px 7px 6px;
}
#button{
border-radius:10px;
width:100px;
height:40px;
background:#FF00FF;
font-weight:bold;
font-size:20px
}
</style>
</head>
<body id="body-color">
<div id="Sign-In">
<fieldset style="width:30%"><legend>LOG-IN HERE</legend>
<form method="POST" action="connectivity.php">
User <br><input name="user" size="40" type="text"><br>
Password <br><input name="pass" size="40" type="password"><br>
<input id="button" name="submit" value="Log-In" type="submit">
</form>
</fieldset>
</div>


</body>
