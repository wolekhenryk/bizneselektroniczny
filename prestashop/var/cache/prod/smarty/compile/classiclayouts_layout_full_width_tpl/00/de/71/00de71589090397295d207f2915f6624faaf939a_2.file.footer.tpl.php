<?php
/* Smarty version 3.1.48, created on 2024-12-05 00:11:48
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6750e1b4a73481_65363249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00de71589090397295d207f2915f6624faaf939a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1733351353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6750e1b4a73481_65363249 (Smarty_Internal_Template $_smarty_tpl) {
?>  
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
 
   .upper-footer-box, .single-col-wrapper, .single-col-wrapper span {
     font-family: 'Blogger Sans Medium', Arial, sans-serif;
   }
 
   .upper-footer-box {
     background-color: #119ee1;
     color: white;
     height: 100px;
     display: flex;
     align-items: center; 
     justify-content: center; 
     width: 100%;
     margin-right: auto;
     margin-left: auto;
   }
   
   .upper-footer-box .conte {
     display: flex;
     align-items: center;
     width: 62.5%;
   }
   
   .upper-footer-box .row_f {
     display: flex;
     align-items: center;
     width: 100%;
     padding-down: 20px;
     height: 100px;
   }
   
   .upper-footer-box .col-3:first-child {
     width: 32%; 
     text-align: left;
   }
   
   .upper-footer-box .col-3:nth-child(2) {
     width: 24%;
     text-align: left;
   }
   
   .upper-footer-box .col-3:nth-child(3) {
     width: 22%;
   }
   
   .upper-footer-box .col-3:nth-child(4) {
     width: 22%; 
     text-align: left;
   }
   
   .single-col-wrapper {
     display: flex;
     flex-direction: row; 
     align-items: center;
     justify-content: center;
   }
   
   .single-col-wrapper img {
     max-width: 100%;
     vertical-align: middle;
     border: 0;
   }
   
   .single-col-wrapper span {
     font-size: 18px;
     font-weight: 500;
     line-height: 19px;
     margin-left: 20px;
     white-space: nowrap;
   }
 
   footer {
     background-color: #032944; 
     color: #fff; 
     font-family: 'Blogger Sans Regular', Arial, sans-serif; 
   }
   
   .innerfooter.conte {
     display: flex;
     flex-direction: column;
     justify-content: space-between;
     align-items: center;
     padding-top: 40px;
     margin: auto;
   }
 
   .overall {
     list-style: none;
     display: flex;
     flex-direction: row;
     width: 62.5%;
     padding: 0;
     margin: 0;  
   }
 
   .flex {
       display: flex;
       flex-direction: column;
   }
 
   .flex-5 {
       flex: 1 1 18%; 
   }
 
   .flex-45 {
       flex: 1 1 45%; 
   }
 
   .with-ico img {
     margin-right: 10px;
   }
 
   .ico-center {
       display: inline-block;
       margin-bottom: 10px;
   }
 
   .map iframe {
       width: 100%;
       height: 200px;
       border: 0;
       border-radius: 10px;
   }
 
   footer .userfooter {
     margin-top: 20px;
     width: 100%;
     text-align: center;
     padding-bottom: 17px;
   }
  
   footer .userfooter a {
     color: #3f7499;
     font-size: 10px;
     text-decoration: none;
   }
 
   .left {
     float: left;
   }
 
   .right {
     float: right;
   }
   
   .row_f-user {
      width: 62.5%;
      margin: auto;
      height: 50px;
   }

   .row_f-user p{
    color: #3f7499;
    font-size: 10px;
    text-decoration: none;
  }

   .second-row_f {
       display: grid;
       grid-template-columns: repeat(5, 1fr); 
       width: 62.5%; 
       margin: 0; 
       padding: 0;
       padding-top: 20px;
   }
 
   .about-us-map .map {
     position: relative;
     display: block;
     width: 100%;
     height: 190px;
     background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/map.png);
     background-size: auto;
     cursor: pointer;
   }
 
   .map iframe {
     border: 0;
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     height: 100%;
     width: 100%;
     display: none;
 }
 
   .stacjo {
       grid-column: 3; 
   }
 
   .about-us {
       grid-column: span 2; 
   }
 
   .about-us-map {
       grid-column: span 2; 
       padding-left: 40px;
   }
   
   .second-row_f > .flex {
       padding: 16px;
   }
 
   .second-row_f .aboutus p {
     color: #ffffff;
     font-size: 13px;
     line-height: 19px;
     padding: 0 85px 0 0;
   }
 
   .second-row_f .with-ico {
       display: flex;
       align-items: center;
   }
 
   .second-row_f .with-ico img {
       margin-right: 10px;
   }
 
   #footgroup3, #footgroup0 {
       padding-left: 40px;
   }
 
   #footgroup1 li:not(.head),
   #footgroup2 li:not(.head),
   #footgroup3 li:not(.head),
   #footgroup4 li:not(.head),
   #footgroup5 li:not(.head) {
       font-size: 15px;
       line-height: 31px;
   }
 
   .head {
     font-family: 'Blogger Sans Medium', Arial, sans-serif;
     font-weight: bold;
     color: #119ee1;
     font-size: 17px;
     line-height: 19px;
     text-transform: uppercase;
     padding-bottom: 19px;
   }
 
   .ico-cen {
     line-height: 31px;
   }
 
   .custom-ico {
     line-height: 31px;
   }
 
   .ico-cen img {
     margin: 0 10px 0 0;
   }
 
   .custom-ico img{
     margin-left: 4px;
     margin-right: 14px;
   }
 
   .stacjo .with-ico p {
     color: #ffffff;
     font-size: 13px;
     line-height: 19px;
   }
 
   footer.footer .innerfooter .clear {
     height: 2px;
     background-color: #244c68;
     opacity: 0.5;
     margin-top: 20px;
     width: 62.5%;
   }
 
   .clear {
     clear: both;
     display: block;
   }
 </style>
 
  <div class="upper-footer-box">
   <div class="conte">
     <div class="row_f">
       <div class="col-3">
         <div class="single-col-wrapper">
           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_3.png" alt="Inpost"/>
           <span>Darmowa wysyłka od 199 zł</span>
         </div>
       </div>
       <div class="col-3">
         <div class="single-col-wrapper">
           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_5.png" alt="Package"/>
           <span>Dostawy z USA co tydzień</span>
         </div>
       </div>
       <div class="col-3">
         <div class="single-col-wrapper">
           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_2.png" alt="Book"/>
           <span>Komiksy w stanie NM</span>
         </div>
       </div>
       <div class="col-3">
         <div class="single-col-wrapper">
           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_4.png" alt="Help">
           <span>Pomoc w wyborze</span>
         </div>
       </div>
     </div>
   </div>
 </div>
 <footer class="footer row_f">
   <div class="innerfooter conte row_f">
      <ul class="overall">
         <li class="overall flex flex-5" id="footgroup1">
            <ul>
               <li class="head">Informacje</li>
               <li>
                  Najważniejsze informacje
                  </a>
               </li>
               <li>
                  Formularz kontaktowy
                  </a>
               </li>
               <li>
                  ATOMowy manifest
                  </a>
               </li>
            </ul>
         </li>
         <li class="overall flex flex-5" id="footgroup5">
            <ul>
               <li class="head">Komiks</li>
               <li>
                  ATOMowy blog
               </li>
               <li>
                  Pomoc w wyborze
               </li>
               <li>
                  Zamówienia specjalne
               </li>
            </ul>
         </li>
         <li class="overall flex flex-5" id="footgroup4">
            <ul>
               <li class="head">Bezpieczeństwo</li>
               <li>
                  Regulamin sklepu
               </li>
               <li>
                  Opcje wysyłki
               </li>
               <li>
                  Formy płatności
               </li>
            </ul>
         </li>
         <li class="overall flex flex-5" id="footgroup3">
            <ul>
               <li class="head">Moje konto</li>
               <li>
                  Twoje zamówienia
                  </a>
               </li>
               <li>
                  Ustawienia konta
                  </a>
               </li>
               <li>
                  Przechowalnia
                  </a>
               </li>
            </ul>
         </li>
         <li class="overall flex flex-5" id="footgroup0">
            <ul>
               <li class="head">Skontaktuj się z nami</li>
               <li class="ico-cen"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_mail.png" alt="Mail">sklep@atomcomics.pl</li>
               <li class="custom-ico"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_tel.png" alt="Tel">795 441 424</li>
            </ul>
         </li>
      </ul>
      <ul class="overall second-row_f">
         <li class="about-us">
            <ul>
               <li class="head">ATOM COMICS</li>
               <li class="aboutus">
                  <p>ATOM Comics to sklep oferujący szeroki wybór amerykańskich oraz polskich komiksów, a także związanych z nimi gadżetów, figurek i innych produktów. Naszym celem było stworzenie miejsca, w którym fani komiksu będą mogli zaopatrzyć się zarówno w nowości wydawane co środę w USA, jak i pozycje archiwalne oraz polskojęzyczne wydania. Jako jedyna firma w Polsce, wszystkie nowości komiksowe z USA otrzymujemy i wysyłamy na dzień przed ich premierą w Stanach Zjednoczonych. Na zamówienia specjalne sprow_fadzamy komiksy nawet z lat 50 XX wieku.</p>
               </li>
            </ul>
         </li>
         <li class="stacjo">
            <ul>
               <li class="head">Sklep stacjonarny</li>
               <li class="with-ico">
                 <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_location.png" alt="Location">
                  <p>Lubicz 3/5,<br>31-034 Kraków</p>
               </li>
               <li class="with-ico">
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/footer_ico_time.png" alt="Time">
                  <p>Poniedziałek: 12-18<br>Wtorek: 10:30-18<br>Środa: 10:30-18<br>Czwartek: 10:30-18<br>Piątek: 10:30-18<br>Sobota: 10-14</p>
               </li>
            </ul>
         </li>
         <li class="about-us-map">
           <a class="map" href="https://g.page/atomsklepkomiksowy?share" id="iframe-to-place">
             <?php echo '<script'; ?>
>
               let iframe = document.createElement("iframe");
               iframe.src =
                 "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d320.1462.52507326996!2d19.9449219!3d50.0643666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471643df75a0c071%3A0xf3b0762.57ead3f62.5c!2sATOM%20Comics%20-%20Sklep%20z%20Komiksami!5e0!3m2!1spl!2spl!4v157362.54359413!5m2!1spl!2spl";
               iframe.width = "100%";
               iframe.height = "200px";
               iframe.style.border = "0";
               iframe.allowFullscreen = true;
               iframe.loading = "lazy";
 
               document.getElementById("iframe-to-place").appendChild(iframe);
             <?php echo '</script'; ?>
>
           </a>
         </li>
      </ul>
      <div class="clear"></div>
   </footer>
   <div class="userfooter">
      <div class="row_f-user">
         <p class="left"><a href="http://shoper.pl">Sklep internetowy Shoper.pl</a></p>
         <p class="mamezi right">powered by: <a href="http://mamezi.pl"><img alt="" height="24" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/mamezi-logo.png" width="62.5" /></a></p>
      </div>
   </div>
 </div><?php }
}
