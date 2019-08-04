<?php
class myconnection
{
    // public $dbserver="localhost";
    // public $dbuser="root";
    // public $dbpassword="";
    // public $dbname="nigella";
    public $con;
    public function __construct()
    {
        //$this->con= mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);
        $this->con= mysqli_connect("localhost","root","","nigella");
        // if($this->con){
        // //print_r ($this->con);
        // echo "connected";
        // }
        // else
        // echo "not connected";
    }
}



//$obj = new myconnection();




?>