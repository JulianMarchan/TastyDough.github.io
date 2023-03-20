<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/services.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Services</title>
</head>
<body>
    
    <div class="banner">
        <div class="icon">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        <div class="navbar">
         <a href="#"> <img src="/image/logo.png" class="logo"></a>
         <div class="navlist">
         <ul>
           
             <li><a href="{{ url('/') }}">Home</a></li>
             <li><a href="{{ url('/product') }}">Product</a></li>
             <li><a href="{{ url('/services') }}">Services</a></li>
             <li><a href="{{ url('/contact') }}">Contact</a></li>
           
         </ul>
        </div>
        </div>
        <div class="services">
            <H1>Services</H1>
         </div>
     </div>
     <div class="content">
        
        <div class="card-container">
            <div class="card-header">Delicious Cookies</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus, debitis dicta architecto minus id esse accusamus velit nobis quos perferendis suscipit hic aliquid..</p>
            </div>
           
        <div class="card-container">
            <div class="card-header">Special Cakes</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus, debitis dicta architecto minus id esse accusamus velit nobis quos perferendis suscipit hic aliquid..</p>
            </div>
           
            <div class="card-container">
                <div class="card-header">Personal Request</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus, debitis dicta architecto minus id esse accusamus velit nobis quos perferendis suscipit hic aliquid..</p>
                </div>
               
     </div>
     <footer>
        <div class="footer-content">
            <h3>TastyDough</h3>
            <p>Tasty Dough is a local bakery Brand in <br>Olongapo City Founded by <span>Shenaia Marchan </span></p>
            <ul class="social">
                <li><a href="https://www.facebook.com/profile.php?id=100089921533888"><img src="/image/fb.png"></a></li>
                <li><a href="#"><img src="/image/insta.png"></a></li>
                {{-- <li><a href="#"><img src="/image/gmail.png"></a></li> --}}
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; 2023 TastyDough. designed by <span>Julian Marchan </span>
        </div>
    </footer>
</body>
<script>
    let menu = document.querySelector('#menu-icon');
    let navlist = document.querySelector('.navlist');
    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navlist.classList.toggle('open');
    }
    </script>
</html>