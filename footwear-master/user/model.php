<?php

class Model 
{
        public $conn="";
        function __construct()
        {
            $this->conn=new mysqli('localhost','root','','register');
        }


      function insert($table,$data)
      {
        $col_array=array_keys($data);
        $key=implode(',',$col_array);

        $val_array=array_values($data);
        $val=implode("','",$val_array);

        $sql="INSERT INTO $table($key) values ('$val')";
       
        $run=$this->conn->query($sql);

      }

      function select($tbl)
      {
        $sel="select * from $tbl";	  // query
        $run=$this->conn->query($sel);  // query run by conn
        while($fetch=$run->fetch_object()) // fetch data from mysql
        {
          $arr[]=$fetch;
        }
        if(!empty($arr))
        {
          return $arr;
        }
      }

      function select_where ($table,$where)
      {
        $col_array=array_keys($where);
            $val_array=array_values($where);
                $sel=  "select * from $table where 1=1";

       $i=0;
       foreach($where as $w)
       {
           $sel .= " and $col_array[$i] = '$val_array[$i]'";
                 $i++;
       }
                     $run = $this->conn->query($sel);
                              return $run;

      }

      function select_where_multidata($tbl,$where)
      {
        $sel="select * from $tbl where 1=1";
        $col_arr=array_keys($where);	
        $val_arr=array_values($where);
        $i=0;
        foreach($where as $c)
        {
          $sel.=" and $col_arr[$i]='$val_arr[$i]'";
          $i++;
        }
        $run=$this->conn->query($sel);  // query run by conn
        while($fetch=$run->fetch_object()) // fetch data from mysql
        {
          $arr[]=$fetch;
        }
        if(!empty($arr))
        {
          return $arr;
        }
      }


      function select_join_where_multidata($tbl1,$tbl2,$on,$where)
      {
        $sel="select * from $tbl1 join $tbl2 on $on where 1=1";
        $col_arr=array_keys($where);	
        $val_arr=array_values($where);
        $i=0;
        foreach($where as $c)
        {
            $sel.=" and $col_arr[$i]='$val_arr[$i]'";
          $i++;
        }
        $run=$this->conn->query($sel);  // query run by conn
        while($fetch=$run->fetch_object()) // fetch data from mysql
        {
          $arr[]=$fetch;
        }
        if(!empty($arr))
        {
          return $arr;
        }
      }

      
    
       


}




        











?>