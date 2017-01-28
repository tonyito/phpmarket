<!DOCTYPE html>
<head>
<title>
Registration
</title>
</head>

<body>
<h1>New User Registration</h1>
<form method="post" action="/register.php">
<fieldset>
<legend>Registration Form</legend>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td style="font-weight: bold"><div align="right"><label for="username">New Username (max 20 characters)</label></div></td>
<td><input name="username" type="text" class="input" size="20" required /></td>
</tr>
<td style="font-weight: bold"><div align="right"><label for="first">First Name</label></div></td>
<td><input name="first" type="text" class="input" size="25" required /></td>
</tr>
<td style="font-weight: bold"><div align="right"><label for="last">Last Name</label></div></td>
<td><input name="last" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="email">Email</label></div></td>
<td><input name="email" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>