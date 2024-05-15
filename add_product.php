
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
        <h2>Add Product</h2>
        <form action="process_add_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="stock_left">Stock Left</label>
                <input type="number" class="form-control" id="stock_left" name="stock_left" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="min_order">Min Order</label>
                <input type="number" class="form-control" id="min_order" name="min_order" required>
            </div>
            <div class="form-group">
                <label for="max_order">Max Order</label>
                <input type="number" class="form-control" id="max_order" name="max_order" required>
            </div>
            <div class="form-group">
                <label for="allergy">Allergy Information</label>
                <input type="text" class="form-control" id="allergy" name="allergy" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>