<?PHP

include("Connection.php");
if(isset($_POST['id']))
{
      $id=$_POST["id"];
      
      $query="DELETE FROM students WHERE id = '".$id."'";
     
      $data=mysqli_query($conn,$query);
 
    if($data)
      {
            echo "Successfully Deleted";
      }
    else
      {
            echo "Error Deleting";
      }

		exit;
	
	}		

?>



