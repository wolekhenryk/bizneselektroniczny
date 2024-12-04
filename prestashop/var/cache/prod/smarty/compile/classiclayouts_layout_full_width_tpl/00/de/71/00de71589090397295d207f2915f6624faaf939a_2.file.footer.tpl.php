<?php
/* Smarty version 3.1.48, created on 2024-12-04 01:51:28
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674fa790a75d60_26422418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00de71589090397295d207f2915f6624faaf939a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1733273451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674fa790a75d60_26422418 (Smarty_Internal_Template $_smarty_tpl) {
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
  
  .upper-footer-box .container {
    display: flex;
    align-items: center;
    width: 65%;
  }
  
  .upper-footer-box .row {
    display: flex;
    align-items: center;
    width: 100%;
  }
  
  .upper-footer-box .col-3:first-child {
    width: 32%; /* Pierwsza kolumna 25% */
    text-align: left;
  }
  
  .upper-footer-box .col-3:nth-child(2) {
    width: 24%; /* Druga kolumna 24% */
    text-align: left;
  }
  
  .upper-footer-box .col-3:nth-child(3) {
    width: 22%; /* Trzecia kolumna 23% */
  }
  
  .upper-footer-box .col-3:nth-child(4) {
    width: 22%; /* Czwarta kolumna 22% */
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
  
  .innerfooter.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 40px;
  }

  .overall {
    list-style: none;
    display: flex;
    flex-direction: row;
    width: 60%;
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

  .userfooter.container {
      background-color: #123456;
      color: #fff;
      text-align: center;
      padding: 10px 0;
  }

  .userfooter .row {
      display: flex;
      justify-content: space-between;
      align-items: center;
  }

  .userfooter .left, .userfooter .right {
      font-size: 14px;
  }

  .second-row {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
  }

  .second-row .overall {
      margin-bottom: 20px;
  }

  .second-row .head {
      font-weight: bold;
      margin-bottom: 10px;
      font-size: 16px;
  }

  .second-row .aboutus p {
      font-size: 14px;
      line-height: 1.6;
  }

  .second-row .with-ico {
      display: flex;
      align-items: center;
  }

  .second-row .with-ico img {
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
    font-weight: 700;
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
</style>

 <div class="upper-footer-box">
  <div class="container">
    <div class="row">
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

<footer class="footer row">
  <div class="innerfooter container row">
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
     <ul class="overall second-row">
        <li class="overall flex flex-45">
           <ul>
              <li class="head">ATOM COMICS</li>
              <li class="aboutus">
                 <p>ATOM Comics to sklep oferujący szeroki wybór amerykańskich oraz polskich komiksów, a także związanych z nimi gadżetów, figurek i innych produktów. Naszym celem było stworzenie miejsca, w którym fani komiksu będą mogli zaopatrzyć się zarówno w nowości wydawane co środę w USA, jak i pozycje archiwalne oraz polskojęzyczne wydania. Jako jedyna firma w Polsce, wszystkie nowości komiksowe z USA otrzymujemy i wysyłamy na dzień przed ich premierą w Stanach Zjednoczonych. Na zamówienia specjalne sprowadzamy komiksy nawet z lat 50 XX wieku.</p>
              </li>
           </ul>
        </li>
        <li class="overall flex flex-5">
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
        <li class="overall flex flex-45">
            <ul>
              <li class="head">ATOM COMICS</li>
              <li class="aboutus">
                <p>ATOM Comics to sklep oferujący szeroki wybór amerykańskich oraz polskich komiksów, a także związanych z nimi gadżetów, figurek i innych produktów. Naszym celem było stworzenie miejsca, w którym fani komiksu będą mogli zaopatrzyć się zarówno w nowości wydawane co środę w USA, jak i pozycje archiwalne oraz polskojęzyczne wydania. Jako jedyna firma w Polsce, wszystkie nowości komiksowe z USA otrzymujemy i wysyłamy na dzień przed ich premierą w Stanach Zjednoczonych. Na zamówienia specjalne sprowadzamy komiksy nawet z lat 50 XX wieku.</p>
              </li>
            </ul>
        </li>
     </ul>
     <div class="clear"></div>
  </footer>
  <div class="userfooter container">
     <div class="row">
        <p class="left"><a href="http://shoper.pl">Sklep internetowy Shoper.pl</a></p>
        <p class="mamezi right">powered by: <a href="http://mamezi.pl"><img alt="" height="24" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/mamezi-logo.png" width="63" /></a></p>
     </div>
  </div>
</div>
<?php }
}
