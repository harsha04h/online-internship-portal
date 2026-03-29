document.addEventListener("DOMContentLoaded", function () {

    const registerForm = document.getElementById("registerForm")
    if (registerForm) {
        registerForm.addEventListener("submit", function (e) {
            e.preventDefault()

            const name = document.getElementById("name").value.trim()
            const email = document.getElementById("email").value.trim()
            const password = document.getElementById("password").value

            if (name === "" || email === "" || password === "") {
                alert("All fields are required")
                return
            }

            if (!email.includes("@") || !email.includes(".")) {
                alert("Enter a valid email")
                return
            }

            if (password.length < 8) {
                alert("Password must be at least 8 characters")
                return
            }

            registerForm.submit()
        })
    }

    const loginForm = document.getElementById("loginForm")
    if (loginForm) {
        loginForm.addEventListener("submit", function (e) {
            e.preventDefault()

            const username = document.getElementById("loginUsername").value.trim()
            const password = document.getElementById("loginPassword").value

            if (username === "" || password === "") {
                alert("All fields are required")
                return
            }

            loginForm.submit()
        })
    }

    const search = document.getElementById("sch")
    if (search) {
        search.addEventListener("keyup", function () {
            const value = this.value.toLowerCase()
            const cards = document.querySelectorAll(".internship-card")

            cards.forEach(card => {
                card.style.display = card.textContent.toLowerCase().includes(value) ? "block" : "none"
            })
        })
    }

    const applyButtons = document.querySelectorAll(".apply-btn")
    applyButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            alert("Please login to apply for this internship")
        })
    })

})
