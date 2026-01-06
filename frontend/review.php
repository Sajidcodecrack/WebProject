<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vendor Reviews</title>
  <link rel="stylesheet" href="css/review.css">
</head>
<body>

<div class="layout">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>

    <nav>
      <a href="vendor.php">📊 Dashboard</a>
      <a>➕ Add a New Product</a>
      <a href="vendor_orders.php">🚚 Orders</a>
      <a href="inventory.php" style="text-decoration: none;">📦 Inventory</a>
      <a href="vendor_finance.php" style="text-decoration: none;">💰 Finance</a>
      <a class="active">⭐ Reviews</a>
      <a>🚪 Log Out</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <div class="header">
      <div>
        <h2>Customer Reviews</h2>
        <p>See how customers feel about your products</p>
      </div>
      <div class="profile">
        <img src="https://i.pravatar.cc/40" alt="">
        <div>
          <strong>John Doe</strong>
          <span>Vendor</span>
        </div>
      </div>
    </div>

    <!-- REVIEW SUMMARY -->
    <section class="review-summary">

      <div class="summary-card">
        <h3>Overall Rating</h3>
        <div class="rating-big">4.3 ⭐</div>
        <p>Based on 1,248 reviews</p>
      </div>

      <div class="summary-card">
        <h3>Rating Breakdown</h3>

        <div class="rating-row">
          <span>5 ⭐</span>
          <div class="bar"><div style="width:70%"></div></div>
          <span>70%</span>
        </div>

        <div class="rating-row">
          <span>4 ⭐</span>
          <div class="bar"><div style="width:18%"></div></div>
          <span>18%</span>
        </div>

        <div class="rating-row">
          <span>3 ⭐</span>
          <div class="bar"><div style="width:7%"></div></div>
          <span>7%</span>
        </div>

        <div class="rating-row">
          <span>2 ⭐</span>
          <div class="bar"><div style="width:3%"></div></div>
          <span>3%</span>
        </div>

        <div class="rating-row">
          <span>1 ⭐</span>
          <div class="bar"><div style="width:2%"></div></div>
          <span>2%</span>
        </div>

      </div>

    </section>

    <!-- PRODUCT REVIEWS TABLE -->
    <section class="reviews-table">
      <h3>Product Review Performance</h3>

      <table>
        <thead>
          <tr>
            <th>Product</th>
            <th>Avg Rating</th>
            <th>Total Reviews</th>
            <th>Last Review</th>
            <th>Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Wireless Headphones</td>
            <td>4.6 ⭐</td>
            <td>342</td>
            <td>2 hours ago</td>
            <td class="good">Good</td>
          </tr>

          <tr>
            <td>Smart Watch</td>
            <td>3.9 ⭐</td>
            <td>214</td>
            <td>Yesterday</td>
            <td class="average">Average</td>
          </tr>

          <tr>
            <td>USB Power Bank</td>
            <td>2.8 ⭐</td>
            <td>98</td>
            <td>3 days ago</td>
            <td class="bad">Needs Attention</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- RECENT REVIEWS -->
    <section class="recent-reviews">
      <h3>Recent Customer Feedback</h3>

      <div class="review-card">
        <strong>⭐⭐⭐⭐⭐</strong>
        <p>Great quality! Delivered fast and works perfectly.</p>
        <span>– Rahim • Wireless Headphones</span>
      </div>

      <div class="review-card">
        <strong>⭐⭐⭐</strong>
        <p>Battery life could be better, but overall okay.</p>
        <span>– Sabila • Smart Watch</span>
      </div>

      <div class="review-card low">
        <strong>⭐⭐</strong>
        <p>Stopped working after one week. Not satisfied.</p>
        <span>– Hasan • Power Bank</span>
      </div>
    </section>

  </main>
</div>

</body>
</html>
