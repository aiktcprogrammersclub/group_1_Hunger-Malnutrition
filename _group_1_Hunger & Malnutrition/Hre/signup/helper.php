<?php

class helper
{
 private $con;
 function __construct()
 {
  $this->con=new mysqli('localhost','root','','project');
 }
 
 function create($table,$fields)
 {
  $sql="create table $table($fields)";
  $this->con->query($sql) or die($this->con->error);
 }
 function insert($table,$values)
 {
  $sql="insert into $table values($values)";
  $this->con->query($sql) or die($this->con->error);
 }
 
 function select($fields,$table,$condition)
 {
   $sql="select $fields from $table where $condition";
   $result=$this->con->query($sql) or die($this->con->error);
   
   if($result->num_rows==0)
   return "no";
   else
   {
   while($row=$result->fetch_array())
   {
   $data[]=$row;
   }
   return $data;
   }
 }
 function _destruct()
 {
  $this->$con->close();
 }
 function update($field,$value,$condition)
 {
 $sql="update fifa set $field='$value' where shirt_no='$condition'";
 $this->con->query($sql) or die($this->con->error);
 echo "data altered";
 }
 }
 
 ?>
 
 
 
 
 
 
 