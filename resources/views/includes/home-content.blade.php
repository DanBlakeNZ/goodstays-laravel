<section class="home-content-wrapper">

  <div class="card_slider slick-slider-cards">

    <!-- CARD 1 -->
    <div class="card-grid__item">
      <a class="card card" title="property name" target="_blank">

        <div class="card__flag">
          <span class="card__flag-text">Wanaka</span>
        </div>

        <div class="card__image">
          <img src="https://res.cloudinary.com/dblakenzcloud/image/upload/v1582604467/Goodstays/card_1.jpg" alt="">
        </div>

        <div class="card__content">
          <p class="card__title">Hill View Place</p>
          <p class="card__subtitle">From $300 NZD</p>
          <p class="card__text">
            HILL VIEW PLACE PROPERTY SUMMARY: Set in central Wanaka with sweeping vistas of the nearby golf course and township, Hillview Place offers all the comf...
          </p>
          <ul class="card__icons">
            <li class="card__icons__icon">
              12 <i class="fas fa-user"></i>
            </li>
            <li class="card__icons__icon">
              4.5 <i class="fas fa-bed"></i>
            </li>
            <li class="card__icons__icon">
              2.5 <i class="fas fa-bath"></i>
            </li>
          </ul>
        </div>
      </a>
    </div>

    <!-- CARD 2 -->
    <div class="card-grid__item">
      <a class="card card" title="property name" target="_blank">

        <div class="card__flag card__flag--orange">
          <span class="card__flag-text">Wanaka</span>
        </div>

        <div class="card__image">
          <img src="https://res.cloudinary.com/dblakenzcloud/image/upload/v1582604467/Goodstays/card_2.jpg" alt="">
        </div>

        <div class="card__content">
          <p class="card__title">Peninsula Bay Paradise</p>
          <p class="card__subtitle">From $300 NZD</p>
          <p class="card__text">
            PENINSULA BAY PARADISE – UNIQUE ESCAPE IN A STUNNING LOCATION SUMMARY: Peninsula Bay Paradise is a newly built, cedar clad, two-story home situated in...
          </p>
          <ul class="card__icons">
            <li class="card__icons__icon">
              6 <i class="fas fa-user"></i>
            </li>
            <li class="card__icons__icon">
              4 <i class="fas fa-bed"></i>
            </li>
            <li class="card__icons__icon">
              2 <i class="fas fa-bath"></i>
            </li>
          </ul>
        </div>
      </a>
    </div>
  </div>

  @section('home-content-scripts')
    <script type="text/javascript">

        // Cards slider
        jQuery(document).ready(function($) {
          $('.slick-slider-cards').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
          });
        });
    </script>
  @stop


</section>
