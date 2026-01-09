
 let quantity = 1;

  function changeQty(val) {
    quantity = Math.max(1, quantity + val);
    document.getElementById("qty").innerText = quantity;
  }

  const productId =
    new URLSearchParams(window.location.search).get("id");

  async function loadProduct() {
    const res = await fetch(`/api/products/${productId}`);
    const p = await res.json();

    document.getElementById("title").innerText = p.title;
    document.getElementById("price").innerText = `Tk. ${p.price}.00`;
    document.getElementById("shortDesc").innerText = p.description;
    document.getElementById("fullDesc").innerText = p.description;
    document.getElementById("sku").innerText = p.sku;
    document.getElementById("category").innerText = p.category;
    document.getElementById("tags").innerText = p.tags.join(", ");
    document.getElementById("reviewCount").innerText =
      `${p.reviews} Customer Review`;
    document.getElementById("productImage").src = p.images[0];

    document.getElementById("ratingStars").innerText =
      "★".repeat(Math.floor(p.rating)) +
      "☆".repeat(5 - Math.floor(p.rating));
  }

  async function loadRelatedProducts() {
    const res = await fetch(`/api/products/${productId}/related`);
    const products = await res.json();

    const container = document.getElementById("relatedProducts");

    products.forEach(p => {
      container.innerHTML += `
        <a href="product.html?id=${p.id}" class="block">
          <img src="${p.image}"
               class="mx-auto rounded mb-3 w-full h-48 object-cover">
          <p class="text-sm">${p.title}</p>
          <p class="font-semibold text-blue-900">
            Tk. ${p.price}.00
          </p>
        </a>
      `;
    });
  }

  function loadFooter() {
    fetch("http://127.0.0.1:5500/footer.html")
      .then(res => res.text())
      .then(html => {
        document.getElementById("footer").innerHTML = html;
      });
  }

  // AUTO LOAD
  loadProduct();
  loadRelatedProducts();
  loadFooter();