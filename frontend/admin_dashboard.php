<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/admin_dashboard.css" />
</head>
<body>

<div class="layout">

  <!-- SIDEBAR -->
  <aside class="sidebar">
      <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>
    <nav>
      <a class="active">📊 Dashboard</a>
      <a href="posts.php" style="text-decoration: none;">📫 Posts</a>
      <a href="sellers.php" style="text-decoration: none;">🏬 Sellers</a>
      <a href="analytics.php" style="text-decoration: none;">📈 Analytics</a>
      <a class="logout">🚪 Log Out</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="main">

    <!-- HEADER -->
    <header class="header">
      <h2>Admin Dashboard</h2>
      <div class="profile">
        <img src="https://i.pravatar.cc/40" alt="">
        <span>Rashid Khan</span>
      </div>
    </header>

    <!-- STATS -->
    <section class="stats">
      <div class="card">
        <p>Total Users</p>
        <h3>12,543</h3>
        <span class="up">+12% from last month</span>
      </div>
      <div class="card">
        <p>Total Posts</p>
        <h3>8,924</h3>
        <span class="up">+8% from last month</span>
      </div>
      <div class="card">
        <p>Total Vendors</p>
        <h3>1,247</h3>
        <span class="down">-3% from last month</span>
      </div>
    </section>

    <!-- CHARTS -->
    <section class="charts">
      <div class="chart">
        <h4>Gross Revenue</h4>
        <div class="line-chart"></div>
      </div>

      <div class="chart">
        <h4>Post Activity</h4>
        <div class="bar-chart">
          <span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span>
        </div>
      </div>
    </section>

    <!-- PIE -->
    <section class="chart wide">
      <h4>Post Statistics</h4>
      <div class="pie-chart"></div>
      <div class="legend">
        <span class="active">Active</span>
        <span class="pending">Pending</span>
        <span class="suspended">Suspended</span>
      </div>
    </section>

    <!-- TABLE -->
    <section class="table">
      <h4>Pending Approvals</h4>
      <table>
        <thead>
          <tr>
            <th>Type</th>
            <th>Submitted By</th>
            <th>Submitted</th>
            <th>Status</th>
            <th>Actions</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="tag green">Post Review</span></td>
            <td>Saima Akter</td>
            <td>2 hours ago</td>
            <td><span class="tag yellow">Pending</span></td>
            <td>
              <button class="approve">Approve</button>
              <button class="reject">Reject</button>
            </td>
                        <td>
              <button class="">📂</button>
            </td>
          </tr>
          <tr>
            <td><span class="tag orange">Vendor Request</span></td>
            <td>TechStore Inc.</td>
            <td>5 hours ago</td>
            <td><span class="tag yellow">Pending</span></td>
            <td>
              <button class="approve">Approve</button>
              <button class="reject">Reject</button>
            </td>
                        <td>
              <button class="">📂</button>
            </td>
          </tr>
          <tr>
            <td><span class="tag green">Post Review</span></td>
            <td>Taba Jahan</td>
            <td>1 day ago</td>
            <td><span class="tag yellow">Pending</span></td>
            <td>
              <button class="approve">Approve</button>
              <button class="reject">Reject</button>
            </td>
            <td>
              <button >📂</button>
            </td>
            
          </tr>
        </tbody>
      </table>
    </section>

  </main>
</div>
<?php include("footer.php")?>

</body>
</html>
