
 async function registerUser(e) {
      e.preventDefault();

      const get = id => document.getElementById(id).value.trim();
      const errorMsg = document.getElementById("errorMsg");

      const password = get("pass");
      const confirmPassword = get("conf-pass");

      if (password !== confirmPassword) {
        errorMsg.textContent = "Passwords do not match";
        errorMsg.classList.remove("hidden");
        return;
      }

      const userData = {
        name: get("name"),
        email: get("email"),
        phone: get("phone"),
        dob: get("birth"),
        gender: get("gender"),
        address: get("address"),
        password,
        description: get("description"),
        university: get("university"),
        department: get("department"),
        year: get("semester"),
        studentId: get("id"),
        facebook: get("fb"),
        instagram: get("insta"),
        linkedin: get("linkdin"),
        dribbble: get("dribble")
      };

      try {

        // fetch the API
        const res = await fetch("https://your-backend.com/api/register", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(userData)
        });

        const data = await res.json();

        if (res.ok) {
          alert("Account created successfully!");
          window.location.href = "login.html";
        } else {
          errorMsg.textContent = data.message || "Registration failed";
          errorMsg.classList.remove("hidden");
        }

      } catch (err) {
        errorMsg.textContent = "Server error. Try again later.";
        errorMsg.classList.remove("hidden");
        console.error(err);
      }
    }