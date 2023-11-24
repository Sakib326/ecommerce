<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookHouse</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png" />
    <!--font awesome cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!--swiper slider cdn link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <!--css file link-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!--header section-->

    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"><i class="fas fa-book"></i>bookHouse</a>

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="search here..."
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>
         
         

 @if (Route::has('login'))
                    @auth
                        <a href="/profile" class="fas fa-user"></a>
                         <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-shopping-cart"></a>
             <button type="button" style="padding:8px;"><span><form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></span></button>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif



     
        </div>
      </div>

      <div class="header-2">
        <nav class="navbar">
          <a href="#home">home</a>
          <a href="#featured">featured</a>
          <a href="#collections">collections</a>
          <a href="#reviews">reviews</a>
          <a href="#blogs">blogs</a>
        </nav>
      </div>
    </header>

    <!--header section end-->

    <!--bottom navbar-->

    <nav class="bottom-navbar">
      <a href="#home" class="fas fa-home"></a>
      <a href="#featured" class="fas fa-list"></a>
      <a href="#collections" class="fas fa-tags"></a>
      <a href="#reviews" class="fas fa-comments"></a>
      <a href="#contact" class="fas fa-blog"></a>
    </nav>

    <!--bottom navbar end-->

    <!--login form-->

    <div class="login-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>

      <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input
          type="email"
          name=""
          class="box"
          placeholder="enter your email"
          id=""
        />
        <span>password</span>
        <input
          type="password"
          name=""
          class="box"
          placeholder="enter your password"
          id=""
        />
        <div class="checkbox">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">remember me</label>
        </div>

        <input type="submit" value="sign in" class="btn" />
        <p>
          forget password ? <a href="sanaullahsdoc@gmail.com">click here</a>
        </p>
        <p>don't have an account ? <a href="registration.html">creat one</a></p>
      </form>
    </div>

    <!--login form end-->

    <!--home section-->

<section class="home" id="home">
    <div class="row">
        <div class="content">
            <h3>upto 75% off</h3>
          <p>
    Discover new worlds and ideas with our carefully curated collection of books. From thrilling adventures to
    enlightening insights, find your next favorite read. Explore the joy of reading today!
</p>
            <a href="/#featured" class="btn">shop now</a>
        </div>

        <div class="books-slider">
            <div class="wrapper">
                @foreach ($books->take(6) as $book)
                    <a href="#">
                        <img src="{{ asset($book->image_url) }}" alt="{{ $book->title }}" />
                    </a>
                @endforeach
            </div>
            <img src="image/stand.png" class="stand" alt="" />
        </div>
    </div>
</section>



    <!--home section end-->

    <!--icon section-->

    <section class="icons-container">
      <div class="icons">
        <i class="fas fa-plane"></i>
        <div class="content">
          <h3>free shipping</h3>
          <p>order over $100</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
          <h3>secure payment</h3>
          <p>100% secure payment</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
          <h3>easy returns</h3>
          <p>10 days easy returns</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
          <h3>24/7 support</h3>
          <p>24/7 customer service</p>
        </div>
      </div>
    </section>

    <!--icon section end-->

    <!--featured section-->

    <section class="featured" id="featured">
        <h1 class="heading"><span>featured books</span></h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                @foreach ($books as $book)
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset($book->image_url) }}" alt="{{ $book->title }}" />
                        </div>
                        <div class="content">
                            <h3>{{ $book->title }}</h3>
                            <div class="price">${{ $book->price }} <span>${{ $book->original_price }}</span></div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!--featured section end-->

    <!--newsletter section-->


<section class="newsletter">
    <form id="subscribeForm" action="{{ route('subscribe') }}" method="POST">
        @csrf
        <h3>subscribe for latest updates</h3>
        <input type="email" name="email" placeholder="enter your email" class="box" required />
        <input type="submit" value="subscribe" class="btn" />
    </form>
</section>

<script>
    document.getElementById('subscribeForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior
        subscribe(); // Call the function to handle the AJAX submission
    });

  function subscribe() {
    var form = document.getElementById('subscribeForm');
    var submitButton = form.querySelector('input[type="submit"]');
    var formData = new FormData(form);

    // Disable the submit button to prevent multiple submissions
    submitButton.setAttribute('disabled', 'disabled');

    // Perform the AJAX request
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response
        console.log(data);

        // Check for success
        if (data.success) {
            alert(data.message); // Success message
            // Clear input fields
            form.reset();
        } else {
            alert('An error occurred. Please try again.'); // Error message
        }

        // Re-enable the submit button
        submitButton.removeAttribute('disabled');
    })
    .catch(error => {
        // Handle errors
        console.error('Error:', error);
        alert('An error occurred. Please try again.'); // Error message

        // Re-enable the submit button
        submitButton.removeAttribute('disabled');
    });
}

