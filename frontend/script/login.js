
document.getElementById("login-btn").addEventListener("click",async function(){
   const username = document.getElementById("username").value.trim();
      const password = document.getElementById("password").value.trim();
      const errorMsg = document.getElementById("errorMsg");

    errorMsg.classList.add("hidden");

      if (!username || !password) {
        errorMsg.textContent = "Please fill in all fields";
        errorMsg.classList.remove("hidden");
        return;
      }


        try {

            // here the login API link will be applicable
        const response = await fetch("https://your-backend.com/api/login", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({ username, password })
        });

        const data = await response.json();

        if (data.success) {
          // Save token
          localStorage.setItem("token", data.token);

          // Redirect
          window.location.href = "dashboard.html";
        } else {
          errorMsg.textContent = data.message || "Login failed";
          errorMsg.classList.remove("hidden");
        }

      } catch (error) {
        errorMsg.textContent = "Server error. Try again later.";
        errorMsg.classList.remove("hidden");
        console.error(error);
      }
    
})

document.getElementById("sign-up-btn").addEventListener("click",function(){
      window.location.href = "signup.html";
})