<?php
/* Smarty version 3.1.48, created on 2025-01-12 23:34:27
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678443730def42_41732259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1736704383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 3,
  ),
),false)) {
function content_678443730def42_41732259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1625041751678443730da983_80402735';
?>
<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    hity najnowszej dostawy
  </h2>
  <div class="swiper-container autoplay-swiper">
    <div class="swiper-wrapper">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="swiper-slide">
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</section>

<div class="full-width-blue-bar">
<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/blue-bar.jpeg" alt="Najnowsza dostawa">
</div>

<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    <div class="products-section-title-item active pointer">TOP 7 OSTATNIEJ DOSTAWY</div>
    <div class="products-section-title-item pointer">NOWOŚCI</div>
    <div class="products-section-title-item pointer">PROMOCJA</div>
  </h2>
  <div class="swiper-container no-autoplay-swiper" style="margin-top:80px;">
    <div class="swiper-wrapper">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="swiper-slide">
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</section>

<div class="super-banner">
  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/banner-spider.png" alt="Najnowsza dostawa">
  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/banner-super.png" alt="Najnowsza dostawa">
</div>

<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    Polecane produkty
  </h2>
  <div class="swiper-container no-autoplay-swiper">
    <div class="swiper-wrapper">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="swiper-slide">
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</section>



<style>

   @font-face {
     font-family: 'Blogger Sans Medium';
     src: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/fonts/blogger-sans.medium.ttf') format('truetype');
     font-weight: 300;
     font-style: normal;
   }
 
   @font-face {
     font-family: 'Blogger Sans Regular';
     src: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/fonts/blogger-sans.regular.ttf') format('truetype');
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
<?php echo '<script'; ?>
 src="https://unpkg.com/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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



<?php echo '</script'; ?>
>
<?php }
}
