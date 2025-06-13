 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>New Product</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>
  <link rel="stylesheet" href="css/styleslide.css">

</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper" id="review">
     <h3 class="sub-heading">New Products</h3>
    <h1 class="heading"> what they say</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img
          src="https://images.unsplash.com/photo-1432139555190-58524dae6a55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=876&q=80" />
        <div>
          <h2>Grilled steak with vegetables</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=481&q=80" />
        <div>
          <h2>Pizza</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=410&q=80" />
        <div>
          <h2>Sandwich with boiled egg</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=449&q=80" />
        <div>
          <h2>Toast bread with blueberry</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://images.unsplash.com/photo-1481070555726-e2fe8357725c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" />
        <div>
          <h2>Chicken burger</h2>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js'></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "1",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 4,
    slideShadows: false
  },
  breakpoints: {
    640: {
      slidesPerView: 2
    }
  }
});
  </script>

</body>

</html>
 <!-- <section class="review" id="review">
        <h3 class="sub-heading">New Products</h3>
        <h1 class="heading"> what they say</h1>

        <div class="swiper review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                   
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam voluptates exercitationem
                        inventore cumque numquam similique repellat eaque dolor beatae delectus, quasi aliquid. Dolorem,
                        ex temporibus eos fuga in architecto.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="img/saran.jpg" alt="" srcset="">
                        <div class="user-info">
                            <h3>soun saran</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam voluptates exercitationem
                        inventore cumque numquam similique repellat eaque dolor beatae delectus, quasi aliquid. Dolorem,
                        ex temporibus eos fuga in architecto.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="img/Danem.jpg" alt="" srcset="">
                        <div class="user-info">
                            <h3>lay sovandanem</h3>
                           
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam voluptates exercitationem
                        inventore cumque numquam similique repellat eaque dolor beatae delectus, quasi aliquid. Dolorem,
                        ex temporibus eos fuga in architecto.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="img/Rothana.jpg" alt="" srcset="">
                        <div class="user-info">
                            <h3>saing rathana</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam voluptates exercitationem
                        inventore cumque numquam similique repellat eaque dolor beatae delectus, quasi aliquid. Dolorem,
                        ex temporibus eos fuga in architecto.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="img/nary.jpg" alt="" srcset="">
                        <div class="user-info">
                            <h3>ian keonary</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam voluptates exercitationem
                        inventore cumque numquam similique repellat eaque dolor beatae delectus, quasi aliquid. Dolorem,
                        ex temporibus eos fuga in architecto.</p>
                </div>

            </div>
        </div>
    </section> -->