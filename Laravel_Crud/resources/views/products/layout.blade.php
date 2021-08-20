<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="{{ route('products.index') }}">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAAAzFBMVEX4+PgBEhwAAAD////4///4+/v3////AAD/GAD7+/v48PD60M/8ko7+YVoAAAiAgoWRlJeoq63/IxGjpaaHio37sq8AAA//NCh2en77qaZdY2dIT1TIy8zg4uPV19gACxf8iIT6x8X9a2X/LSAAABL/Jxj55uXq6ur+SD//PzX52tn7trP56+r9cWv+Z2H/PDH+WlL51dT8m5f9hH8bJi76wL79enX8oZ42P0UQHidRWFy6vb/Nz9H+TkX+S0NrcHQqMzowOUA+RkwWIitSr4FoAAAKj0lEQVR4nO2ci1bbOBCGFct2bC5OYiBJSWKXJsZcSktbaGmgDcu+/zutNJIs+RYgsG1dz7/nbIkt+fJlpNGMpBCCQqFQKBQKhUKhUCgUCoVCoVAoFAqFQqFQKBTql8txfvcTNFn28bWNADeUTXa63ZNtBLiJHPsg9Nh/3Xfv7d/9LI2TY2+fMHQ726f8/w4CfJbs9xfdsPvh2HbsN2HoJefYgp8u2/ncDb1T0evZ5C378OMTAnyaHPc8YZ3em4yXfbzLTPHrFrbgx+XYZz9Yd/eWGLAc9+gjO/Z5bReIQ0QmZ+srs7Td4wIo1gUyg5xf1/Jz7Gt00AyDFyYn227ZklgXGCbdN9WIHHf7tPuIdbZCW935fHRQ4Sbs43fJPNypBMTOdfkYMbmu4N4qMXyMw8ejAgfhfpNKfDw4Cb2TbXDQZ+120Ftd7/qrGPLpg6LnS44+eGV8jn0eel7IDNY+vmy9g2b4tt1PP3mooXwvC0BOwe+6uyV8jvvpJCvLHPSIYf5mtxcgx+cwi0qERRHesX1gRnXB/KpdwpcFJ+qz/Y3xG7U3TQP4dH/mqj84kCI+GZzk+kkbBj6XZy01QIlPetPuxUGYmWERn30+zwUn6vAZ7wK/bLXSADN8MJaDhFXWCebx2d+6bCBDymbGusDTeZi00v40PpHxS4wApIDvSzhPLipCDeanR/N5939/1D9RJj5C3NA7N4Dl8bEoxLRNKREfe4iPyQ69g3p83gUM+XK5QJmdOfcQ36P43rnCL39SvlflBt0jxEcex2cbo8IsODl3HQfxcT2Oz8gFunpeBPGBnoAvywWev8vMEPEJPQmf6vJUcEIQn9QT8XGHe5mEOk2I+EBPxkfsA2/kZp8QH+gZ+N54I/0J8YEQ3zOF+F4kxPciIb4X6cn47K3L8ESnq3L4HHsnRHxr8PFJjSRM9NI1A59MWbU+XVqLz3Gv+ZTaTshCjXORbdH4RMrqou3Jeq5qfHpCl8dqPyFdpfCZx1qox/HZ5AuD9+NMgNxVk5iAj6f3W72Y8jF8rlpqpeaTVLqK4XNlyqpi+qgtegTf5+3iQj+1dO3A+7jFU1btXki+Hl/CPEa3OLtmb7HW7M3nc0hZtbTTk1qDzyY/k4R5hXLHZp/tJoCvamVbq1SLDyZ9a7yC456N5vPwbYs7PakafI67fVLrFfhCoSSZG/m+1qoan/0evEJxxbMoIyYrv4Sj1tteNT7b2YFtHlVeAVZHslJuLmXQWlXgs2GbR6VXkG2adXo24uMq4bs++1nc5qFPQ5uG1ZGID1TEl3DrKm3zECeJ0aYRH6iIb54kp8Vl9iDV6ck2jfhAJeubj7YqBiS601MlER9XHp+zPfKSit1CYuWuuXkB8YHy+LJFUzm3qzq93Lo+xMdVwMcTAm+7uVQAbNIvhbeID1TCpzZ2yJCjLnpDfKAKfHKNPSArd3pSiA9UhU83WFIbvSE+EMN3VD9G5vs8aqK3b4iPiA2p1b87Yr+/CNm56uht66uXID6+08rTk7d5wY7Kqpye2Ns2qmj07dOaidryjkoux72u3NvWVunJ2+KJKnxqByC2XKW63x2pwNfy/ac1cvKT4VIlfK3f/VwrmLwtmFUBH+69XyfRqZm/7FBYHok/zbRWchmati4THywUav3vjqyX6tvkIEbjU/uw2r0i43FJzypSBAof323/6C+Cobj4D6rxcR2P1SQ+cw9qS+RzbVZVRxWAzy7sgP5dj/UrlQptWFvEtB+PIOaFzNUrdXoveqpfJzq2uHp00wuIXwu6uAwvfrzi8lG6D4+1t/Fj/SLRXtDpdKz9zZ/Tgd+1SuZJ3UKhjR6rb/HHGvz9+GBaPPGSmoVCGz5Wi/BBwnn0qmmpduHjw+hXHay0Dd8rC/G9SIjvRUJ8LxLie5H+EnzPDTw3jFNLt/kb8FHqz6Joxv6BD1wk+0tLvbhPaRpFUQqlslO6npZfU08jbD4+SgYTCDytccRebDVm6lP+ZuOcVhG8tU+jXgeK3wwYs4E85ffgj1zw79/CxQay3nS1gHpX+7PsKZqOz6d7sbXogAJrRVIrCALrgeNb8j+1rCkY54wdjqF4bH2f0rElTtEe/JGL/enE0vXubqyhqsfuIw2w4fh8MrHES4Gsf1L+OosJx3c47JgCDPTWMo7G1kBcdur7M14xvjeubx6i+2a9jhVHomCz8fnkPsgxCibxOnx0YOWOdYYPsTr1wG3Yikr9GjdIuoJ68ZC13YUAL/g1HN+DoMdeK7DAPsAU6/Ax21PNjytW5TXZwEgo+t8Bbepz2xM2t+r39yfiPkEKbbrJ+MTDMxqHt2ma3h6qdmziszLdUhJDgaDTj9I06n+3NFlCoNnHcXZxH1gPDynxp4JeX7hn1nvyExNKmo1PdE6deDGlMONA7wQeE591GymlzE8AhhWB8tQfWwY+uoI73Ko7qPo+8a9EC5dnfHEdfqbR+Ji3hJePsjcWPHP4IoGWK5X09LBD8gN8wsYWS3VWWqNq1lZf35rex+omDcZHoOcyn112bjl8mS+gewDkyogb6E3W97EPwshmvlGa35BOuLcIzIeB2/CSDcbn35VwEPpPXI8PMOReVeKW+PqmlYkrMUTCaIdjbcWs3fMvjvvkBuPT9lE8VoMPvLSV5qLWocYnx3lXcD3x3fALiUYd7E8N3fHxznDVbHzjQPXgmWQHVokvNehk11guMny5D/LijIv4RlhIYwps/KHZ+FYFPkRZUCU+P7LkO5PSNQQ+OVQRrmUBbZdko6OyeDzSInyiba7Bp3xRqjrFYEXX4btqNr5xfqDG9ezGOzEar7rJQHlb684n1Y0X1HDr2yuGWcpUalyHcBOznOswPK9q3/ENNb2I+EasvVlZf8PApWMWEwFCDb4lHDBzUjKFkDVeMQ5kQ22dLZCNPsgNXHjIAonnBuNTMb0ZDuytGzYPJG5tfoK2gU/lDbJsAZExBngRXS+dNjRhpQ0gS4SoYJTQqCJoM9qq6MSWKtnuyzyUxieKxN+FC16aiAId6zH+N9KIm4Uv6KW65yEyiI3Z03OqlNlOOWVQSuB1rEkqUgbp0kwZiCLgiWMRvmUjSkhPWz2J3afR1bBjHepLNgUfT+xlmvmyrXash0E0iwYPaoRRZ33k31hcpDeNZtPeUCUENT6Zm4pznaq8jbWMRMKqB9+SdUUah88QROyHgpigymks1uHzZeMWo5BAgTIbr+j1Ovl+lgozXVj3q97qRlYUWa5G4yN+ZnHy4OFinfWx0XBsFo/jpUrWqxLZINkc4fgTmaYeBnK+aBjcNS9dWsbnr3JTRcviVFEeH6HT2OC9sKZqqkgVkClYGP3par4/VtN58kY3abNcx7g06BfWQW+v5MxjbLExTAqn5EQlVx4foWSsZnuG1n3EfC/X1PAvctK4gITePbB6saxo9eVqA4avXPYPlD/dK0pOaVM6Hd/DtHefWwSc4jPb/q1ZSoume0ve9y1Wt8wBi0JmO73LXz47TqP+EuaY4sMBUbjkYxW+oz9QfnHNBTVP+WnqG4s0fF2j+koklWst8uswzBvV1SO5c+X6jdRzl/xs+sJN2AKDQqFQKBQKhUKhUCgUCoVCoVAoFAqFarL+A6JkEue0wuhWAAAAAElFTkSuQmCC" alt="logo" style="width:140px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">About Page</a>
    </li>
    
  </ul>
</nav>


<div class="container">
    @yield('content')
</div>
   
</body>
</html>