<header class="header header--light">
  <div class="header__wrap">
    <!-- Header Logo -->
    <div class="header__logo">
      <a class="header__logo__wrap" href="/">
        <img class="header__logo__image" src="https://res.cloudinary.com/dblakenzcloud/image/upload/v1581653006/Goodstays/logo-white.svg" alt="Goodstays">
      </a>
    </div>

    <!-- Header icons -->
    <ul class="header__icons">
      <li class="header__icons__item">
        <a class="header__icons__icon" href="https://www.facebook.com/goodstays/" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="header__icons__item">
        <a class="header__icons__icon" href="https://www.instagram.com/goodstays/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li class="header__icons__item">
        <span class="header__icons__icon">
          <i class="fas fa-phone-square"></i>
        </span>
      </li>
      <li class="header__icons__item">
        <a class="header__icons__icon" href="/contact-us/" target="_blank">
          <i class="fas fa-map-marker-alt"></i>
        </a>
      </li>
    </ul>

    <!-- Header Menu Button -->
    <button class="header__nav-btn" id="header-nav-btn">
      <span class="header__nav-btn__line header__nav-btn__line--first"></span>
      <span class="header__nav-btn__line header__nav-btn__line--second"></span>
      <span class="header__nav-btn__line header__nav-btn__line--third"></span>
      <span class="header__nav-btn__text"></span>
    </button>
  </div>
</header>

@section('header-scripts')
<script type="text/javascript">
    var navButton = document.getElementById("header-nav-btn");
    var navMenu = document.getElementById("nav-menu");

    navButton.addEventListener("click", toggleMenuNav);

    function toggleMenuNav (){
      navButton.classList.toggle("header__nav-btn--active");
      navMenu.classList.toggle("nav--open");
    }
  </script>
@stop
