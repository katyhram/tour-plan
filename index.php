<?php include('header.php')?>
  
      <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img class="stars-img" src="img/star.svg" alt="star" />
                <img class="stars-img" src="img/star.svg" alt="star" />
                <img class="stars-img" src="img/star.svg" alt="star" />
                <img class="stars-img" src="img/star.svg" alt="star" />
                <img class="stars-img" src="img/star.svg" alt="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities +
              Child Stays Free</p>
          </div>
          <!-- ./hotel-info__text -->
    
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
          <!-- hotel-info__rating -->
        </div>
        <!-- hotel-info -->
        <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper-container hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img class="hotel-slider__image" src="img/slide-1.webp" alt="Photo 1">
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img class="hotel-slider__image" src="img/slide-2.webp" alt="Photo 2">
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img class="hotel-slider__image" src="img/slide-3.webp" alt="Photo 3">
              </div>
            </div>
    
            <!-- If we need navigation buttons -->
            <button class="hotel-slider__button hotel-slider__button--prev"></button>
            <button class="hotel-slider__button hotel-slider__button--next"></button>
    
          </div>
          <!-- swiper-container -->
    
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price start as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img src="img/user.svg" alt="Icon: user" class="booking__icon">
                    <span class="booking__description">2 x Guests</span>
                  </div>
    
                  <div class="booking__text">
                    <img src="img/home.svg" alt="Icon: home" class="booking__icon">
                    <span class="booking__description">1 x Room</span>
                  </div>
    
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="img/phone-call.svg" alt="Icon: phone">
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" class="button booking__button">View Other Options</button>
            </div>
            <!-- booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0412124696118!2d98.292552813994!3d7.890757407949416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1615491477338!5m2!1sru!2sru"
                width="100%" height="213" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
    
        </div>
        <!-- hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- ./hotel -->
    
