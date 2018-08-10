<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<title>Doodleblue Task</title>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doodleblue";

$dbcon= mysql_connect("$servername","$username","$password");
mysql_select_db("$dbname", $dbcon) or die(mysql_error());

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$link = mysqli_connect("localhost", "root", "", "doodleblue");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM employee";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>EmpId</th>";
                echo "<th>Name</th>";
                echo "<th>EmployeeId</th>";
                echo "<th>Designation</th>";
				echo "<th>Salary</th>";
				echo "<th>Date of Joining</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>Email Id</th>";
				echo "<th>Date Of Birth</th>";
				echo "<th>Blood Group</th>";
				echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['EmpId'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['EmployeeId'] . "</td>";
                echo "<td>" . $row['Designation'] . "</td>";
				echo "<td>" . $row['Salary'] . "</td>";
				echo "<td>" . $row['DateofJoining'] . "</td>";
				echo "<td>" . $row['MobileNumber'] . "</td>";
				echo "<td>" . $row['EmailId'] . "</td>";
				echo "<td>" . $row['DateOfBirth'] . "</td>";
				echo "<td>" . $row['BloodGroup'] . "</td>";
				echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo "THE INACTIVE EMPLOYEE IS DISPLAYED";
$sql = "SELECT * FROM employee WHERE EmpId = 'IFS405003'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>EmpId</th>";
                echo "<th>Name</th>";
                echo "<th>EmployeeId</th>";
                echo "<th>Designation</th>";
				echo "<th>Salary</th>";
				echo "<th>Date of Joining</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>Email Id</th>";
				echo "<th>Date Of Birth</th>";
				echo "<th>Blood Group</th>";
				echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['EmpId'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['EmployeeId'] . "</td>";
                echo "<td>" . $row['Designation'] . "</td>";
				echo "<td>" . $row['Salary'] . "</td>";
				echo "<td>" . $row['DateofJoining'] . "</td>";
				echo "<td>" . $row['MobileNumber'] . "</td>";
				echo "<td>" . $row['EmailId'] . "</td>";
				echo "<td>" . $row['DateOfBirth'] . "</td>";
				echo "<td>" . $row['BloodGroup'] . "</td>";
				echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
// Close connection
mysqli_close($link);




?>