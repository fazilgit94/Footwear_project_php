<?php

include "model.php";

class Controller extends Model
{
       
    function __construct()
    {   session_start();
        Model::__construct();
        $url = $_SERVER['PATH_INFO'];

        switch ($url) {

            case "/home":
                include "index.php";
                break;

            case "/signup":
                if (isset($_REQUEST['sup'])) {
                    $fname = $_REQUEST['uname'];
                    $lname = $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $data = array(
                        "username" => $fname,
                        "email" => $lname,
                        "password" => $pass

                    );

                    if ($fname !== '' && $lname !== '') {
                        $res = $this->insert('admin', $data);
                        header('location:signin');
                    }

                }

                include "signup.php";
                break;


            case "/signin":
                
                if (isset($_REQUEST['sin'])) {
                    $email = $_REQUEST['email'];
                    // $lname =  $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $where = array(
                        "email" => $email,
                        // "email"=>$lname,
                        "password" => $pass

                    );

                    $res = $this->select_where('admin', $where);
                    $fetch = $res->fetch_object();

                    $u_email = $fetch->email;
                    $u_pass = $fetch->password;
                    $u_name = $fetch->username;
                    
                    // if(isset($u_email) || $u_email == null){
                    //     $u_name = $fetch->username;
                    // };



                    $_SESSION['session_starts'] = $u_email;
                    setcookie('username',$u_name,time() + (86400 * 30));
                    print_r($_COOKIE['username']);
                    
                    // $session=$_SESSION['sesiion_name'] = $name;



                    if ($email == $u_email && $pass == $u_pass) {
                        echo "<script>
                        alert('Welcome user.....!');
                        window.location='home';
                        
                        </script>";
                        header('location:home');
                    }
                }
                include "signin.php";
                break;

            case "/table":
                $user_arr = $this->select("admin");
                // print_r($user_arr);
                include "users_table.php";
                break;

            case "/updatetable":

                if (isset($_REQUEST['edit'])) {
                    $id = $_REQUEST['edit'];

                    $where = array('id' => $id);
                    $res = $this->select_where("admin", $where);

                    $f = $res->fetch_object();
                   
                    if (isset($_REQUEST['editx'])) {

                        $where = array(
                            "id" => $id
                        );

                        $name = $_REQUEST['uname'];
                        $mail = $_REQUEST['email'];
                        $password = $_REQUEST['pass'];
                        $data = array(
                            'username' => $name,
                            'email' => $mail,
                            'password' => $password,

                        );
                        $x = $this->update('admin', $data, $where);

                        if ($x) {
                            echo "<script>
                                                        alert('sfsd');
                                                        </script>";
                            header('location:table');


                        }
                    }


                }


                include "editpage.php";
                break;


            case "/delete":
                if (isset($_REQUEST['delete_data'])) {

                    $id = $_REQUEST['delete_data'];
                    echo $id;

                    $where = array('id' => $id);
                    $del = $this->delete('admin', $where);
                    if ($del) {
                        echo "<script>
                            alert('sfsd');
                             </script>";
                        header('location:table');
                    }
                }

                break;


            case "/category":
                if (isset($_REQUEST['sub']))
                {
                    $category= $_REQUEST['cat'];
                   $data = array(
                     "category_name"=>$category
                   );
                $res = $this->insert('category', $data);

                }

             


                include "category.php";
                break;

                case "/subcategory":
                    

                    if (isset($_REQUEST['sub']))
                    {
                        $subcategory= $_REQUEST['cat'];
                        $subcategory= $_REQUEST['subcat'];

                        
                       $data = array(
                         "subcategory_name"=>$subcategory
                       );
                       
                    $res = $this->insert('subcategory', $data);
                    
    
                    }
    
                    $fetch_ = $this->select_where('category',"");
                    include "subcategory.php";
                    break;


                    case "/products":
                    

                        if (isset($_REQUEST['sub']))
                        {
                            $products= $_REQUEST['cat'];
                           $data = array(
                             "product_name"=>$products
                           );
                        $res = $this->insert('subcategory', $data);
                        
        
                        }
        
                        $fetch_ = $this->select_where('category',"");
                        // $fetch_ = $this->select_where('subcategory',"");

                        include "products.php";
                        break;

                     case "/forgot-pass":   
                        include "forgotpassword.php";
                        break;





        }






    }



}




$obj = new Controller();































?>