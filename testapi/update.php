<?php
require_once('connection.php');

if (isset($_POST['id']) && isset($_POST['order_id']) && isset($_POST['product_id']) && isset($_POST['user_id'])
    && isset($_POST['rating']) && isset($_POST['review'])
) {
    $id = $_POST['id'];
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $now = date('Y-m-d H:i:s');

    if ($rating >= 1 && $rating <= 5) {
        $sql = "UPDATE user_review SET order_id = '$order_id', product_id='$product_id', 
       user_id='$user_id', rating='$rating', review = '$review', updated_at = '$now' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo json_encode(array('response' => 'success'));
        } else {
            echo json_encode(array('response' => 'failed'));
        }
    } else {
        echo json_encode(array('response' => 'rating min 1 max 5'));
    }
}
?>