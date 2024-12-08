{** 
  * Copyright since 2007 PrestaShop SA and Contributors
  * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
  *}
 
 <link href="https://fonts.cdnfonts.com/css/blogger-sans" rel="stylesheet">
 <link rel="stylesheet" href="{$theme_assets}/css/custom.css" type="text/css" media="all" />
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />
 
 
 {block name='header_banner'}
   <div class="header-banner">
     {hook h='displayBanner'}
   </div>
 {/block}
 
 {block name='header'}
 <header class="header">
  <div class="header-container">
   <div class="promo-bar">
     <div class="promo-content">
       <strong>Wielka promocja Black Week!</strong>
       <div id="counter" class="d-flex align-items-center">
         <div class="time-unit day">
           <span>4</span>DNI
         </div>
         <div class="time-unit hour">
           <span>2</span>GODZ
         </div>
         <div class="time-unit min">
           <span>16</span> MIN
         </div>
         <div class="time-unit sek">
           <span style="background-color: #ea2221;">15</span> SEK
         </div>
       </div>
       <div class="btn-wrap">
         <a class="my-btn radius" href="https://www.atomcomics.pl/kategoria/weekendowa-promocja">ZOBACZ »</a>
       </div>
     </div>
   </div>
 
 
 
   <!-- Górny pasek kontaktowy -->
   <div class="top-bar">
     <div class="custom-container container d-flex align-items-center justify-content-between" id="login-bar">
       <!-- Grupa 1: Sekcja kontaktowa po lewej -->
       <div class="top-bar-left">
         <strong><a href="mailto:sklep@atomcomics.pl" class="email"><img src="{$base_dir}/themes/classic/assets/img/footer_ico_mail.png" alt="Najnowsza dostawa"> SKLEP@ATOMCOMICS.PL</a></strong>
         <a href="tel:795441424" class="phone"><img src="{$base_dir}/themes/classic/assets/img/footer_ico_tel.png" alt="Najnowsza dostawa"> 795 441 424</a>
       </div>
 
       <!-- Grupa 2: Linki na środku -->
       <div class="top-bar-center">
         <a href="#">INFORMACJE</a>
         <span class="separator">:</span>
         <a href="#">ATOMOWY BLOG</a>
         <span class="separator">:</span>
         <a href="#">#52KOMIKSY</a>
         <span class="separator">:</span>
         <a href="#">ODWIEDŹ NAS W KRAKOWIE</a>
       </div>
 
       <!-- Grupa 3: Linki po prawej -->
       <div class="top-bar-right">
         <a href="#">ZAREJESTRUJ SIĘ</a>
         <span class="separator">:</span>
         <a href="https://localhost:8080/admin123">ZALOGUJ SIĘ</a>
       </div>
     </div>
   </div>
 
   <!-- Główny pasek nawigacyjny -->
   <div class="main-header">
     <div class="container custom-container">
       <!-- Pierwsza linia -->
       <div class="row header-row align-items-center py-2" id="r1">
         <!-- Logo -->
         <div class="col-md-2" id="_desktop_logo">
           {if $shop.logo_details}
             {if $page.page_name == 'index'}
               <h1>
                 {renderLogo}
               </h1>
             {else}
               {renderLogo}
             {/if}
           {/if}
         </div>
 
         <!-- Wyszukiwarka -->
         <div class="col-md-7">
           <form action="{$urls.pages.search}" method="get" class="search-bar">
             <input type="text" name="s" placeholder="Wpisz tytuł, autora lub nazwę" />
             <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
           </form>
         </div>
 
         <!-- Koszyk -->
         <div class="col-md-3 d-flex justify-content-end align-items-center">
           <div class="cart-info">
             <a href="{$urls.pages.cart}" style="color:#fff">
               <img src="{$base_dir}/themes/classic/assets/img/basket_ico.png" alt="Najnowsza dostawa"> <span class="cart-count">0</span> 0,00 zł
             </a>
           </div>
         </div>
       </div>
 
       <!-- Druga linia -->
       <div class="row header-row" id="r2">
         <div class="col-12" id="menu-bar">
           <nav class="menu d-flex justify-content-between align-items-center">
             <div class="menu-item">
               <a href="#" style="color:#fff">PREZENT<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">

               </div>
             </div>
             <div class="menu-item">
              <a href="#" style="color:#fff">24H<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">

               </div>
             </div>
             <div class="menu-item">
               <a href="https://localhost:8080/17-wydania-zbiorcze" style="color:#fff">WYDANIA ZBIORCZE<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">
                 <a href="https://localhost:8080/18-dc">KOMIKSY DC</a>
                 <a href="https://localhost:8080/19-marvel">KOMIKSY MARVEL</a>
               </div>
             </div>
             <div class="menu-item">
               <a href="https://localhost:8080/20-zeszyty" style="color:#fff">ZESZYTÓWKI<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">
                 <a href="https://localhost:8080/21-dc">ZESZYTY DC</a>
                 <a href="https://localhost:8080/22-image">ZESZYTY IMAGE</a>
               </div>
             </div>
             <div class="menu-item">
               <a href="https://localhost:8080/14-serie" style="color:#fff">SERIE<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">
                 <a href="https://localhost:8080/15-komiksy-cyberpunk">KOMIKSY CYBERPUNK</a>
                 <a href="https://localhost:8080/16-komiksy-fortnite">KOMIKKSY FORTNITE</a>
               </div>
             </div>
             <div class="menu-item">
               <a href="#" style="color:#fff">MANGI I NOWELKI<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">

               </div>
             </div>
             <div class="menu-item">
               <a href="#" style="color:#fff">DLA KOLEKCJONERA<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
               <div class="dropdown">

               </div>
             </div>
             <div class="menu-item">
               <a href="https://localhost:8080/10-gatunki" style="color:#fff">GATUNKI<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
                 <div class="dropdown">
                   <a href="https://localhost:8080/12-komiksy-dla-dzieciF">KOMIKSY DLA DZIECI</a>
                   <a href="https://localhost:8080/11-komiksy-dla-doroslych">KOMIKSY DLA DOROSŁYCH</a>
                    <a href="https://localhost:8080/13-komiksy-serialowe">KOMIKSY SERIALOWE</a>
                 </div>
             </div>
             <div class="menu-item">
               <a href="#" style="color:#fff">NOWOŚCI<img src="{$base_dir}/themes/classic/assets/img/image.png" style="width: 10px;"/></a>
                 <div class="dropdown">

                 </div>
             </div>
           </nav>
         </div>
       </div>
     </div>
   </div>
  </div>
 </header>
</div>
{/block}

<div class="slider-container">
  <div class="slider">
      <img src="{$base_dir}/themes/classic/assets/img/image1.jpg" alt="Image 1">
      <img src="{$base_dir}/themes/classic/assets/img/image3.jpg" alt="Image 2">
      <img src="{$base_dir}/themes/classic/assets/img/image2.jpg" alt="Image 3">
      <img src="{$base_dir}/themes/classic/assets/img/image4.jpg" alt="Image 4">
  </div>
</div>
 
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
 </style>