<?php
function conectionStart()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$connection = mysqli_connect($servername, $username, $password,$dbname);
return $connection;
}
function conectionEnd($value)
{
mysqli_close($value);
}
function fetch($value=' ')
{
$connection = conectionStart();
$sql = "SELECT * FROM contact WHERE name LIKE '%".$value."%' OR
email LIKE '%".$value."%' OR comment LIKE '%".$value."% '";
$result = mysqli_query($connection, $sql);
if($result) {

echo "<table border=1>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>email</th>";
echo "</tr>";
while ($row = mysqlI_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']." </td>";
echo "<td>".$row['email']."</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "Error :".$sql."<br>".mysqli_error($connection);
}
conectionEnd($connection);
}
if (isset($_GET['search'])) {
fetch($_GET['search']);
}

?>
