

   <link rel="stylesheet" href="/css/show.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  
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
 </div>
    <div class="max-w-7xl mx-auto mt-8">
        <form method="POST" action="{{route('contact.submit')}}">
        @csrf
        <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>CONTACT</span>
                      <span>US</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : +63 95 63 61 1732</div>
                  </div>
                  <div class="screen-body-item">
                    <div class="app-form">
                      <div class="app-form-group">
                        <input class="app-form-control" name="name" placeholder="NAME">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" name="email" placeholder="EMAIL">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" name="contact" placeholder="CONTACT NO">
                      </div>
                      <div class="app-form-group message">
                        <input class="app-form-control" name="message" placeholder="MESSAGE">
                      </div>
                      <div class="app-form-group buttons">
                        <button class="app-form-button">CANCEL</button>
                        <button class="app-form-button">SEND</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="credits">
                Designed by: 
                <a class="credits-link" target="_blank">
                  
                  Julian Marchan
                </a>
              </div>
            </div>
          </div>
          
        </form> 
    </div>
    <script>
      let menu = document.querySelector('#menu-icon');
      let navlist = document.querySelector('.navlist');
      menu.onclick = () => {
          menu.classList.toggle('bx-x');
          navlist.classList.toggle('open');
      }
      </script>