<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/tools/reset.css">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/product-list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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

        <?php




        ?>

        <?php foreach ($product as $itemProduct):?>

            <div class="product" id="">
                <input type="checkbox" class="delete-checkbox">
                <div class="product-desc">
                    <div class="product-sku"><?php echo $itemProduct["sku"]?></div>
                    <div class="product-name"><?php echo $itemProduct["name"]?></div>
                    <div class="product-price"><?php echo $itemProduct["price"], " $" ?> </div>
                    <?php if ($itemProduct["type_id"] === 1):  ?>
                        <div class="product-desc"><?php echo "Size: ", $itemProduct["size"], " MB"?></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach;?>






<!--        --><?php //foreach ($product as $itemProduct):?>
<!--            <div class="product" id="--><?php //echo $itemProduct['product_id']?><!--">-->
<!--                <input type="checkbox" class="delete-checkbox">-->
<!--                <div class="product-desc">-->
<!--                    <div class="product-sku">--><?php //echo $itemProduct["sku"]?><!--</div>-->
<!--                    <div class="product-name">--><?php //echo $itemProduct["name"]?><!--</div>-->
<!--                    <div class="product-price">--><?php //echo $itemProduct["price"], " $" ?><!-- </div>-->
<!--                    <div class="product-desc">--><?php //echo "Size: " ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endforeach;?>

</div>
    <div class="product-list-footer">
        <footer>
            Scandiweb Test assignment
        </footer>
    </div>
<script src="assets/js/main.js"></script>
</body>
</html>