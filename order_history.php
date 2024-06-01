<?php
include_once './database/db.php';

session_start();

$orderHistory = [];

if (isset($_GET['id'])) {
    $user_id = $connection->real_escape_string($_GET['id']);

    $orderQuery = "SELECT * FROM `order` WHERE userId = $user_id";
    $orderResult = $connection->query($orderQuery);

    if ($orderResult === false) {
        die("SQL Error: " . $connection->error);
    }

    if ($orderResult->num_rows > 0) {
        while ($order = $orderResult->fetch_assoc()) {
            $order_id = $order['id'];

            $orderDetailQuery = "SELECT * FROM orderdetail WHERE orderId = $order_id";
            $orderDetailResult = $connection->query($orderDetailQuery);

            if ($orderDetailResult === false) {
                die("SQL Error: " . $connection->error);
            }

            if ($orderDetailResult->num_rows > 0) {
                while ($orderDetail = $orderDetailResult->fetch_assoc()) {
                    $product_id = $orderDetail['productId'];
                    
                    // Fetch product details
                    $productQuery = "SELECT * FROM products WHERE id = $product_id";
                    $productResult = $connection->query($productQuery);

                    // Check for errors in the SQL query
                    if ($productResult === false) {
                        die("SQL Error: " . $connection->error);
                    }

                    if ($productResult->num_rows > 0) {
                        $product = $productResult->fetch_assoc();

                        // Build order history array
                        $orderHistory[] = [
                            'order_id' => $order_id,
                            'product_image' => $product['image'],
                            'product_name' => $product['name'],
                            'quantity' => $orderDetail['orderedQuantity'],
                            'price' => $orderDetail['price'],
                            'date' => $order['date']
                        ];
                    }
                }
            }
        }
    }
} else {
    die("User ID is missing.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Centered Container Example</title>
    <head>
      <title>Lumina</title>
      <meta charset="utf-8" />
      <meta name="author" content="Alice Guo" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/test.css">
      <link rel="stylesheet" href="./css/orderhistory.css" />
      <link rel="icon" type="image/x-icon" href="./img/Logo.png" />
      <link
        href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
      />
      <script
        type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      ></script>
      <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
      ></script>

    </head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
        <div class="orderContainer">
            <div class="page-header">
                <h1>Order History</h1>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item(s)</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($orderHistory)): ?>
                            <?php foreach ($orderHistory as $order): ?>
                                <tr>
                                    <td><?php echo $order['order_id']; ?></td>
                                    <td class="items">
                                        <div class="item">
                                            <img src="./img/Products/<?php echo $order['product_image']; ?>" alt="<?php echo $order['product_name']; ?>" class="product-image">
                                            <span><?php echo $order['product_name']; ?></span>
                                        </div>
                                    </td>
                                    <td><?php echo $order['quantity']; ?></td>
                                    <td>$<?php echo $order['price']; ?></td>
                                    <td><?php echo $order['date']; ?></td>
                                </tr>
                                <tr class="special-separator">
                                    <td colspan="5"></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No order history found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    </main>
    <div class="content_wrap"></div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.querySelector("table tbody");
            const rows = Array.from(table.rows);
    
            rows.sort((a, b) => {
                const dateA = new Date(a.cells[4].innerText);
                const dateB = new Date(b.cells[4].innerText);
                return dateB - dateA;
            });
    
            rows.forEach(row => table.appendChild(row));
        });
    </script>
</body>
</html>