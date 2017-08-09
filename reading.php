<?PHP
include_once("Connection.php");
$query = "select * from students";
$result = mysqli_query($conn, $query);
while(($row = mysqli_fetch_assoc($result)) == true){

	$data[]=$row;
	 echo "<html><body><table border='2' cellpadding='2' >
	     <tr><th>ID</th><th>Name</th><th>Email</th><td>Course</th></tr>
	     <tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['course']."</td></tr>
	     </table></body></html>";

}

//echo json_encode($data);

?>