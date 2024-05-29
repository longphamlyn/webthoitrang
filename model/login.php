<?php
function check_user($name, $pass)
{
      $sql = "select * from tai_khoan where user_name='".$name."' AND pass='".$pass."'";
      $result = pdo_query_one($sql);
      return $result; 
}