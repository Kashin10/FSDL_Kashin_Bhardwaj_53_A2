<?php
include "db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];

    $sql = "INSERT INTO student(name,email,mobile,department)
            VALUES('$name','$email','$mobile','$department')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Portfolio</title>

<style>

body{
    font-family: Arial, sans-serif;
    margin:0;
    background:#dcdcdc;
}

/* Header */

header{
    background: linear-gradient(to right,#2c2f38,#1f2430);
    color:white;
    padding:30px;
}

header h1{
    margin:0;
}

header p{
    margin-top:5px;
}

/* Container */

.container{
    width:80%;
    margin:auto;
    padding:20px;
}

/* Form */

form{
    background:white;
    padding:20px;
    border-radius:5px;
    margin-bottom:30px;
}

input{
    padding:8px;
    margin:5px;
    width:200px;
}

button{
    padding:8px 15px;
    background:#007bff;
    color:white;
    border:none;
    cursor:pointer;
}

/* Table */

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

table th, table td{
    padding:10px;
    border:1px solid #ccc;
}

th{
    background:#007bff;
    color:white;
}

/* Buttons */

a{
    text-decoration:none;
    padding:5px 10px;
}

.edit{
    background:green;
    color:white;
}

.delete{
    background:red;
    color:white;
}

/* Footer */

footer{
    padding:20px;
}

</style>

</head>

<body>

<header>
<h1>Student Portfolio</h1>
<p>Kashin Bhardwaj</p>
</header>

<div class="container">

<h2>About Me</h2>
<p>I am a TY BTECH CSE STUDENT.</p>

<h2>Contact Me</h2>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>
<input type="email" name="email" placeholder="Enter Email" required>
<input type="text" name="mobile" placeholder="Enter Mobile" required>
<input type="text" name="department" placeholder="Department" required>

<br><br>

<button type="submit" name="submit">Submit</button>

</form>


<h2>Student Records</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Department</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM student");

while($row = $result->fetch_assoc()){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['department']; ?></td>

<td>
<a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

<footer>
<p>© 2026 Student Portfolio</p>
</footer>

</body>
</html>