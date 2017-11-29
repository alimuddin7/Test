<?php
require_once('connection.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM user_review WHERE id='$id'");

    if ($query) {
        echo json_encode(array('response' => 'success'));
    } else {
        echo json_encode(array('response' => 'failed'));
    }
}
?>