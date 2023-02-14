<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/tools/reset.css">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/add-product.css">
    <title>Product Add</title>
</head>
<body>
<div class="product-add-content">

    <div class="product-add-header">
        <h2>Product Add</h2>
        <div class="product-add-header-buttons">
            <button id="product-save-btn" onclick="saveProduct()">Save</button>
            <button id="product-cancel-btn" onclick="cancel()">Cancel</button>
        </div>
    </div>

    <div class="product-desc">
        <form action="" method="post" id="product-form" class="product-add-form">
            <div class="product-inputs">
                <label for="sku">
                    <span>
                       SKU
                    </span>
                    <input type="text" placeholder="#sku" id="sku">
                </label>
                <label for="name"> <span>Name</span>
                    <input type="text" placeholder="#name" id="name">
                </label>
                <label for="price">
                    <span>
                        Price ($)
                    </span>
                    <input type="text" placeholder="#price" id="price">
                </label>
            </div>

            <div class="type-switcher-container">
                <label class="type-switcher-label" for="type-switcher">Type Switcher</label>
                <select name="type-switcher" id="productType" onchange="typeSwitcher()">
                    <option value="" disabled selected >Select Type</option>
                    <option value="dvd">DVD</option>
                    <option value="furniture">Furniture</option>
                    <option value="book">Book</option>
                </select>
            </div>

            <div class="products">
                <div id="DVD" class="dvd-container">
                    <label for="dvdSize">Size (MB)</label>
                    <input type="number" placeholder="#size" id="size">
                    <h2>"Product Description"</h2>
                </div>
                <div id="furniture" class="furniture-container">
                    <label for="furnitureHeight">Height (CM)</label>
                    <input type="number" placeholder="#height" id="height">
                    <label for="furnitureWidth">Width (CM)</label>
                    <input type="number" placeholder="#width" id="width">
                    <label for="furnitureLength">length (CM)</label>
                    <input type="number" placeholder="#length" id="length">
                    <h2>"Product Description"</h2>
                </div>
                <div id="book" class="book-container">
                    <label for="bookWeight">Weight (KG)</label>
                    <input type="number" placeholder="#weight" id="weight">
                    <h2>"Product Description"</h2>
                </div>
            </div>

            <div class="saved-message">
                <h1>Product is saved!</h1>
            </div>

        </form>

    </div>

    <div class="product-add-footer">
        <footer>
            Scandiweb Test assignment
        </footer>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>