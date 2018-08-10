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
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$Designation = 'Web Application Developer';
$stmt = $conn->prepare("DELETE FROM employee WHERE Designation =:Designation");
// bind param and data types
$stmt->bindParam("Designation", $Designation, PDO::PARAM_STR);
$Designation = 'Analyst';
echo"An employee from Analyst has been removed";
  $stmt->execute();
    echo "$Deleted";
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



?>