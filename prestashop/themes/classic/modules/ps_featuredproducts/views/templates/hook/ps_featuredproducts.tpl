<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    hity najnowszej dostawy
  </h2>
  <div class="swiper-container autoplay-swiper">
    <div class="swiper-wrapper">
      {foreach from=$products item=product}
        <div class="swiper-slide">
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        </div>
      {/foreach}
    </div>
  </div>
</section>

<div class="full-width-blue-bar">
<img src="{$base_dir}/themes/classic/assets/img/blue-bar.jpeg" alt="Najnowsza dostawa">
</div>

<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    <div class="products-section-title-item active pointer">TOP 7 OSTATNIEJ DOSTAWY</div>
    <div class="products-section-title-item pointer">NOWOŚCI</div>
    <div class="products-section-title-item pointer">PROMOCJA</div>
  </h2>
  <div class="swiper-container no-autoplay-swiper" style="margin-top:80px;">
    <div class="swiper-wrapper">
      {foreach from=$products item=product}
        <div class="swiper-slide">
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        </div>
      {/foreach}
    </div>
  </div>
</section>

<div class="super-banner">
  <img src="{$base_dir}/themes/classic/assets/img/banner-spider.png" alt="Najnowsza dostawa">
  <img src="{$base_dir}/themes/classic/assets/img/banner-super.png" alt="Najnowsza dostawa">
</div>

<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    Polecane produkty
  </h2>
  <div class="swiper-container no-autoplay-swiper">
    <div class="swiper-wrapper">
      {foreach from=$products item=product}
        <div class="swiper-slide">
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        </div>
      {/foreach}
    </div>
  </div>
</section>



<style>

   @font-face {
     font-family: 'Blogger Sans Medium';
     src: url('{$base_dir}/themes/classic/assets/fonts/blogger-sans.medium.ttf') format('truetype');
     font-weight: 300;
     font-style: normal;
   }
 
   @font-face {
     font-family: 'Blogger Sans Regular';
     src: url('{$base_dir}/themes/classic/assets/fonts/blogger-sans.regular.ttf') format('truetype');
     font-weight: 300;
     font-style: normal;
   }




 .custom-thumbnail {
    width: 150px ;
    height: 230px ;
    object-fit: cover;
    border-radius: 5px;
  }

.product-description-container {
  position: relative;
  width: 150px; /* Dopasuj do rozmiaru zdjęcia */
  height: 250px; /* Dopasuj do rozmiaru zdjęcia */
}

.product-description {
  display: block;
}



.product-description-container:hover .product-description {
  display:block;
}

  .btn-primary {
    width: 125px;
    height: 32px;
    border-radius: 3px;
    background-color: #119ee1;
    padding: 0;
    border: 0 !important;
    line-height: 1;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0a87c4;
  }

  .swiper-wrapper{
    box-sizing: inherit !important;
  }

  .swiper-slide {
     padding: 5px !important;
  }

  .product-add-to-cart {
  display: flex;
  justify-content: center; /* Wyśrodkowanie poziome */
  align-items: center;    /* Wyśrodkowanie pionowe, jeśli konieczne */
  margin-top: 10px;       /* Opcjonalnie: odstęp od góry */
}






   .product-description {
  width: 100%;
  color: white;
  text-align: center;
  font-family: 'Blogger Sans Regular', sans-serif;

  position: absolute !important;
    display: none;
    bottom: -20px;
    background: #ffffff;
    z-index: 1;
    width: 100%;
    text-align: left;
    padding: 20px 10px;
    border-radius: 3px;

}

     .custom-thumbnail {
    width: 150px !important;
    height: 230px !important;
     }

.super-banner img:nth-child(2) {
    margin-top: 5px;
}

.full-width-blue-bar {
    position: absolute;
    margin-top: 90px;
    width: 100%; /* Cała szerokość strony */
    height: 150px; /* Dostosuj wysokość według potrzeb */
    z-index: -1; /* Ustaw pasek za innymi elementami */
}

section {
    position: relative;
}


.featured-products {
    margin: 0 auto;
    padding: 0;
    width: 62.5%; /* Większa szerokość dla większej liczby produktów */
}

.products-section-title-item.active {
  color: #009ee1;
}

.products-section-title-item{

  display: inline-block;
    margin-right: 45px;
    z-index: 10;
    position: relative;
    color: #6a6969;
}

.pointer{
  cursor: pointer;
}

.super-banner{
  margin: 0 auto;
  padding: 0 0;
  width:62.5%;
  display:flex;
  -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;

}

.super-banner img{
  width: 50%;
  height: auto;
  margin: 0;
}

.products-section-title {
    color: #022944;
    font-family: "Caveat Brush";
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 16px;
    text-transform: uppercase;
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

.breadcrumb-wrapper{
  display: none;
}
</style>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Pierwsza sekcja z autoplay
  const swiperAutoplay = new Swiper('.autoplay-swiper', {
    loop: true,
    slidesPerView: 7, // Wyświetl 7 produktów jednocześnie
    spaceBetween: 5, // Odstęp między slajdami
    autoplay: {
      delay: 4000, // Czas opóźnienia przed przejściem do kolejnego slajdu
      disableOnInteraction: false, // Pozwala na kontynuowanie po interakcji użytkownika
    },
    breakpoints: {
      320: { slidesPerView: 2 }, // Na małych ekranach
      768: { slidesPerView: 4 }, // Na średnich ekranach
      1024: { slidesPerView: 5 }, // Na dużych ekranach
      1440: { slidesPerView: 7 }, // Na bardzo dużych ekranach
    }
  });

  // Druga i trzecia sekcja bez autoplay
  const swiperNoAutoplay = new Swiper('.no-autoplay-swiper', {
    loop: true,
    slidesPerView: 7, // Wyświetl 7 produktów jednocześnie
    spaceBetween: 5, // Odstęp między slajdami
    breakpoints: {
      320: { slidesPerView: 2 }, // Na małych ekranach
      768: { slidesPerView: 4 }, // Na średnich ekranach
      1024: { slidesPerView: 5 }, // Na dużych ekranach
      1440: { slidesPerView: 7 }, // Na bardzo dużych ekranach
    }
  });

  // Obsługa kliknięć na elementy "TOP 7 OSTATNIEJ DOSTAWY", "NOWOŚCI", "PROMOCJA"
  const titleItems = document.querySelectorAll('.products-section-title-item');

  titleItems.forEach(item => {
    item.addEventListener('click', function() {
      // Usuń klasę 'active' z wszystkich elementów
      titleItems.forEach(i => i.classList.remove('active'));
      // Dodaj klasę 'active' do klikniętego elementu
      item.classList.add('active');
    });
  });
});



</script>
