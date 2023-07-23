<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>
    <form method="POST" action="nn.php">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>
        
        <label for="skills">Skills:</label>
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="java" name="skills[]" value="Java">
        <label for="java">Java</label>
        <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
        <label for="mysql">MySQL</label>
        <input type="checkbox" id="python" name="skills[]" value="Python">
        <label for="python">Python</label><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
        </select><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>