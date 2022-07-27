<?php
    require "engien/api.php";
    $result = mysqli_query($db, 'select * from products');

    if(isset($_GET['addProducts']) & isset($_GET['addPrice'])) {
        $newProduct = $_GET['addProducts'];
        $newPrice = $_GET['addPrice'];
        mysqli_query($db, 'insert into products (name, price) values (' . "'" . $newProduct. "'" . ',' . $newPrice . ');');
        header('Location: index.php?page=products');
        die();
    }

   

    while($data = mysqli_fetch_assoc($result)): 
?>
<p><?=$data['name']?> - <?=$data['price']?></p>
<?php endwhile; ?>
<form>
    <input type="text" name="addProducts" id="">
    <input type="text" name="addPrice" id="">
    <button type="submit">send</button>
</form>

