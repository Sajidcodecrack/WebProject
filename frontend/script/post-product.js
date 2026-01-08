
document.getElementById("productForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append("title", document.getElementById("title").value.trim());
    formData.append("category", document.getElementById("category").value);
    formData.append("condition", document.getElementById("condition").value);
    formData.append("price", document.getElementById("price").value);
    formData.append("description", document.getElementById("description").value.trim());

    const images = document.getElementById("images").files;
    for (let i = 0; i < images.length; i++) {
      formData.append("images", images[i]);
    }

    try {
      const res = await fetch("/api/products", {
        method: "POST",
        body: formData
      });

      if (res.ok) {
        alert("Product submitted for approval!");
        document.getElementById("productForm").reset();
      } else {
        alert("Failed to submit product");
      }
    } catch (err) {
      console.error(err);
      alert("Server error");
    }
  });

   function loadFooter() {
    fetch("http://127.0.0.1:5500/frontend/footer.html")
      .then(res => res.text())
      .then(html => {
        document.getElementById("footer").innerHTML = html;
      });
  }

  loadFooter();