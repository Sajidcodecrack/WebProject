document.addEventListener("DOMContentLoaded", () => {
  loadDashboardStats();
  loadSalesOverview();
  loadSalesTrend();
  loadStockAlerts();
  loadRecentOrders();
});

/* ================= DASHBOARD STATS ================= */

async function loadDashboardStats() {
  const res = await fetch("/api/vendor/dashboard/stats");
  const data = await res.json();

  document.getElementById("totalSales").textContent = data.totalSales;
  document.getElementById("totalOrders").textContent = data.totalOrders;
  document.getElementById("totalEarnings").textContent = data.totalEarnings;
}

/* ================= SALES OVERVIEW (LINE) ================= */

async function loadSalesOverview() {
  const res = await fetch("/api/vendor/dashboard/sales-overview");
  const data = await res.json(); 
  // Example: [120, 200, 150, 300, 280, 350, 290]

  const max = Math.max(...data);
  const points = data.map((val, i) => {
    const x = 20 + i * 70;
    const y = 180 - (val / max) * 150;
    return `${x},${y}`;
  }).join(" ");

  document.getElementById("salesLine").setAttribute("points", points);
}

/* ================= SALES TREND (BAR) ================= */

async function loadSalesTrend() {
  const res = await fetch("/api/vendor/dashboard/sales-trend");
  const data = await res.json(); 
  // Example: [45, 30, 55, 40, 65, 80, 60]

  const barContainer = document.getElementById("salesBars");
  barContainer.innerHTML = "";

  data.forEach(val => {
    const bar = document.createElement("div");
    bar.style.height = `${val}%`;
    barContainer.appendChild(bar);
  });
}

/* ================= STOCK ALERTS ================= */

async function loadStockAlerts() {
  const res = await fetch("/api/vendor/dashboard/stock-alerts");
  const products = await res.json();

  const container = document.getElementById("stockAlerts");
  container.innerHTML = "";

  products.forEach(item => {
    const alert = document.createElement("div");
    alert.className = `alert ${item.quantity === 0 ? "danger" : "warning"}`;

    alert.innerHTML = `
      <div>
        <strong>${item.name}</strong>
        <small>${item.quantity === 0 ? "Out of stock" : `Only ${item.quantity} units left`}</small>
      </div>
      <span>Restock</span>
    `;

    container.appendChild(alert);
  });
}

/* ================= RECENT ORDERS ================= */

async function loadRecentOrders() {
  const res = await fetch("/api/vendor/dashboard/recent-orders");
  const orders = await res.json();

  const container = document.getElementById("recentOrders");
  container.innerHTML = "";

  orders.forEach(order => {
    const div = document.createElement("div");
    div.className = "order";

    div.innerHTML = `
      <img src="${order.avatar}">
      <div>
        <strong>#${order.orderId}</strong>
        <small>${order.customer} - ${order.amount}tk</small>
      </div>
      <span class="status ${order.status.toLowerCase()}">${order.status}</span>
    `;

    container.appendChild(div);
  });
}


 function loadFooter() {
    fetch("http://127.0.0.1:5500/footer.html")
      .then(res => res.text())
      .then(html => {
        document.getElementById("footer").innerHTML = html;
      });
  }

  loadFooter();