<?php
require_once('message.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        $first_name = '';
        $last_name = '';
        $phone = '';
        $email = '';
        $address='';
        include 'checkout.php';
        break;
    case 'continue':
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $email = trim(filter_input(INPUT_POST, 'email'));
        $address= trim(filter_input(INPUT_POST, 'address'));

        $to_address = $email;
        $to_name = $first_name . ' ' . $last_name;
        $from_address = 'webappfeit@feit.com';
        $from_name = 'SM';
        $subject = 'SM - Order Success.';
        $body = '<p>Your order was received.</p>' .
                '<p>Thanks for purchasing from our site.</p>' .
                '<p>Sincerely,</p>' .
                '<p>SM</p>';
        $is_body_html = true;
        
        try {
            send_email($to_address, $to_name, 
                    $from_address, $from_name, 
                    $subject, $body, $is_body_html);
            include 'success.php';
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include 'checkout.php';
        }        
        break;
}
?>