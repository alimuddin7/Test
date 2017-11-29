<?php
require_once('connection.php');
if (isset($_POST['order_id']) && isset($_POST['product_id']) && isset($_POST['user_id'])
    && isset($_POST['rating']) && isset($_POST['review'])
) {
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $now = date('Y-m-d H:i:s');

    if ($rating >= 1 && $rating <= 5) {

        $query = mysqli_query($conn, "INSERT INTO user_review (order_id, product_id, user_id, rating, review, created_at) 
     VALUES ('$order_id', '$product_id', '$user_id', '$rating', '$review', '$now')");

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