<?php
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="gym";
	$conn = mysqli_connect($serverName,$userName,$password,$dbName);
	if(!$conn){
		echo ("Error connection: ".mysqli_connect_error());
	}
	/*function execute($sql)
	{
		global $serverName;
		global $userName;
		global $password;
		global $dbName;
		$conn = mysqli_connect($username,$password,$serverName,$dbName);
		mysqli_query($conn, $sql);
		mysqli_close($conn);
	}*/
	
	/*function get($sql)
	{   
        $data=array();//numeric array
		global $serverName,$userName,$password,$dbName;
		$conn = mysqli_connect( $serverName, $userName, $password, $dbName);
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $entity=array();//associative array
                foreach($row as $k=>$v)           
                {
                    $entity[$k] = $row[$k];    
                }
                $data[] = $entity;																
            }
        }
        
        mysqli_close($conn);
        
		return $data;
	}*/
?>