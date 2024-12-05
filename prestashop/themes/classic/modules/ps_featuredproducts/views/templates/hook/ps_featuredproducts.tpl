<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    hity najnowszej dostawy
  </h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      {foreach from=$products item=product}
        <div class="swiper-slide">
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        </div>
      {/foreach}
    </div>
    <!-- Dodaj nawigację Swiper -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<style>
.featured-products {
    margin: 0 auto;
    padding: 0;
    width: 60%; /* Większa szerokość dla większej liczby produktów */
}

.products-section-title {
    color: #022944;
    font-family: "Caveat Brush";
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 16px;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 20px;
}

.swiper-container {
    width: 100%;
    overflow: hidden;
}

.swiper-slide {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    width: auto;
    padding: 10px; /* Odstęp wokół produktów */
}

.swiper-slide img {
    max-width: 100%;
    max-height: 100%;
}

.swiper-button-next,
.swiper-button-prev {
    color: #022944;
    opacity: 0.8;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    opacity: 1;
}
</style>

<!-- Dodaj Swiper JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 7, // Wyświetl 7 produktów jednocześnie
      spaceBetween: 10, // Odstęp między slajdami
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 4000, // Automatyczne przewijanie co 4 sekundy
        disableOnInteraction: false,
      },
      breakpoints: {
        320: { slidesPerView: 2 }, // Na małych ekranach
        768: { slidesPerView: 4 }, // Na średnich ekranach
        1024: { slidesPerView: 5 }, // Na dużych ekranach
        1440: { slidesPerView: 7 }, // Na bardzo dużych ekranach
      }
    });
  });
</script>
