<!DOCTYPE html>
<head>

    <title>Resume</title>
</head>
<body>
<h1>Resume Builder</h1>
<form>
    <fieldset>
        <legend>Personal Information</legend>
        <table>
            <tr><td>Full Name:</td> 
            <td><input type="text" id="name" name="name" placeholder="John Doe"></td></tr>
            <tr><td>Email:</td>
            <td><input type="text" id="email" name="email" placeholder="email@email.com"></td></tr>
            <tr><td>Phone:</td>
            <td><input type="tel" id="phone" name="phone" placeholder="123-456-789"></td></tr>
            <tr><td>Date of Birth:</td>
            <td><input type="date" id="birth" name="birth"></td></tr>
            <tr><td>Gender:</td><td>
            <input type="radio" id="male" name="gender" value="male">Male
            <input type="radio" id="female" name="gender" value="female">Female
            <input type="radio" id="other" name="gender" value="other">Others
            </td></tr>
            <tr><td>Address:</td>
            <td><textarea id="address" name="address" rows="3" cols="20" placeholder="1234 main St, City, Country"></textarea></td></tr>
        </table>
        </fieldset>

<fieldset>
        <legend>Educaiton</legend>
        <table><tr><td>Highest Degree:</td>
        <td><select id="degree" name="degree">
        <option value="" selected disabled>Select Degree</option>
            <option value="highschool">High School</option>
            <option value="bachelor">Bachelors</option>
            <option value="master">Masters</option>
            </select>
        </td></tr>
        <tr><td>Institute:</td>
        <td><input type="text" id="institution" name="institution" placeholder="University Name"></td></tr>
        <tr><td>Year of Graduation:</td>
        <td><input type="text" id="graduation" name="graduation"></td></tr>
</table></fieldset>

<fieldset>
        <legend>Work Experience</legend>
        <table><tr><td>Company Name:</td>
        <td><input type="text" id="company" name="company" placeholder="Company Name">
        </td></tr>
        <tr><td>Job Title:</td>
        <td><input type="text" id="title" name="title" placeholder="Job Title"></td></tr>
        <tr><td>Duration:</td>
        <td><input type="month" id="durationstart" name="duration">to
        <input type="month" id="durationend" name="duration"></td></tr>
</table></fieldset>

<fieldset>
    <legend>Skills</legend>
    <table><tr><td>Skills:</td>
        <td><input type="checkbox" id="html" name="skills" value="HTML">HTML
            <input type="checkbox" id="css" name="skills" value="CSS">CSS
            <input type="checkbox" id="js" name="skills" value="JavaScript">JavaScript
            <input type="checkbox" id="python" name="skills" value="Python">Python
            <input type="checkbox" id="java" name="skills" value="Java">Java
        </td></tr>
    </table></fieldset>
<fieldset>
    <table>
<tr><td><input type = "submit" name="submit" value="Submit Resume" >
<input type ="reset" name="reset" value="Clear Form" ></td></tr>
</table></fieldset>
</body>
</html>