<section class="package">
  <div class="container">
    <h2 class="package__title">Other Packages</h2>
    <div class="package__wrapper">
      <div class="package__block package__block--1">
        <div class="package__bg-image package__bg-image--1">
          <img class="package__image package__image--1" src="img/package-1.jpg" alt="Photo: Photo 1">
        </div>
        <span class="package__offer package__offer--1">Flash Offer</span>
        <div class="package__all-info">
          <div class="stars package__stars">
            <img class="stars-img" src="img/star.svg" alt="star" />
            <img class="stars-img" src="img/star.svg" alt="star" />
            <img class="stars-img" src="img/star.svg" alt="star" />
            <img class="stars-img" src="img/star.svg" alt="star" />
            <img class="stars-img" src="img/star.svg" alt="star" />
          </div>
          <div class="package__information package__information--1">
            <span class="package__name">Hotel Blue Haven</span>
            <p class="package__description">Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna
              llit. Ipsum est fugiat velit ea
              llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim
              laborum magna mollit. Ipsum est fugiat velit ea ullamco do</p>
            <div class="package__info">
              <ul class="package__ul">
                <li class="package__item package__item--mb-1">
                  <div class="package__icon-wrapper">
                    <img class="package__icon" src="img/map-pin.svg" alt="Icon: map">
                  </div>
                  1749 Wheeler Ridge Delaware
                </li>
                <li class="package__item package__item--mb-1">
                  <div class="package__icon-wrapper">
                    <img class="package__icon" src="img/user.svg" alt="Icon: user">
                  </div>
                  2 x Guests
                </li>
                <li class="package__item">
                  <div class="package__icon-wrapper">
                    <img class="package__icon" src="img/home.svg" alt="Icon: home">
                  </div>
                  1 x Room
                </li>
              </ul>
            </div>
            <span class="package__old-price">$ 10,500</span>
            <div class="package__bottom">
              <span class="package__new-price">$ 8,500</span>
              <button data-toggle="modal" class="package__button">Book Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="package__block package__block--2">
        <div class="package__bg-image package__bg-image--2">
          <img class="package__image package__image--2" src="img/package-2.jpg" alt="Photo: Photo 2">
        </div>
        <span class="package__offer">Flash Offer</span>
        <div class="package__information">
          <span class="package__name">LUX* Belle Mare</span>
          <div class="package__info">
            <ul class="package__ul">
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/map-pin.svg" alt="Icon: map">
                </div>
                1749 Wheeler Ridge Delaware
              </li>
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/user.svg" alt="Icon: user">
                </div>
                2 x Guests
              </li>
              <li class="package__item">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/home.svg" alt="Icon: home">
                </div>
                1 x Room
              </li>
            </ul>
          </div>
          <span class="package__old-price">$ 8,500</span>
          <div class="package__bottom">
            <span class="package__new-price">$ 3,000</span>
            <button data-toggle="modal" class="package__button">Book Now</button>
          </div>
        </div>
      </div>
      <div class="package__block package__block--3">
        <div class="package__bg-image package__bg-image--3">
          <img class="package__image package__image--3" src="img/package-3.jpg" alt="Photo: Photo 3">
        </div>
        <span class="package__offer">Flash Offer</span>
        <div class="package__information">
          <span class="package__name">White Palace</span>
          <div class="package__info">
            <ul class="package__ul">
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/map-pin.svg" alt="Icon: map">
                </div>
                1749 Wheeler Ridge Delaware
              </li>
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/user.svg" alt="Icon: user">
                </div>
                2 x Guests
              </li>
              <li class="package__item">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/home.svg" alt="Icon: home">
                </div>
                1 x Room
              </li>
            </ul>
          </div>
          <span class="package__old-price">$ 10,500</span>
          <div class="package__bottom">
            <span class="package__new-price">$ 9,500</span>
            <button data-toggle="modal" class="package__button">Book Now</button>
          </div>
        </div>
      </div>
      <div class="package__block package__block--4">
        <div class="package__bg-image package__bg-image--4">
          <img class="package__image package__image--4" src="img/package-4.jpg" alt="Photo: Photo 4">
        </div>
        <span class="package__offer">Flash Offer</span>
        <div class="package__information">
          <span class="package__name">Luxury Place</span>
          <div class="package__info">
            <ul class="package__ul">
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/map-pin.svg" alt="Icon: map">
                </div>
                1749 Wheeler Ridge Delaware
              </li>
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/user.svg" alt="Icon: user">
                </div>
                2 x Guests
              </li>
              <li class="package__item">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/home.svg" alt="Icon: home">
                </div>
                1 x Room
              </li>
            </ul>
          </div>
          <span class="package__old-price">$ 4,500</span>
          <div class="package__bottom">
            <span class="package__new-price">$ 2,500</span>
            <button data-toggle="modal" class="package__button">Book Now</button>
          </div>
        </div>
      </div>
      <div class="package__block package__block--5">
        <div class="package__bg-image package__bg-image--5">
          <img class="package__image package__image--5" src="img/package-5.jpg" alt="Photo: Photo 5">
        </div>
        <span class="package__offer">Flash Offer</span>
        <div class="package__information">
          <span class="package__name">Hotel Five Star</span>
          <div class="package__info">
            <ul class="package__ul">
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/map-pin.svg" alt="Icon: map">
                </div>
                1749 Wheeler Ridge Delaware
              </li>
              <li class="package__item package__item--mb-1">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/user.svg" alt="Icon: user">
                </div>
                2 x Guests
              </li>
              <li class="package__item">
                <div class="package__icon-wrapper">
                  <img class="package__icon" src="img/home.svg" alt="Icon: home">
                </div>
                1 x Room
              </li>
            </ul>
          </div>
          <span class="package__old-price">$ 6,500</span>
          <div class="package__bottom">
            <span class="package__new-price">$ 3,500</span>
            <button data-toggle="modal" class="package__button">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./package-section -->

    <section class="newsletter parallax-window" data-parallax="scroll" data-src="img/newsletter-bg.jpg" data-speed="0.2"
      data-z-index="-100">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">subscribe to our
          <span class="newsletter-title__strong">NEWSLETTER</span>
        </h2>
        <form action="send.php" class="subscribe newsletter__search" method="POST">
          <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required>
          <button class="subscribe__button">Send</button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                  </div>
                  <!-- /.rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                  Issue was only
                  that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of
                  gallery which
                  were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not
                  good as per
                  atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good.
                  Overall it
                  was a good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-2-1.jpg" alt="Photo: John Brown" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">John Brown</h3>
                  <span class="reviews-slider__date">Stayed 25 Jan, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                    <img class="stars-img" src="img/star.svg" alt="star" />
                  </div>
                  <!-- /.rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic ipsam a quidem suscipit incidunt odit
                  doloremque, expedita placeat perspiciatis corrupti veniam eos nemo deserunt saepe quae nulla, quia
                  dolorum. Quia architecto sequi eius modi quos doloremque debitis exercitationem deserunt eos voluptate
                  qui, repellat beatae odit tempora quaerat! Similique hic architecto ex provident. Ut, soluta sapiente
                  possimus corporis inventore explicabo vel doloribus delectus totam voluptas maxime repudiandae ducimus
                  ullam, consectetur obcaecati sed modi autem. Dolor temporibus magni, impedit harum quam ullam distinctio
                  quod natus, placeat nemo, ex autem eius omnis. Earum explicabo, mollitia consectetur laudantium voluptate
                  officia tempore nesciunt harum? Quod!
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          <button class="reviews-slider__button reviews-slider__button--prev"></button>
          <button class="reviews-slider__button reviews-slider__button--next"></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->
    
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card" data-aos="fade-up" data-aos-delay="100">
            <img src="img/activity-1.jpg" alt="The curious corner of chamarel" class="card__image">
            <h3 class="card__title">The curious corner of chamarel</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- ./card -->
          <div class="card activities__card" data-aos="fade-up" data-aos-delay="300">
            <img src="img/activity-2.jpg" alt="Gymkhana club golf course" class="card__image">
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- ./card -->
          <div class="card activities__card" data-aos="fade-up" data-aos-delay="500">
            <img src="img/activity-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
            <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- ./card -->
          <div class="card activities__card" data-aos="fade-up" data-aos-delay="700">
            <img src="img/activity-4.jpg" alt="The blue marine discovery quest" class="card__image">
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- ./card -->
        </div>
      </div>
    </section>
<?php include('footer.php')?>