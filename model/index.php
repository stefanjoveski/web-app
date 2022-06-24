<?php

    $lifetime = 60 * 60 * 24 * 14;
    session_set_cookie_params($lifetime, '/');
    session_start();

    if (empty($_SESSION['cart12'])) { $_SESSION['cart12'] = array(); }

    $products = array();

    require('database.php');
    require('product_db.php');
    require('category_db.php');



    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'list_products';
    }
    if ($action == 'list_products') {
        
        $category_id = $_GET['category_id'];
        if (!isset($category_id)) {
            $category_id = 1;
        }

        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);

        include('../product_manager/product_list.php');
    }else if ($action == 'delete_product') {

        $product_id = $_POST['product_id'];
        $category_id = $_POST['category_id'];
        delete_product($product_id);

        header("Location: .?category_id=$category_id");

    } else if ($action == 'show_add_form') {
        $categories = get_categories();
        include('../product_manager/product_add.php');
        } else if ($action == 'add_product') {
            $discountID=$_POST['discountID'];
            $user_id=$_POST['user_id'];
            $name=$_POST['name'];
            $product=$_POST['product'];
            $category_id=$_POST['category_id'];
            $price=$_POST['price'];
            $discounted_price=$_POST['discounted_price'];
            $date_from=$_POST['date_from'];
            $date_end=$_POST['date_end'];
        
        
            if (empty($discountID)|| $user_id==null || empty($product)|| empty($name) || empty($category_id)|| empty($price)||empty($discounted_price)||empty($date_from)||empty($date_end)) {
                $error = "Invalid product data. 
                        Check all fields and try again.";
                echo $error;
            } else {
                add_product($discountID,$user_id,$name,$product,$category_id,$price, $discounted_price, $date_from, $date_end);
                header("Location: ../product_manager/product_add.php");
            }
        }else if ($action == 'add_to_cart'){
            $product_key = filter_input(INPUT_POST, 'product_id');
            $name= filter_input(INPUT_POST, 'name');
            $product= filter_input(INPUT_POST, 'product');
            $price=filter_input(INPUT_POST, 'discounted_price');
            $item_qty = filter_input(INPUT_POST, 'itemqty');
            add_item($product_key, $name,$product,$price,$item_qty);
            include('cart_view.php');   


        }else if ($action == 'update'){
            $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart12'][$key]['qty'] != $qty) {
            update_item($key, $qty);
            }
            }
            include('cart_view.php');
            

        }  else if ($action == 'show_cart'){
            
            include('cart_view.php');

        }  else if ($action == 'empty_cart'){
            
            unset($_SESSION['cart12']);
        include('cart_view.php');
            

        } 
    
   
?>
    


