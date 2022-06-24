<?php
//product_list
function get_products_by_category($category_id) {
    global $db;
    $query = "SELECT * FROM popusti
              WHERE popusti.category_id = '$category_id'
              ORDER BY discountID";
    $products = $db->query($query);
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM popusti
              WHERE discountID = '$product_id'";
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM popusti
              WHERE discountID = '$product_id'";
    $db->exec($query);
}

function add_product($discountID,$user_id,$name,$product,$category_id,$price, $discounted_price, $date_from, $date_end) {
    global $db;
    $query = "INSERT INTO popusti(discountID,user_id,name,product,category_id,price, discounted_price, date_from, date_end)
        VALUES ('$discountID','$user_id','$name','$product','$category_id','$price',' $discounted_price', '$date_from', '$date_end')";
    $db->exec($query);
}

//cart
function add_item($key,$name,$product,$price,$quantity) {
    global $products;
    if ($quantity < 1) return;

    if (isset($_SESSION['cart12'][$key])) {
        $quantity += $_SESSION['cart12'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    
    $total = (int)$price * $quantity;
    $item = array(
        'name' => $name,
        'product'=>$product,
        'cost' => $price,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['cart12'][$key] = $item;
  
}


function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cart12'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart12'][$key]);
        } else {
            $_SESSION['cart12'][$key]['qty'] = $quantity;
            $total = $_SESSION['cart12'][$key]['cost'] *
                     $_SESSION['cart12'][$key]['qty'];
            $_SESSION['cart12'][$key]['total'] = $total;
        }
    }
}

function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart12'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>




