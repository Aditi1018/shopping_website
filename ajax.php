<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
$link= mysqli_connect('localhost','root','','categories');


extract($_REQUEST);


if(isset($val))
{


	$str="<datalist id='mylistid'>";


    $link=mysqli_connect("localhost","root", "","categories");
    $qry="select * from pdt_master where pdt_name like '%$val%' or pdt_dsc like '%$val%' or cat_name like '%$val%'";
    $resultset=mysqli_query($link,$qry);
    
    while($r=mysqli_fetch_array($resultset))
    {
        $str.='<option>'.$r[1].' in '.$r[6].'</option>';
			
    }
	


	$str.='</datalist>';


	echo $str;

}

?>