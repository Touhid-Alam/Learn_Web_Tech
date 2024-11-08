<!DOCTYPE html>
<html>
<head>
    <title>Agriculture User Registration</title>
    <style>
        /* General page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container styling */
        form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px 0;
        }

        h3 {
            margin: 0;
            color: #333;
            text-align: center;
        }

        /* Label styling */
        strong {
            display: inline-block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        /* Input styling */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Button styling */
        input[type="submit"],
        input[type="reset"],
        input[type="button"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 14px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;
        }

        /* Go Back button styling */
        input[type="button"] {
            background-color: #aaa;
        }

        input[type="button"]:hover {
            background-color: #888;
        }

    </style>
</head>
<body>
    <form>
        <h1>Farmers! Welcome to Registration</h1>
        <table>
            <tr><td><h3>Sign Up</h3></td></tr>
            <tr><td><strong>User Role</strong></td></tr>
            <tr>
                <td>
                    <select id="UserRole" name="role">
                        <option value="" disabled selected>Select your role</option>
                        <option value="buyer">BUYER</option>
                        <option value="seller">SELLER</option>
                    </select>
                </td>
            </tr>
            <tr><td><strong>Email Address</strong></td></tr>
            <tr>
                <td>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </td>
            </tr>
            <tr><td><strong>User Name</strong></td></tr>
            <tr>
                <td>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </td>
            </tr>
            <tr><td><strong>Password</strong></td></tr>
            <tr>
                <td>
                    <input type="password" id="password" name="password" placeholder="Enter your password" minlength="8" required>
                </td>
            </tr>
            <tr><td><strong>Confirm Password</strong></td></tr>
            <tr>
                <td>
                    <input type="password" id="c_password" name="c_password" placeholder="Re-enter your password" minlength="8" required>
                </td>
            </tr>
            <!-- Show Password Checkbox -->
            <tr>
                <td>
                    <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                    <input type="button" value="Go Back" onclick="history.back()">
                </td>
            </tr>
        </table>
    </form>

    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById("password");
            const confirmPasswordField = document.getElementById("c_password");
            
            if (passwordField.type === "password") {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }
    </script>
</body>
</html>
