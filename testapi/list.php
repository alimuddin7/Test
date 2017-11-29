<?php
require_once('connection.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM user_review WHERE id= '$id'");

} else {
    $query = mysqli_query($conn, "SELECT * FROM user_review ORDER BY id DESC");
}

$result = array();
while ($row = mysqli_fetch_array($query)) {
    array_push($result, array(
        'id' => $row['id'],
        'order_id' => $row['order_id'],
        'product_id' => $row['product_id'],
        'user_id' => $row['user_id'],
        'rating' => $row['rating'],
        'review' => $row['review'],
        'created_at' => $row['created_at'],
        'updated_at' => $row['updated_at']
    ));
}


echo json_encode(array(
    'result' => $result
));

mysqli_close($conn);

?>