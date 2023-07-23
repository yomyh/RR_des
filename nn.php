<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $POST['lastname'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];

// Server-side validation
$errors = [];

if (empty($firstname)) {
    $errors[] = "First name is required";
}

if (empty($lastname)) {
    $errors[] = "Last name is required";
}

if (empty($address)) {
    $errors[] = "Address is required";
}

if (empty($country)) {
    $errors[] = "Country is required";
}

if (empty($gender)) {
    $errors[] = "Gender is required";
}

// Add more validation rules as needed

// If there are no errors, save the data to the file
if (empty($errors)) {
    $data = $firstname . ',' . $lastname . ',' . $address . ',' . $country . ',' . $gender . ',' . implode(',', $skills) . ',' . $username . ',' . $password . ',' . $department . "\n";
    file_put_contents('customer.txt', $data, FILE_APPEND);
}

// Retrieve all records from the file
$records = [];
$fileContent = file_get_contents('customer.txt');
if ($fileContent) {
    $lines = explode("\n", $fileContent);
    foreach ($lines as $line) {
        $record = explode(',', $line);
        $records[] = $record;
    }
}

// Display the records in a table
if (!empty($records)) {
    echo '<table>';
    echo '<tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Country</th><th>Gender</th><th>Skills</th><th>Username</th><th>Password</th><th>Department</th><th>Action</th></tr>';
    foreach ($records as $index => $record) {
        echo '<tr>';
        echo '<td>' . $record[0] . '</td>';
        echo '<td>' . $record[1] . '</td>';
        echo '<td>' . $record[2] . '</td>';
        echo '<td>' . $record[3] . '</td>';
        echo '<td>' . $record[4] . '</td>';
        echo '<td>' . $record[5] . '</td>';
        echo '<td>' . $record[6] . '</td>';
        echo '<td>' . $record[7] . '</td>';
        echo '<td>' . $record[8] . '</td>';
        echo '<td><button onclick="deleteRecord(' . $index . ')">Delete</button></td>';
        echo '<td><button onclick="editRecord(' . $index . ')">Edit</button></td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Delete a record from the file
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($records[$index])) {
        unset($records[$index]);
        $data = '';
        foreach ($records as $record) {
            $data .= implode(',', $record) . "\n";
        }
        file_put_contents('customer.txt', $data);
    }
}

// Edit a record
if (isset($_GET['edit'])) {
    $index = $_GET['edit'];
    if (isset($records[$index])) {
        $record = $records[$index];
        $firstname = $record[0];
        $lastname = $record[1];
        $address = $record[2];
        $country = $record[3];
        $gender = $record[4];
        $skills = explode(',', $record[5]);
        $username = $record[6];
        $password = $record[7];
        $department = $record[8];
    }
}
?>
?>