<div style="font-family: sans-serif; text-transform: lowercase;">
    <h2 style="color: #43814d;">plugbox - order management</h2>
    <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">
        <tr style="background: #f37021; color: white;">
            <th>id</th>
            <th>customer</th>
            <th>product id</th>
            <th>status</th>
            <th>action</th>
        </tr>
        <?php
        include 'db_config.php';
        $orders = mysqli_query($conn, "SELECT * FROM orders");
        while($row = mysqli_fetch_assoc($orders)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['customer_name']}</td>
                    <td>{$row['product_id']}</td>
                    <td><strong>{$row['status']}</strong></td>
                    <td><a href='update.php?id={$row['id']}&type=order'>mark delivered</a></td>
                  </tr>";
        }
        ?>
    </table>
</div>