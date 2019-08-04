<?php
include "Connection.php";
class myaction extends myconnection
{
    public function insert_record($table,$fields)
    {
        $sql = "";
        $sql .= "insert  into " . $table;
        $sql .= "(" . implode(",", array_keys($fields)) . ") values ";
        $sql .= "('" . implode("','", array_values($fields)) . "')";
        //echo $sql;
        $query=mysqli_query($this->con , $sql);
        if($query){
            return true;
        }
        else
        {
            echo "somthing problem";
        }
    }
    public function fetch_record($table)
    {
        $sql="select * from " . $table;
        $array=array();
        $query=mysqli_query($this->con , $sql);
        while($row=mysqli_fetch_assoc($query))
        {
            $array[]=$row;
        }
        return $array;
    }
    public function select_record($table, $where)
    {
        $sql="";
        $condition="";
        foreach($where as $key => $value)
        {
            $condition .= $key ."='" . $value ."' and ";
        }
        $condition = substr($condition,0,-5);
        $sql="select * from " .$table . " where " . $condition;
        $query=mysqli_query($this->con , $sql);
        $row=mysqli_fetch_array($query);
        return $row;
    }
    public function update_record($table, $where, $fields)
    {
        $sql="";
        $condition="";
        foreach($where as $key => $value)
        {
            $condition .= $key ."='" . $value ."' and ";
        }
        $condition = substr($condition,0,-5);
        foreach($fields as $key => $value)
        {
            $sql .= $key . "='" .$value . "', ";
        }
        $sql=substr($sql, 0, -2);
        $sql = " update " .$table . " set " .$sql . " where " . $condition ;
        if(mysqli_query($this->con , $sql))
        {
            return true;
        }
    }
    public function delete_record($table, $where)
    {
        $sql="";
        $condition="";
        foreach($where as $key => $value)
        {
            $condition .= $key ."='" . $value ."' and ";
        }
        $condition = substr($condition,0,-5);
        $sql= "delete from " .$table . " where " . $condition;
        if(mysqli_query($this->con , $sql))
        {
            return true;
        }
    }
}

$obj= new myaction;

if(isset($_POST['add']))
{
        $image=$_FILES['image'];
        $img_name='Stu_'.$image['name'];
        $img_size=$image['size'];
        $img_type=$image['type'];
        move_uploaded_file($image['tmp_name'],"Images/".$img_name);

    $myArray= array(
        "name" => $_POST["stu_name"],
        "email" => $_POST["stu_mail"],
        "course" => $_POST["stu_course"],
        "branch" => $_POST["stu_branch"],
        "photo" => $img_name,
        "password" => $_POST["stu_pass"],
    );
    //$obj->insert_record("student",$myArray);
    if($obj->insert_record("student",$myArray))
    {
        header("location:index.php?msg=Record Inserted");
    }
}
if(isset($_POST["Update"]))
{
        $image=$_FILES['img'];
        $img_name='Stu_'.$image['name'];
        $img_size=$image['size'];
        $img_type=$image['type'];
        move_uploaded_file($image['tmp_name'],"Images/".$img_name);

    $Stu_id=$_POST["stu_id"];
    $where=array("Stu_id"=>$Stu_id);

    $myArray= array(
        "name" => $_POST["stu_n"],
        "email" => $_POST["stu_m"],
        "course" => $_POST["stu_c"],
        "branch" => $_POST["stu_b"],
        "photo" => $img_name,
    );
   // $obj->update_record("student", $where, $myArray);
    if($obj->update_record("student", $where, $myArray))
    {
        header("location:index.php?msg=Record Updated");
    }
}
if(isset($_GET["Delete"]))
{
    $Stu_id=$_GET["Stu_id"] ?? null ;
    $where=array("Stu_id"=>$Stu_id);
    if($obj->delete_record("student", $where))
    {
        header("location:index.php?msg=Record Deleted");
    }
}

?>