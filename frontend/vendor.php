<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Seller Dashboard</title>
  <link rel="stylesheet" href="css/vendor.css">
</head>
<body>

<div class="app">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>

    <nav>
      <a class="active" style="text-decoration: none;">
        📊 Dashboard
      </a>
      <a>➕ Add a New Product</a>
      <a href="vendor_orders.php" style="text-decoration: none;">🚚 Orders</a>
      <a href="inventory.php" style="text-decoration: none;">📦 Inventory</a>
      <a href="vendor_finance.php" style="text-decoration: none;">💰 Finance</a>
      <a href="review.php" style="text-decoration: none;">⭐ Reviews</a>
      <a>🚪 Log Out</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <div
     class="header">
      <div>
        <h2>Dashboard Overview</h2>
        <p>Welcome back! Here's what's happening with your store.</p>
      </div>
      <div class="profile">
        <img src="https://i.pravatar.cc/40" alt="">
        <div>
          <strong>John Doe</strong>
          <span>Vendor</span>
        </div>
      </div>
    </div>

    <!-- STATS -->
 <section class="stats">

  <div class="card">
    <span><b>Total Sales</b></span>
    <h3>
      24,580 tk
      <span>
        <img src="asset/div1.png" alt="Sales" class="sells_Logo">
      </span>
    </h3>
  </div>

  <div class="card">
    <span><b>Total Orders</b></span>
    <h3>
      1,247
      <span>
        <img src="asset/div2.png" alt="Orders" class="sells_Logo">
      </span>
    </h3>
  </div>

  <div class="card">
    <span><b>Total Earnings</b></span>
    <h3>
      7,4200 tk
      <span>
        <img src="asset/div3.png" alt="Earnings" class="sells_Logo">
      </span>
    </h3>
  </div>

</section>

    <!-- CHARTS -->
    <section class="charts">

      <!-- LINE CHART -->
      <div class="chart-card">
        <h4>Sales Overview</h4>
        <svg viewBox="0 0 500 200" class="line-chart">
          <polyline
            points="20,150 90,110 160,130 230,80 300,60 370,30 440,50"
          />
        </svg>
        <div class="labels">
          <span>Mon</span><span>Tue</span><span>Wed</span>
          <span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
        </div>
      </div>

      <!-- BAR CHART -->
      <div class="chart-card">
        <h4>Sales Trend</h4>
        <div class="bar-chart">
          <div style="height:45%"></div>
          <div style="height:30%"></div>
          <div style="height:55%"></div>
          <div style="height:40%"></div>
          <div style="height:65%"></div>
          <div style="height:80%"></div>
          <div style="height:60%"></div>
        </div>
        <div class="labels">
          <span>Mon</span><span>Tue</span><span>Wed</span>
          <span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
        </div>
      </div>

    </section>

    <!-- LOWER -->
    <section class="lower">

      <!-- STOCK ALERTS -->
      <div class="box">
        <h4>Stock Alerts</h4>

        <div class="alert danger">
          <div>
            <strong>Sticky Pads</strong>
            <small>Only 2 units left</small>
          </div>
          <span>Restock</span>
        </div>

        <div class="alert warning">
          <div>
            <strong>fx991es plus calculator</strong>
            <small>Only 5 units left</small>
          </div>
          <span>Restock</span>
        </div>

        <div class="alert danger">
          <div>
            <strong>Laptop Stand</strong>
            <small>Out of stock</small>
          </div>
          <span>Restock</span>
        </div>
      </div>

      <!-- RECENT ORDERS -->
      <div class="box">
        <h4>Recent Orders</h4>

        <div class="order">
          <img src="https://i.pravatar.cc/30?1">
          <div>
            <strong>#ORD-1247</strong>
            <small>Taba Jahan - 89.99tk</small>
          </div>
          <span class="status done">Completed</span>
        </div>

        <div class="order">
          <img src="https://i.pravatar.cc/30?2">
          <div>
            <strong>#ORD-1246</strong>
            <small>Manik Mia - 124.50tk</small>
          </div>
          <span class="status processing">Processing</span>
        </div>

        <div class="order">
          <img src="https://i.pravatar.cc/30?3">
          <div>
            <strong>#ORD-1245</strong>
            <small>Devi Roy - 67.25tk</small>
          </div>
          <span class="status pending">Pending</span>
        </div>

                <div class="order">
          <img src="https://i.pravatar.cc/30?3">
          <div>
            <strong>#ORD-1245</strong>
            <small>Devi Roy - 67.25tk</small>
          </div>
          <span class="status pending">Pending</span>
        </div>
      </div>

    </section>

  </main>
</div>

</body>

<?php include("footer.php")?>
</html>
