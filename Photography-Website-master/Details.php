<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: blue;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: black;
color: white;
}
tr {background-color: grey}
</style>
</head>
<body>
<table>
<tr>
<th>name</th>
<th>email</th>
<th>service</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "photography");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email, service FROM contact_us";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["service"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>