</script>





    <!--newsletter section section end-->

    <!--arrivals section-->

    <section class="arrivals" id="arrivals">
    <h1 class="heading"><span>new arrivals</span></h1>

    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
            @foreach ($books as $book)
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset($book->image_url) }}" alt="{{ $book->title }}" />
                    </div>

                    <div class="content">
                        <h3>{{ $book->title }}</h3>
                        <div class="price">${{ $book->price }}<span>${{ $book->original_price }}</span></div>
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $book->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="fas fa-star-half-alt"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>





    <!--arrivals section end-->

    <!--deal section-->

    <section class="deal">
      <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error
          expedita suscipit, modi atque facere dolor cumque quibusdam deserunt!
          Quasi, delectus.
        </p>
        <a href="#" class="btn">shop now</a>
      </div>

      <div class="image">
        <img src="image/deal-img.jpg" alt="" />
      </div>
    </section>

    <!--deal section end-->

    <!--review section-->

    <section class="reviews" id="reviews">
      <h1 class="heading"><span>client's reviews</span></h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/pic-1.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-2.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-3.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-6.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-4.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-5.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
              commodi ipsa dolorum tempora modi esse ratione ipsam et. Ea,
              possimus!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--review section end-->

    <!--blog section-->

    <section class="blogs" id="blogs">
      <h1 class="heading"><span>our blog</span></h1>

      <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="image">
              <img src="image/blog-1.jpg" />
            </div>

            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente a reiciendis dolorem magnam facilis assumenda ullam
                impedit vero dignissimos debitis!
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/blog-2.jpg" />
            </div>

            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente a reiciendis dolorem magnam facilis assumenda ullam
                impedit vero dignissimos debitis!
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/blog-3.jpg" />
            </div>

            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente a reiciendis dolorem magnam facilis assumenda ullam
                impedit vero dignissimos debitis!
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/blog-4.jpg" />
            </div>

            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente a reiciendis dolorem magnam facilis assumenda ullam
                impedit vero dignissimos debitis!
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/blog-5.jpg" />
            </div>

            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sapiente a reiciendis dolorem magnam facilis assumenda ullam
                impedit vero dignissimos debitis!
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--blog section end-->

    <!--footer section-->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>our location</h3>
          <a href="#"><i class="fas fa-map-marker-alt"></i>india</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>usa</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>russia</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>france</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>japan</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>africa</a>
        </div>

        <div class="box">
          <h3>quic link</h3>
          <a href="#"><i class="fas fa-arrow-right"></i>home</a>
          <a href="#"><i class="fas fa-arrow-right"></i>featured</a>
          <a href="#"><i class="fas fa-arrow-right"></i>arrivals</a>
          <a href="#"><i class="fas fa-arrow-right"></i>reviews</a>
          <a href="#"><i class="fas fa-arrow-right"></i>blog</a>
        </div>

        <div class="box">
          <h3>extarnal link</h3>
          <a href="#"><i class="fas fa-arrow-right"></i>account info</a>
          <a href="#"><i class="fas fa-arrow-right"></i>ordered iteams</a>
          <a href="#"><i class="fas fa-arrow-right"></i>privacy policy</a>
          <a href="#"><i class="fas fa-arrow-right"></i>payment method</a>
          <a href="#"><i class="fas fa-arrow-right"></i>our service</a>
        </div>

        <div class="box">
          <h3>contact us</h3>
          <a href="#"><i class="fas fa-phone"></i>01996582130</a>
          <a href="#"><i class="fas fa-phone"></i>01996582130</a>
          <a href="#"><i class="fas fa-envelope"></i>sani.m4yours@gmail.com</a>
          <img src="image/worldmap.png" class="map" alt="" />
        </div>
      </div>

      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="credit">created by <span>Sanaullah Efte Sani</span></div>
    </section>

    <!--footer section end-->

    <!--loader section-->

    <div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
    </div>

    <!--loader section end-->

    <!--swiper js cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--js file link-->
    <script src="js/script.js"></script>
  </body>
</html>
