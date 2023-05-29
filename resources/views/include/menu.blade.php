<section class="@yield('subheader')">
    <!-- navigation starts here  -->
  
<img id="imgslide" class="bgImg" src="images/services1.jpg">
<nav>
    <a href="index.html"><img src="images/logo.png" class="logo" /></a>
    <div class="nav-links" id="navLinks">
        <span class="material-symbols-outlined icon" onclick="hideMenu()">
            close
        </span>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/services">SERVICES</a></li>   
            <li><a href="/blog">BLOG</a></li>
            <li><a href="/contact">CONTACT</a></li>
        </ul>
    </div>
    <span class="material-symbols-outlined icon" style="float:right;width:20px;" onclick="showMenu()">
        menu
    </span>
</nav>
<h1 style="text-align:center">@yield('subtitle')</h1>
      <!-- navigation ends here  -->
  </section>