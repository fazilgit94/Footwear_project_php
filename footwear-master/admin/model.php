<?php



class Model
{
    public $conn = "";
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'register');
    }

    function insert($table, $data)
    {
        $col_key = array_keys($data);
        $key = implode(",", $col_key);
        $col_value = array_values($data);
        $values = implode("','", $col_value);


        $sql = "INSERT INTO $table($key) values ('$values')";
        $run = $this->conn->query($sql);

        return $run;
    }

    function select_where($table, $where)
    {
        $sel = "select * from $table where 1=1 ";
        $i = 0;

        if (!empty($where)) {

            $col_array = array_keys($where);
            $val_array = array_values($where);

            foreach ($where as $w) {
                $sel .= " and $col_array[$i] = '$val_array[$i]'";
                $i++;
            }

        }
        $run = $this->conn->query($sel);
        return $run;

    }


    function select($tbl)
    {
        $sel = "select * from $tbl";
        $res = $this->conn->query($sel);
        while ($fetch = $res->fetch_object()) {
            $arr[] = $fetch;
            // print_r($arr);
        }

        if (!empty($arr)) {
            return $arr;
        }

    }

    function update($tbl, $datas, $where)
    {
        $update = "UPDATE $tbl SET ";
        $col_array = array_keys($datas);
        $value_array = array_values($datas);
        $count = count($datas);
        $i = 0;
        foreach ($datas as $dt) {
            if ($count == $i + 1) {
                $update .= "$col_array[$i]='$value_array[$i]'";

            } else {

                $update .= "$col_array[$i]='$value_array[$i]',";
                $i++;

            }
        }

        $update .= "where 1=1 ";

        $keys_array = array_keys($where);
        $value_array = array_values($where);
        $j = 0;
        foreach ($where as $w) {
            $update .= "and $keys_array[$j]='$value_array[$j]'";
            $j++;
        }
        $run = $this->conn->query($update);

        if (!empty($run)) {
            return $run;
        }
    }

    function delete($table, $where)
    {
        $col_array = array_keys($where);
        $col_value = array_values($where);
        $delete = "DELETE FROM $table WHERE 1=1 ";
        $i = 0;
        foreach ($where as $del) {
            $delete .= "and $col_array[$i]='$col_value[$i]';";
            $i++;

        }

        $run = $this->conn->query($delete);
        return ($run);



    }






}


















?>