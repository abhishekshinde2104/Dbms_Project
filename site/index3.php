<?php
    $server="localhost";
    $username="root";
    $password="1234";
    $database="falahaar";
    $con = mysqli_connect($server,$username,$password,$database);
    if(!$con)
    {
      die("Connection failed due to".mysqli_connect_error());
    }
    echo("successful");

    $result = mysqli_query($con,"SELECT * FROM menu");

echo "
<table class="table table-striped table-dark" border='1'>
<tr>
<th>Item ID</th>
<th>Item Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['item'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
 ?>
