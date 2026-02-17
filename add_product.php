<form action="save_product.php" method="POST" enctype="multipart/form-data" style="text-transform: lowercase;">
    <h3>add new item to plugbox</h3>
    <input type="text" name="item_code" placeholder="item code (e.g. a01)" required><br><br>
    <input type="text" name="name" placeholder="product name" required><br><br>
    <select name="is_bestseller">
        <option value="0">normal item</option>
        <option value="1">best seller (homepage large)</option>
    </select><br><br>
    <input type="file" name="main_image" required><br><br>
    <button type="submit" style="background: #f37021; color: white;">upload to plugbox</button>
</form>