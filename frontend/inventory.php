<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vendor Inventory</title>
  <link rel="stylesheet" href="css/inventory.css">
</head>
<body>

<div class="container">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>

    <nav>
      <a href="vendor.php" style="text-decoration: none;" >📊 Dashboard</a>
      <a>➕ Add a New Product</a>
      <a  href="vendor_orders.php" style="text-decoration: none;">🚚 Orders</a>
      <a class="active">📦 Inventory</a>
      <a>💰 Finance</a>
      <a>⭐ Reviews</a>
      <a>🚪 Log Out</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <div class="header">
      <div>
        <h2>Inventory</h2>
        <p>Manage your products and stock levels</p>
      </div>
      <div class="profile">
        <img src="https://i.pravatar.cc/40" alt="">
        <div>
          <strong>John Doe</strong>
          <span>Vendor</span>
        </div>
      </div>
    </div>

    <!-- INVENTORY CONTENT -->
    <section class="inventory">

      <!-- TOP ACTION BAR -->
      <div class="inventory-actions">
        <input type="text" placeholder="Search product...">
        <button class="add-btn">➕ Add Product</button>
      </div>

      <!-- INVENTORY TABLE -->
      <div class="inventory-table">

        <div class="table-header">
          <span>Product</span>
          <span>SKU</span>
          <span>Category</span>
          <span>Stock</span>
          <span>Price</span>
          <span>Status</span>
          <span>Updated</span>
          <span>Action</span>
        </div>

        <!-- ROW -->
        <div class="table-row">
          <div class="product">
            <img src="https://i.pravatar.cc/40">
            <span>Wireless Mouse</span>
          </div>
          <span>#WM-204</span>
          <span>Accessories</span>
          <span class="stock good">52</span>
          <span>৳850</span>
          <span class="status in">In Stock</span>
          <span>2 days ago</span>
          <div class="actions">
            <button class="restock">Restock</button>
          </div>
        </div>

        <!-- ROW -->
        <div class="table-row">
          <div class="product">
            <img src="https://i.pravatar.cc/40">
            <span>Bluetooth Headset</span>
          </div>
          <span>#BH-118</span>
          <span>Audio</span>
          <span class="stock low">6</span>
          <span>৳1,950</span>
          <span class="status low">Low</span>
          <span>5 hours ago</span>
          <div class="actions">
            <button class="restock">Restock</button>
          </div>
        </div>

        <!-- ROW -->
        <div class="table-row">
          <div class="product">
            <img src="https://i.pravatar.cc/40">
            <span>USB-C Cable</span>
          </div>
          <span>#UC-992</span>
          <span>Cables</span>
          <span class="stock out">0</span>
          <span>৳350</span>
          <span class="status out">Out</span>
          <span>1 week ago</span>
          <div class="actions">
            <button class="restock">Restock</button>
          </div>
        </div>

      </div>
    </section>

  </main>
</div>

</body>
</html>
