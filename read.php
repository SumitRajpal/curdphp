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
    
	
      $query="SELECT * FROM students";
      $data=mysqli_query($conn,$query);
 
    if($data)
      {
            echo "Successfully Updated";
      }
    else
      {
            echo "Error Updating";
      }

		exit;
	}	
		

?>



