<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doodleblue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>EmpId</th><th>Name</th><th>EmployeeId</th><th>Designation</th><th>Salary</th><th>Date of Joining</th><th>Mobile Number</th><th>Email Id</th><th>Date Of Birth</th><th>Blood Group</th></tr>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT EmpId,Name,EmployeeId,Designation,Salary,DateofJoining,MobileNumber,EmailId,DateOfBirth,BloodGroup FROM employee");
    $stmt->execute();
    echo "New records created successfully";
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
 echo "</table>";

  
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>EmpId</th><th>Name</th><th>EmployeeId</th><th>Designation</th><th>Salary</th><th>Date of Joining</th><th>Mobile Number</th><th>Email Id</th><th>Date Of Birth</th><th>Blood Group</th></tr>";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("INSERT INTO employee VALUES (:EmpId,:Name,:EmployeeId,:Designation,:Salary,:DateofJoining,:MobileNumber,:EmailId,:DateOfBirth,:BloodGroup)");

$EmpId = 'DBI405004';
$Name = 'Praveen';
$EmployeeId = '170594';
$Designation = 'iOS Developer';
$Salary = '2,00,000';
$DateofJoining = '10-09-5018';
$MobileNumber = '9788365721';
$EmailId = 'praveenraj17@gmail.com';
$DateOfBirth = '17-05-1994';
$BloodGroup = 'B+';
 try {
	 
	 $stmt->bindValue(':EmpId', $EmpId);
	 $stmt->bindValue(':Name', $Name);
	 $stmt->bindValue(':EmployeeId', $EmployeeId);
	 $stmt->bindValue(':Designation', $Designation);
	 $stmt->bindValue(':Salary', $Salary);
	$stmt->bindValue(':DateofJoining', $DateofJoining);
	$stmt->bindValue(':MobileNumber', $MobileNumber);
	$stmt->bindValue(':EmailId', $EmailId);
	$stmt->bindValue(':DateOfBirth', $DateOfBirth);
	$stmt->bindValue(':BloodGroup', $BloodGroup);
$stmt->execute();

    echo "$Inserted";
	echo"An employee for iOS Developer has been created";
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
 echo $v;
 }
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    $conn = null;
  echo "</table>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>EmpId</th><th>Name</th><th>EmployeeId</th><th>Designation</th><th>Salary</th><th>Date of Joining</th><th>Mobile Number</th><th>Email Id</th><th>Date Of Birth</th><th>Blood Group</th></tr>";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("INSERT INTO employee VALUES (:EmpId,:Name,:EmployeeId,:Designation,:Salary,:DateofJoining,:MobileNumber,:EmailId,:DateOfBirth,:BloodGroup)");

 try {

		 $stmt->bindParam(':EmpId', $EmpId);
	 $stmt->bindParam(':Name', $Name);
	 $stmt->bindParam(':EmployeeId', $EmployeeId);
	 $stmt->bindParam(':Designation', $Designation);
	 $stmt->bindParam(':sex', $sex);
	 $stmt->bindParam(':Salary', $Salary);
	$stmt->bindParam(':DateofJoining', $DateofJoining);
	$stmt->bindParam(':MobileNumber', $MobileNumber);
	$stmt->bindParam(':DateOfBirth', $DateOfBirth);
	$stmt->bindParam(':BloodGroup', $BloodGroup);

$EmpId = 'DBI405016';
$Name = 'Cyril Joesph Daniel';
$EmployeeId = '270694';
$Designation = 'Human Resource Executive';
$Salary = '2,00,000';
$DateofJoining = '01-08-2018';
$MobileNumber = '8056911889';
$EmailId = 'cjdaniel1994@gmail.com';
$DateOfBirth = '27-06-1994';
$BloodGroup = 'O+';
//$stmt->execute();

    echo "$Inserted";
 // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
 // echo $v;
 // }
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    $conn = null;
  echo "</table>";

 ?>
 </body>
 </html>