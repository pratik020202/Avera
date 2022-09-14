<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>
<body>
    <div class="contact-container">
        <div class="left-col"></div>
        <div class="right-col">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox"/>
                    <div class="slider-round"></div>
                </label>
                <div class="description">Dark Mode</div>
            </div>
            <h1>Contact Us</h1>

            <form id="contact-form" method="post">
                <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Your Full Name" required>
                <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Your Email Address" required>
                <label for="message">Message</label>
                    <textarea rows="6" id="message" placeholder="Type Your Message" name="message" required></textarea>
                    <button type="submit" id="submit" name="submit">Send</button>
            </form>
            <div id="error"></div>
            <div id="succes-msg"></div>
        </div>

    </div>


<script src="assets/js/usermain.js"></script>
</body>
</html>