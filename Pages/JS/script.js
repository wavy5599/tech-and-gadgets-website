var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }



   // Initialize Email.js with your user ID (public key)
emailjs.init("Hx4XOj6l9ptsRm_zk"); // Replace "your_user_id" with your Email.js User ID

// JavaScript for sending an email using a form
emailjs.send("service_6hqe3me", "template_l6z5y5k", {
    name: "John Doe",
    email: "techandgadgets005@gmail.com",
    message: "Hello, this is a test email!"
}).then(response => {
    console.log("SUCCESS!", response.status, response.text);
}).catch(error => {
    console.log("FAILED...", error);
});


