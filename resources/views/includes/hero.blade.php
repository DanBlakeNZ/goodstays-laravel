<div class="hero hero--full">
  <div class="hero__inner">
    <div class="hero__content">
      <div class="hero__wrap wrap--narrow">
        <div class="hero__intro">
          <h1>
            <img src="https://res.cloudinary.com/dblakenzcloud/image/upload/v1582158469/Goodstays/home-intro.png" alt="Your Good Holiday Starts Here">
          </h1>
          <p>Explore our extensive selection of accommodation for holidays and short stays in <a href="/accommodation/queenstown/">Queenstown</a>, <a href="/accommodation/wanaka/">Wanaka</a>, <a href="/accommodation/jacks-point/">Jack's Point</a> &amp; <a href="/accommodation/lake-hawea-accommodation/">Lake Hawea</a></p>
        </div>
        <div class="hero__form hero__form--home">
          <form id="Form_AccommodationSearchForm" action="" method="post">
            <div class="flex-form">

              <div class="flex-form__field">
                <div class="flex-form__field-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <input type="text" name="checkIn" id="checkIn" autocomplete="off" aria-label="Use the arrow keys to pick a date" placeholder="Check-in">
              </div>

              <div class="flex-form__field">
                <div class="flex-form__field-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <input type="text" name="checkOut" id="checkOut" autocomplete="off" aria-label="Use the arrow keys to pick a date" placeholder="Check-out">
              </div>

              <div class="flex-form__field">
                <div class="flex-form__field-icon">
                  <i class="fas fa-user"></i>
                </div>
                <span>Guests</span>
              </div>

              <div class="flex-form__field">
                <div class="flex-form__field-icon">
                  <i class="fas fa-door-open"></i>
                </div>
                <input type="text" name="propertyName" id="propertyName" autocomplete="off" placeholder="Property name">
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@section('page-scripts')
  <script src="pikaday.js"></script>
  <script type="text/javascript">
      var minDate = new Date();
      var checkInPicker = new Pikaday({
        field: document.getElementById('checkIn'),
        minDate: minDate
      });
      // TO DO:
      // Min date set to check in date
      var checkOutPicker = new Pikaday({
        field: document.getElementById('checkOut'),
        minDate: minDate
      });
  </script>
@stop


