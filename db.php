<?php 
function db_connect(){
    
    $con = new mysqli("localhost","root","","bca");
  return $con;

}
function delete_post($id){
    $con= db_connect();
    // if (isset($_GET["ID"])) {
        // $id = $_GET["ID"];
        $query= "delete from post where ID = $id";
        if($con->query($query) === TRUE) {
            echo "Deleted";
        } else {
            echo "Unable to Delete";
        }
    }
// }
?>