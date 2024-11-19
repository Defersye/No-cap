<?
session_start();
$product_id = $_POST['product_id'];

$conn = mysqli_connect('localhost', 'root', '', 'no-cap-russian');


$id_user = $_SESSION['user']['id'];
$query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $id_user AND product_id = $product_id");
if ($query->num_rows) {
   $query = mysqli_query($conn, "UPDATE cart SET quantity = quantity + 1 WHERE user_id = $id_user AND product_id = $product_id");
} else {
   $query = mysqli_query($conn, "INSERT INTO cart (user_id, product_id, quantity) VALUES ($id_user, $product_id, 1)");
}
header('Location: cart.php');
