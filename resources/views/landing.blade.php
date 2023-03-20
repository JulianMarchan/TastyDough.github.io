<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/landing.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Landing Page</title>
</head>
<body>
    <div class="banner">
        <div class="icon">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
       
        <div class="navbar">
        <a href="#" class="imgs"> <img src="/image/logo.png" class="logo"></a>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/product') }}">Product</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
       </div>
    </div>

       <div class="content">
        <H1>Tasty Dough</H1>
        <h2>Fresh & Delicious</h2>
        <p>We are proud to say that the store offers tasty cookies that suits your <br>taste. 
            Once you tried it out we know you're coming back for more!</p>
        
        <div class="socmed">
                <p>Contact us</p>
               <a href="https://www.facebook.com/profile.php?id=100089921533888"><img src="/image/fb.png"></a>
               <a href="#"><img src="/image/insta.png"></a>
                {{-- <a href="#"><img src="/image/gmail.png"></a> --}}
       </div>
       </div>
</body>

<script>
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}
</script>
</html>