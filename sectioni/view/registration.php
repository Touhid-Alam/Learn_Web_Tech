<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the registration form</h1>
<form>
<table>
    <tr><td>
Username: </td><td><input type="text" name="Username"></td></tr>
<tr><td>Password: </td><td><input type="password" name="Password"><br></td></tr>

<tr><td>Select Gender: </td><td>
<input type="radio" name="gender" value="male">Male 
<input type="radio" name="gender" value="female">Female
</td><tr>

<tr><td>Select Preferences:</td><td>
    <input type="checkbox" name="books">Books
    <input type="checkbox" name="sports">Sports
</td><tr>

<tr><td>
    <input type="submit" name= "submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</td></tr>

<tr><td><input type="button" value="Go Back" onclick="history.back()">
</td></tr>

</table>
</form>

</body>
</html>