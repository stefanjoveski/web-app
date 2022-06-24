<?php
function get_categories() {
    global $db;
    $query = 'SELECT * 
              FROM categories 
              ORDER BY category_id';
    $result = $db->query($query);
    return $result;
}

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * 
              FROM categories 
              WHERE category_id = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['category'];
    return $category_name;
}
?>
