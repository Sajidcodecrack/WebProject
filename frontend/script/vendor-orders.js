 function loadFooter() {
    fetch("http://127.0.0.1:5500/footer.html")
      .then(res => res.text())
      .then(html => {
        document.getElementById("footer").innerHTML = html;
      });
  }

  loadFooter();