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

    <div class="product-list-content">
        <?php foreach ($stmt as $item):?>
            <div class="product" id="<?php echo $item['product_id']?>">
                <input type="checkbox" class="delete-checkbox">
                <div class="product-desc">
                    <div class="product-sku"><?php echo $item["sku"]?></div>
                    <div class="product-name"><?php echo $item["name"]?></div>
                    <div class="product-price"><?php echo $item["price"], " $" ?> </div>
                    <div class="product-desc"><?php echo "Size: 777" ?></div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="product" id="">
            <input type="checkbox" class="delete-checkbox">
            <div class="product-desc">
                <div class="product-sku">rame1</div>
                <div class="product-name">rame2</div>
                <div class="product-price">23123</div>
                <div class="product-desc">12312</div>
            </div>
        </div>

    </div>

    <div class="product-list-footer">
        <footer>
            Scandiweb Test assignment
        </footer>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>