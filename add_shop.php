<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
        <h2>Add Shop</h2>
        <form action="process_add_shop.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="shop_name">Shop Name</label>
                <input type="text" class="form-control" id="shop_name" name="shop_name" required>
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control-file" id="logo" name="logo" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Shop</button>
        </form>
    </div>