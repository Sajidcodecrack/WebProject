<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vendor Finance</title>
  <link rel="stylesheet" href="css/vendor_finance.css">
</head>
<body>

<div class="container">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>

    <nav>
      <a href="vendor.php">📊 Dashboard</a>
      <a>➕ Add a New Product</a>
      <a href="vendor_orders.php">🚚 Orders</a>
      <a href="inventory.php">📦 Inventory</a>
      <a class="active">💰 Finance</a>
      <a>⭐ Reviews</a>
      <a>🚪 Log Out</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <div class="header">
      <div>
        <h2>Finance Overview</h2>
        <p>Track your sales performance and earnings</p>
      </div>
      <div class="profile">
        <img src="https://i.pravatar.cc/40" alt="">
        <div>
          <strong>John Doe</strong>
          <span>Vendor</span>
        </div>
      </div>
    </div>

    <!-- FINANCE CARDS -->
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
      7,420 tk
      <span>
        <img src="asset/div3.png" alt="Earnings" class="sells_Logo">
      </span>
    </h3>
  </div>

</section>

    <!-- GRAPHS -->
    <section class="graphs">

      <div class="graph-box">
        <h3>Monthly Sales Trend</h3>
        <div class="bar-chart">
          <div style="height:40%"></div>
          <div style="height:60%"></div>
          <div style="height:55%"></div>
          <div style="height:75%"></div>
          <div style="height:90%"></div>
        </div>
      </div>

      <div class="graph-box">
        <h3>Orders vs Revenue</h3>
        <div class="bar-chart dual">
          <div class="orders" style="height:60%"></div>
          <div class="revenue" style="height:85%"></div>
        </div>
      </div>

      <div class="graph-box">
        <h3>Earnings Breakdown</h3>
        <ul class="breakdown">
          <li>Product Sales <span>৳ 1,25,000</span></li>
          <li>Platform Fee <span>- ৳ 18,000</span></li>
          <li>Net Earnings <span class="green">৳ 98,400</span></li>
        </ul>
      </div>

      <div class="graph-box">
        <h3>Top Selling Products</h3>
        <ul class="top-products">
          <li>Wireless Earbuds <span>120 sold</span></li>
          <li>USB-C Charger <span>98 sold</span></li>
          <li>Power Bank <span>75 sold</span></li>
        </ul>
      </div>

    </section>

    <!-- TRANSACTIONS -->
    <section class="transactions">
      <h3>Recent Transactions</h3>
      <table>
        <tr>
          <th>Order ID</th>
          <th>Date</th>
          <th>Amount</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>#ORD1023</td>
          <td>12 Jan 2026</td>
          <td>৳ 1,250</td>
          <td class="status" id="completed">Completed</td>
        </tr>
        <tr>
          <td>#ORD1022</td>
          <td>11 Jan 2026</td>
          <td>৳ 780</td>
          <td class="status" id="pending">Pending</td>
        </tr>
        <tr>
          <td>#ORD1021</td>
          <td>10 Jan 2026</td>
          <td>৳ 2,100</td>
          <td class="status" id="processing">Processing</td>
        </tr>
      </table>
    </section>

  </main>
</div>

</body>
</html>
