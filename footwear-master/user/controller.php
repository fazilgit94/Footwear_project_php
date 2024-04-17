<?php
include "model.php";
class Controller extends Model
{


    function __construct()
    {
        session_start();
        Model::__construct();
        $url = $_SERVER['PATH_INFO'];

        $cate_arr = $this->select('category');
        // $subcate_arr = $this->select('subcategory');

        switch ($url) {

            case "/home":
                $where = array(
                    "c_id"
                );
                $subcate_arr = $this->select_where_multidata('subcategory', $where);
                $prd_arr = $this->select_where_multidata('product', $where);


                include "home.php";
                break;

            case "/login":

                if (isset($_REQUEST['log'])) {
                    $fname = $_REQUEST['uname'];
                    // $lname =  $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $where = array(
                        "name" => $fname,
                        // "email"=>$lname,
                        "password" => $pass

                    );

                    $res = $this->select_where('ecomm', $where);
                    $fetch = $res->fetch_object();

                    $u_id = $fetch->id;

                    $u_name = $fetch->name;
                    $u_pass = $fetch->password;

                    // if(isset($_REQUEST['remember']))
                    //         {
                    //             setcookie('name',$fname,time() + 10);
                    //             setcookie('password',$pass,time() + 10);

                    //         }

                    $_SESSION['u_id'] = $u_id;

                    $_SESSION['session_starts'] = $u_name;


                    if ($fname == $u_name && $pass == $u_pass) {
                        echo "<script>
                        alert('Welcome user.....!');
                        window.location='index';
                        
                        </script>";
                        header('location:home');
                    }
                }

                include "login.php";
                break;


            case "/logout":
                unset($_SESSION['u_id']);
                echo "<script>
                    alert('Logout success.....!');
                    window.location='home';
                    
                    </script>";

                break;


            case "/register":
                if (isset($_REQUEST['sbmt'])) {
                    $fname = $_REQUEST['uname'];
                    $lname = $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $where = array(

                        "email" => $lname

                    );

                    $res = $this->select_where('ecomm', $where);
                    $fetch = $res->fetch_object();
                    $u_email = $fetch->email;
                    if ($lname == $u_email) {
                        echo "<script>alert('email already exist...!')</script>";
                    } else {

                        $data = array(
                            "name" => $fname,
                            "email" => $lname,
                            "password" => $pass

                        );
                        if ($fname !== '' && $lname !== '') {
                            $res = $this->insert('ecomm', $data);
                            header('location:login');
                        }


                    }


                }


                include "register.php";
                break;

            case "/subcategory":

                if (isset($_REQUEST['btn_cate_id'])) {
                    $cate_id = $_REQUEST['btn_cate_id'];

                    $where = array(
                        "c_id" => $cate_id
                    );

                    $subcate_arr = $this->select_where_multidata('subcategory', $where);


                }
                break;

            case "/products":

                if (isset($_REQUEST['subbtn_cate_id'])) {
                    $subcate_id = $_REQUEST['subbtn_cate_id'];
                    $where = array(
                        "s_id" => $subcate_id
                    );
                    $prd_arr = $this->select_where_multidata('product', $where);
                }
                break;

            case "/single-product":
                $where = array(
                    "c_id"
                );
                $subcate_arr = $this->select_where_multidata('subcategory', $where);
                $prd_arr = $this->select_where_multidata('product', $where);

                if (isset($_REQUEST['prdId'])) {
                    $sngprd = $_REQUEST['prdId'];

                    $where = array(
                        "product_id" => $sngprd
                    );
                    $singleprd_arr = $this->select_where_multidata('product', $where);
                };
                
                include "single-product.php";

                break;

            case "/addcart":
                $where = array(
                    "c_id"
                );
                $subcate_arr = $this->select_where_multidata('subcategory', $where);

                $prd_arr = $this->select_where_multidata('product', $where);
                
                if (isset($_REQUEST['add']))
                {
                    $pid = $_REQUEST['pro_id'];
                    $qty = $_REQUEST['qty'];
                    $uId = $_SESSION['u_id'];

                    $data = array(
                        "uid" => $uId,
                        "Pid" => $pid,
                        "qut" => $qty

                    );
                    
                    $run = $this->insert("cart", $data);
                        $where=array(
                            "uid" => $uId      
                        );

                    $prd_arrs = $this->select_join_where_multidata("cart", "product", 'cart.Pid=product.product_id', $where);
                    


                };

                include "cart.php";
                break;

                case '/checkout';
               
                
                
                include_once('checkout.php');
                
                break;



        }











    }


}


$obj = new Controller();



?>