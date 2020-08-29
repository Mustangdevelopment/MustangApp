<?php
    $response=array();
    $connect=mysqli_connect("localhost","root","pwdpwd","mustang");
    if(isset($_REQUEST['pro_name']) && isset($_REQUEST['pro_price']) && isset($_REQUEST['pro_qty']) )
    {
        $name=$_REQUEST['pro_name'];
        $price=$_REQUEST['pro_price'];
        $qty=$_REQUEST['pro_qty'];
        $sql=mysqli_query($connect,"insert into Product(name,price,qty) values ('$name','$price','$qty')");
        if($sql)
        {
            $response['success']=1;
            $response['message']="success";
        }
        else
        {
            $response['success']=0;
            $response['message']="Error";
        }
        echo json_encode($response);
    }
?>