<?php
/** 
*  @author Olarinde Bukunmi
*  @email: Olarindebukunmi@gmail.com
*  @copyright copyright (c) 2022 Olarinde bukunmi
*  **kindly read the readme to this file
*/

/* include the file/paste your database connection details here
    include ""database_connection file;

*/


class Deleteduplicate{
  private $db;
  
  public function __construct($conn)
  {
      $this->db= $conn;
  }



// DELETE DUPLICATE IF CONSTRAINTS IS GREATER THAN 1
  public function deleteDulplicatevalues(){
      $sql="DELETE a FROM duplicate_table a INNER JOIN  duplicate_table b WHERE a.id < b.id AND a.firstname=b.firstname AND a.lastname=b.lastname";
      $stmt= $this->db->query($sql);
      if($stmt->execute()){
         return true;
       //  echo 'duplicate deleted succesfully';
      }else{
         return false;
       ///  echo 'duplicate cant be deleted';
      }
    }


  }

?>   