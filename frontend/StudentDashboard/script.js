// YEAR
document.querySelectorAll("#year").forEach(el => el.textContent = new Date().getFullYear());

// MOBILE TOP NAV TOGGLE (keeps your previous syntax behavior)
const navToggle = document.getElementById("nav-toggle");
const header = document.querySelector(".site-header");
if (navToggle && header) {
  navToggle.addEventListener("click", () => header.classList.toggle("nav-mobile-open"));
}

// SIDEBAR OPEN/CLOSE (mobile)
const sidebar = document.getElementById("dash-sidebar");
const openBtn = document.getElementById("sidebar-open");
const closeBtn = document.getElementById("sidebar-close");

if (sidebar && openBtn) openBtn.addEventListener("click", () => sidebar.classList.add("open"));
if (sidebar && closeBtn) closeBtn.addEventListener("click", () => sidebar.classList.remove("open"));

// CLOSE sidebar on outside click
document.addEventListener("click", (e) => {
  if (!sidebar) return;
  const isOpen = sidebar.classList.contains("open");
  if (!isOpen) return;

  const clickedInside = sidebar.contains(e.target);
  const clickedOpenBtn = openBtn && openBtn.contains(e.target);
  if (!clickedInside && !clickedOpenBtn) sidebar.classList.remove("open");
});

// ACTIVE SIDEBAR LINK based on filename
(function setActiveSidebar() {
  const path = (location.pathname.split("/").pop() || "").toLowerCase();
  const map = {
    "dashboard.html": "dashboard",
    "products.html": "products",
    "customers.html": "customers",
    "orders.html": "orders",
    "shipments.html": "shipments",
    "transactions.html": "transactions",
    "settings.html": "settings",
  };
  const key = map[path] || "dashboard";
  document.querySelectorAll(".side-link").forEach(a => {
    a.classList.toggle("active", a.dataset.page === key);
  });
})();

// SEARCH (filters any card/table row with data-searchable)
const pageSearch = document.getElementById("page-search");
if (pageSearch) {
  pageSearch.addEventListener("input", () => {
    const q = pageSearch.value.trim().toLowerCase();

    // filter cards
    document.querySelectorAll("[data-searchable]").forEach(card => {
      const text = (card.getAttribute("data-searchable") || "").toLowerCase();
      card.style.display = text.includes(q) ? "" : "none";
    });

    // filter tables (optional)
    document.querySelectorAll(".dash-table tbody tr").forEach(tr => {
      const t = tr.innerText.toLowerCase();
      tr.style.display = t.includes(q) ? "" : "none";
    });
  });
}

// LOGOUT demo
const logoutBtn = document.getElementById("logout-btn");
if (logoutBtn) {
  logoutBtn.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Logged out (demo). Connect backend to make real logout.");
    location.href = "dashboard.html";
  });
}
