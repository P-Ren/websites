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
          src="img/pos_78H.png" />
        <div>
          <h2>RANGE HOOD : 78H25AC90</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="img/pos_79H.png" />
        <div>
          <h2>RANGE HOOD : 798H25DC90</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="img/pos_97H.png" />
        <div>
          <h2>RANGE HOOD : 78H25AC90</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="img/pos_88H.png" />
        <div>
          <h2>RANGE HOOD : 788H25BL90</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="img/pos_2882.png" />
        <div>
          <h2>GAS HOB : 2882Q</h2>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="img/pos_2872.png" />
        <div>
          <h2>GAS HOB : 2872Q</h2>
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