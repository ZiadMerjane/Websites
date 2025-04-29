<?php
include 'db_config.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Products | Merjaninox</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header>
    <h1>Our Products</h1>
    <nav>
      <ul class="nav-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="product-grid">
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="product-card">
        <img src="assets/img/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" />
        <h3><?= $row['name'] ?></h3>
        <p><?= $row['description'] ?></p>
        <p><strong>&euro;<?= $row['price'] ?></strong></p>
        <form method="post" action="cart.php">
          <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    <?php endwhile; ?>
  </section>

  <footer>
    <p>&copy; 2025 Merjaninox</p>
  </footer>
</body>
</html>