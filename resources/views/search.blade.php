<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Shopping Cart</title>
</head>
<body>
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
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
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
  

    <div class="cart-container">
        <h1>Your Shopping Cart</h1>
        <div class="cart-item">
            <img src="product1.jpg" alt="Product 1">
            <div class="item-details">
                <h2>Product 1</h2>
                <p>Description of Product 1.</p>
                <p>Price: $19.99</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="product2.jpg" alt="Product 2">
            <div class="item-details">
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
                <p>Price: $29.99</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="product2.jpg" alt="Product 2">
            <div class="item-details">
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
                <p>Price: $29.99</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="product2.jpg" alt="Product 2">
            <div class="item-details">
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
                <p>Price: $29.99</p>
            </div>
        </div>
        <div class="cart-item">
            <img src="product2.jpg" alt="Product 2">
            <div class="item-details">
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
                <p>Price: $29.99</p>
            </div>
        </div>
        <div class="cart-total">
            <p>Total: $49.98</p>
            <button class="checkout-button">Checkout</button>
        </div>
    </div>
</body>
</html>
