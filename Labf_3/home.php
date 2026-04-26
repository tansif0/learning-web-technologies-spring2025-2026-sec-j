<?php
session_start();

if(!isset($_SESSION['status'])){
    header("location: login.php");
}

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

if(isset($_POST['add'])){
    $_SESSION['products'][] = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
}

if(isset($_GET['del'])){
    $id = $_GET['del'];
    unset($_SESSION['products'][$id]);
    $_SESSION['products'] = array_values($_SESSION['products']);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $_SESSION['products'][$id] = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>

<a href="logout.php">Logout</a>

<hr>

<h3>Add Product</h3>
<form method="post">
    Name: <input name="name"><br><br>
    Price: <input name="price"><br><br>
    <button name="add">Add</button>
</form>

<hr>

<h3>Product List</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php
foreach($_SESSION['products'] as $id => $p){
    echo "<tr>
        <td>$id</td>
        <td>{$p['name']}</td>
        <td>{$p['price']}</td>
        <td>
            <a href='home.php?del=$id'>Delete</a>
        </td>
    </tr>";
}
?>

</table>

<hr>

<h3>Update Product</h3>

<form method="post">
    ID: <input name="id"><br><br>
    New Name: <input name="name"><br><br>
    New Price: <input name="price"><br><br>
    <button name="update">Update</button><br><br>
</form>

<a href="user_list.php">User List</a>

</body>
</html>