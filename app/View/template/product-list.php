<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/tools/reset.css">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/product-list.css">
    <title>Product List</title>
</head>
<body>
<div class="main-container">
    <div class="product-list-header">
        <h2>Product List</h2>
        <div class="product-list-header-buttons">
            <button id="product-add-btn" onclick="addProduct()">ADD</button>
            <button id="product-delete-btn" onclick="deleteProduct()">MASS DELETE</button>
        </div>
    </div>
<?php foreach ($stmt as $item):?>
    <div class="product-list-content">
            <div class="product" id="1">
                <input type="checkbox" class="delete-checkbox">
                <div class="product-desc">
                    <div class="product-sku"<?php echo "<pre>";
                    var_dump($_POST);
                    echo "</pre>";
                    exit;?></div>
                    <div class="product-name"><?php echo $item["name"]?></div>
                    <div class="product-price"><?php echo $item["price"]?></div>
                    <div class="product-desc"></div>
                </div>
            </div>
    </div>
<?php endforeach; ?>
    <div class="product-list-footer">
        <footer>
            Scandiweb Test assignment
        </footer>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>