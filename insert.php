<?PHP

include("Connection.php");



if(isset($_POST['name']) && 
   isset($_POST['email'])&& 
   isset($_POST['id'])&& 
   isset($_POST['course']))
{
	  $name=$_POST["name"];
    $email=$_POST["email"];
    $course=$_POST["course"];
    $id=$_POST["id"];
    
	$result = mysqli_query($conn, "SELECT id FROM students WHERE id = '".$id."'");	
	if(mysqli_num_rows($result) > 0)
	{	
		echo "ID already exist";
		exit;
	}			
	else
	{	
      $query="INSERT INTO students(id,name,course,email)
                        VALUES('$id','$name','$course','$email')";
      $data=mysqli_query($conn,$query);
 
    if($data)
      {
            echo "Successfully Inserted";
      }
    else
      {
            echo "Error Inserting";
      }

		exit;
	}	
}				

?>



