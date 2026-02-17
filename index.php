<div class="product-details">
    <div class="main-image-container">
        <img id="main-view" src="images/p1.jpg" onclick="toggleZoom(this)" alt="plugbox product">
    </div>
    <div class="thumbnails">
        <img src="images/thumb1.jpg" onclick="changeImage(this.src)">
        <img src="images/thumb2.jpg" onclick="changeImage(this.src)">
    </div>
    
    <div class="order-form">
        <h3>place your order</h3>
        <form action="process.php" method="POST" onsubmit="return confirmOrder()">
            <input type="text" name="name" placeholder="your name" required>
            <input type="text" name="phone" placeholder="phone number" required>
            <textarea name="address" placeholder="delivery address"></textarea>
            <button type="submit" class="btn">buy now</button>
        </form>
    </div>
</div>