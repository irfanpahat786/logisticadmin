<?php
session_start();
function GetConnection()
{
  $con=  mysql_connect("localhost","maxsamsh_online ","_work1234!@#$") 
          or die(" Not Connect".  mysql_error());
  mysql_select_db("maxsamsh_shop",$con)or die(" Not Select db". 
          mysql_error());
  return $con;
}
function Tablecreator()
{
    $con=  GetConnection();
    $q="create table newuser (id int primary key auto_increment,name varchar(300),mailid varchar(300),password varchar(50))";
    mysql_query($q,$con) or die(" Not Execute".
            mysql_error());
    mysql_close($con);
}
//Tablecreator();
function ExecuteQuery($q)
{
    $con=  GetConnection();
  $re=  mysql_query($q,$con) or die(" Not Execute".  mysql_error());
    mysql_close($con);
    return $re;
}
function ExecuteQueryResule($q)
{
    $con=  GetConnection();
   $res=mysql_query($q,$con) or die(" Not Execute".  mysql_error());
   $rar=[];
   while(($ar=  mysql_fetch_array($res))!=FALSE)
   {
      // echo "<br>fetch..";
      // print_r($ar);
       $rar[]=$ar;
   }
    mysql_close($con);
     //echo "<br>af while..";
     //  print_r($rar);
    return $rar;
}

function SendMail1($to,$sub,$mess,$from)
{
   if(mail($to, $sub, $mess, "from:".$from))
   {
       echo "Maile Send....";
   }
 else {
       echo "Maile Not Send....";
   }
}
