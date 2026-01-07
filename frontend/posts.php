<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="css/posts.css" />

</head>
<body>
    

<div class="layout">

  <!-- SIDEBAR -->
  <aside class="sidebar">
      <div><img src="asset/sell-it logo.png" alt="" class="logo"></div>
    <nav>
      <a href="admin_dashboard.php" style="text-decoration: none;">📊 Dashboard</a>
      <a class="active"  >📫 Posts</a>
      <a>🏬 Vendors</a>
      <a>🧑‍🎓 Users</a>
      <a>📈 Analytics</a>
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

</div>
<?php include("footer.php")?>
</body>
</html>