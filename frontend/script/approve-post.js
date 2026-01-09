document.addEventListener("DOMContentLoaded", () => {
  loadPendingProduct();
});

async function loadPendingProduct() {
  try {
    // 1️⃣ Get product id from URL
    const params = new URLSearchParams(window.location.search);
    const productId = params.get("id");

    if (!productId) {
      alert("Product ID missing");
      return;
    }

    // 2️⃣ Fetch product details from backend
    const response = await fetch(`/api/admin/pending-product/${productId}`);
    const product = await response.json();

    // 3️⃣ Inject data into HTML
    document.getElementById("title").textContent = product.title;
    document.getElementById("price").textContent = `Rs. ${product.price}`;
    document.getElementById("shortDesc").textContent = product.shortDescription;
    document.getElementById("fullDesc").textContent = product.description;
    document.getElementById("sku").textContent = product.sku;
    document.getElementById("category").textContent = product.category;
    document.getElementById("tags").textContent = product.tags.join(", ");

    // Main image
    document.getElementById("mainImage").src = product.images[0];

    // 4️⃣ Gallery images
    const gallery = document.getElementById("gallery");
    gallery.innerHTML = "";

    product.images.forEach(image => {
      const imgDiv = document.createElement("div");
      imgDiv.className = "flex justify-center";

      imgDiv.innerHTML = `
        <img src="${image}" class="max-h-[300px] object-contain">
      `;

      gallery.appendChild(imgDiv);
    });

    // Save ID globally for approve/reject
    window.currentProductId = productId;

  } catch (error) {
    console.error(error);
    alert("Failed to load product");
  }
}

/* ================= ADMIN ACTIONS ================= */

async function approveProduct() {
  try {
    await fetch(`/api/admin/approve-product/${window.currentProductId}`, {
      method: "POST"
    });

    alert("Product approved successfully ✅");
    window.location.href = "/admin/pending-products.html";

  } catch (error) {
    alert("Approval failed");
  }
}

async function rejectProduct() {
  try {
    await fetch(`/api/admin/reject-product/${window.currentProductId}`, {
      method: "POST"
    });

    alert("Product rejected ❌");
    window.location.href = "/admin/pending-products.html";

  } catch (error) {
    alert("Rejection failed");
  }
}

 function loadFooter() {
    fetch("http://127.0.0.1:5500/footer.html")
      .then(res => res.text())
      .then(html => {
        document.getElementById("footer").innerHTML = html;
      });
  }

  loadFooter();
