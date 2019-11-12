<!doctype html>
<html>
<head>
<title>Login form </title>

<link rel="stylesheet" type="text/css" href="css/1.css">
<style>
img.x
{
z-index:-1;
}
</style>
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
</head>

<body>
 <!--<acronym title="Login">Login form validation</acronym>-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://code.jquery.com/jquery.js"></script>
      
<!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src = "js/bootstrap.min.js"></script>
<?php
//include("head1.html");
?>
<div id=div>
	<form autocomplete="on" action="php/1.php" method="post">
	<fieldset>
	<legend align="center" style="font-family:Blogger; font-weight: bold; color:#ffb31a;  font-size: 300%;">SignUp</legend>

<table>
	
	
	<tr>
		<td><label class="lab"> User id </label></td>
		<td><input type="text" name="email" autofocus  autocomplete /></td>
	</tr>
	<tr>
		<td><label class="lab">Password </label></td>
		<td><input type="password" name="pwd" autofocus  autocomplete pattern="[a-zA-Z]{4,10}"  /></td>
	</tr>


<!-- <label>No1:</label>
<input type="number" name="num1" /><br/>

<label>No2: </label>
<input type="number" name="num2" /><br/>

<label>Addition:</label><input type="radio" name="rad" value="plus">
<label>Substraction:</label><input type="radio" name="rad" value="minus">
-->

<!-- <input type="checkbox" name="a" value="100"><label>PHP</label><br/>
<input type="checkbox" name="b" value="200"><label>HTML</label></br>
<input type="checkbox" name="c" value="300"><label>C++</label></br> -->

<tr><td>
<label class="lab"> Age: </label>
<input type="number"  name="age" min="18" max="101" /><br/>
<br/></td>
</tr>

<tr><td>
<label class="lab"> Date of Birth: </label>
<input type="date"  autocomplete  name="dob"  /><br/>
<br/></td>
</tr>

<tr><td>
<label class="lab"> Mobile: </label>
<input type="text"    name="Contact" pattern="[0-9]{10}" name="mobile"/><br/>
<br/>
</td></tr>

<tr><td>
<label class="lab"> Address: </label>
<textarea   name="address" rows="8" cols="15" maxlength="25"/></textarea><br/>
<br/>
</td></tr>

<tr><td>
<label class="lab"> Pincode: </label>
<input type="number"  autocomplete  name="pin" pattern="[0-9]{6}" /><br/>
<br/>
</td></tr>

<tr><td>
<label class="lab"> Education: </label>
<select  name="education"  /><br/>
	<option value="-1">select</option>
	<option value="1">BE</option>
	<option value="2">HSC</option>
	<option value="3">SSC</option>
</select>
</td></tr>
<br/>
<br/>
<pre>
<tr><td>
<label class="lab"> Hobbies: </label>&nbsp;
	<input type="checkbox" name="hobby" value="Cricket" /><label>Cricket</label>
	<input type="checkbox" name="hobby" value="Swimming" /><label>Swimming</label>
	<input type="checkbox" name="hobby" value="TT" /><label>TT</label>
</pre>
</td></tr>
<pre>

<tr><td>
<label class="lab"> Gender:</label>
	<input type="radio" name="sex" value="M" /><label>Male</label>
	<input type="radio" name="sex" value="F" /><label>Female</label>
</pre>
<br/>
</td></tr>

<label class="lab"> Email :</label>
<input type="email" name="email" />
<br/>

<form enctype="multipart/form-data" action="a.php" method="post"><br/>
<input type="file" name="f"/><br/>
<input type="hidden" name="mumele" value="gud"/>
<br/>


	<button class="button"><span>Login</span></button>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br/>
</fieldset>
</form>
<?php
	include("footer.html");
?>
</table>
</body>
</html>
