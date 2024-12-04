{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
 
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
  
  .innerfooter.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding-top: 40px;
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

  footer .userfooter {
    margin-top: 20px;
  }

  .userfooter.container {
      width: 60%;
      color: #fff;
      text-align: center;
      padding-bottom: 20px;
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

  .second-row {
      display: grid;
      grid-template-columns: repeat(5, 1fr); 
      width: 60%; 
      margin: 0; 
      padding: 0;
      padding-top: 20px;
  }

  .about-us-map .map {
    position: relative;
    display: block;
    width: 100%;
    height: 190px;
    background-image: url({$base_dir}/themes/classic/assets/img/map.png);
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
  
  .second-row > .flex {
      padding: 16px;
  }

  .second-row .aboutus p {
    color: #ffffff;
    font-size: 13px;
    line-height: 19px;
    padding: 0 85px 0 0;
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
    width: 60%;
  }

  .clear {
    clear: both;
    display: block;
  }

  .bottom-footer-row {
    background: #fff;
  }

</style>

<div class="bottom-footer-row">
  <div class="bottom-footer-container">
      <div class="box resetcss box_custom" id="bottom-banners">

      </div>
      <div class="box resetcss box_custom" id="seo-text">
          <div class="f-row">
              <h1 style="text-align: justify;"><span style="font-weight: 400;">Atomcomics.pl – Twój sklep z komiksami!</span></h1>
              <p style="text-align: justify;"><span style="font-weight: 400;">Witamy Cię w </span><strong>Atom Comics -</strong><span style="font-weight: 400;"> sklepie tworzonym przez fanów dla fanów, ale również dla wszystkich, którzy dopiero rozpoczynają swoją komiksową przygodę! To najlepsze miejsce w sieci oferujące tak zróżnicowany wybór komiksów i gadżetów związanych z komiksowym światem. Nieważne czy jesteś komiksowym maniakiem, czy dopiero stawiasz w tym świecie pierwsze kroki – na pewno znajdziesz u nas to, czego szukasz! Oprócz szerokiej oferty zapewniamy atrakcyjne ceny i liczne promocje, gwarantujemy bezpieczne zakupy i umożliwiamy wybór wielu form dostawy, by zakupy były dla Ciebie jak najwygodniejsze. Dbamy o to, by każdy zamówiony produkt był w staranny sposób zapakowany i dotarł do Ciebie jak najszybciej i w jak najlepszym stanie! Przekonaj się sam i złóż pierwsze zamówienie!</span></p>
              <h2 style="text-align: justify;"><span style="font-weight: 400;">Szeroki wybór komiksów polskich i amerykańskich!</span></h2>
              <p style="text-align: justify;"><span style="font-weight: 400;">Atom Comics tworzyliśmy z myślą o wszystkich fanach komiksu. Dlatego w naszej ofercie znajduje się tak duża baza komiksów, zarówno tych w języku angielskim, jak i polskim - zaczynając od klasycznych, superbohaterskich komiksach amerykańskich, przez </span><a><span style="font-weight: 400;">polskie komiksy</span></a><span style="font-weight: 400;"> z najróżniejszych gatunków, kończąc na europejskich nowościach. Oferujemy popularne „zeszytówki”, które docierają do nas z USA co tydzień. Superhero, sci-fi, horror, fantastyka, komedia, historie obyczajowe, jak i te oparte na faktach – będziesz pozytywnie zaskoczony, jak wiele do zaoferowania ma komiksowy świat!</span></p>
              <h2 style="text-align: justify;"><span style="font-weight: 400;">Nie tylko komiksy – gadżety i figurki ze świata komiksu</span></h2>
              <p style="text-align: justify;"><strong>Komiksy</strong><span style="font-weight: 400;"> to dopiero początek. W naszym sklepie znajdziesz szereg figurek, statuetek, kubków, gier planszowych, puzzli oraz innych gadżetów związanych z komiksową popkulturą i grami komputerowymi. Warto sprawdzić osobną kategorię </span><a><span style="font-weight: 400;">figurki</span></a><span style="font-weight: 400;">, pełną kolekcjonerskich edycji. Wiemy także jak odpowiednio zabezpieczyć Twoją kolekcję – w dziale </span><a><span style="font-weight: 400;">materiałów ochronnych</span></a><span style="font-weight: 400;"> znajdziesz folie i tekturki ochronne na zeszyty w różnych rozmiarach, pudła, toploady, separatory oraz inne produkty najwyższej jakości!</span></p>
              <h2 style="text-align: justify;"><span style="font-weight: 400;">Nowości komiksowe z USA co tydzień!</span></h2>
              <p style="text-align: justify;"><span style="font-weight: 400;">Nowe komiksy z USA docierają do nas co tydzień już w dniu ich premiery w USA. Dzięki specjalnemu systemowi preorderów z wyprzedzeniem możesz zadbać o zaplanowanie zakupów, a także zarezerwowanie pożądanych serii. Oferujemy możliwość prenumeraty wybranych tytułów, a także płatność dopiero po skompletowaniu zamówienia! Jest to najlepsza opcja kolekcjonowania nowości, a także gwarancja tego, że gorące wydania będą dla Ciebie odpowiednio wcześnie zarezerwowane. Co piątek na naszym ATOMowym blogu publikujemy nowe listy F.O.C., a także zapowiedzi nowości.</span></p>
              <h2 style="text-align: justify;"><span style="font-weight: 400;">Archiwalne komiksy na zamówienie i pomoc w zakupie</span></h2>
              <p style="text-align: justify;"><span style="font-weight: 400;">Wiemy, jak ważne dla fanów potrafią być poszczególne wydania komiksów sprzed wielu lat. Dlatego oferujemy możliwość składania </span><a><span style="font-weight: 400;">zamówień specjalnych</span></a><span style="font-weight: 400;">, co pozwala zdobyć wiele rzadkich i starszych komiksowych zeszytów i wydań zbiorczych. Dysponujemy ogromną bazą archiwalną, więc napisz do nas już teraz, a my sprawdzimy, jak możemy pomóc Ci w uzupełnieniu kolekcji! Kontakt z nami może być także przydatny, jeśli czujesz się przytłoczony wyborem, a chcesz zacząć komiksową przygodą. W Atom Comics pracują sami miłośnicy komiksów, którzy z miłą chęcią polecą odpowiednie tytuły na początek!</span></p>
          </div>
      </div>
      <div class="box" id="box_freeshipping">
          <input type="hidden" id="freeshipping_data" data-free-shipping-price="199" data-no-items-text="Darmowa dostawa (Kurier Inpost 24h) już od 199,00 zł." data-above-free-text="Darmowa dostawa!" data-equal-free-text="Darmowa dostawa!" data-below-free-text="Do darmowej dostawy pozostało: " />
          <div class="boxhead">
              <span><img src="/public/images/1px.gif" alt="" class="px1">Darmowa dostawa</span>
          </div>
          <div class="innerbox">
              <div class="arrow"><img src="/public/images/1px.gif" alt="" class="px1"></div>
              Darmowa dostawa (Kurier Inpost 24h) już od 199,00 zł.
          </div>
      </div>

  </div>
</div>
 <div class="upper-footer-box">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="single-col-wrapper">
          <img src="{$base_dir}/themes/classic/assets/img/footer_ico_3.png" alt="Inpost"/>
          <span>Darmowa wysyłka od 199 zł</span>
        </div>
      </div>
      <div class="col-3">
        <div class="single-col-wrapper">
          <img src="{$base_dir}/themes/classic/assets/img/footer_ico_5.png" alt="Package"/>
          <span>Dostawy z USA co tydzień</span>
        </div>
      </div>
      <div class="col-3">
        <div class="single-col-wrapper">
          <img src="{$base_dir}/themes/classic/assets/img/footer_ico_2.png" alt="Book"/>
          <span>Komiksy w stanie NM</span>
        </div>
      </div>
      <div class="col-3">
        <div class="single-col-wrapper">
          <img src="{$base_dir}/themes/classic/assets/img/footer_ico_4.png" alt="Help">
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
              <li class="ico-cen"><img src="{$base_dir}/themes/classic/assets/img/footer_ico_mail.png" alt="Mail">sklep@atomcomics.pl</li>
              <li class="custom-ico"><img src="{$base_dir}/themes/classic/assets/img/footer_ico_tel.png" alt="Tel">795 441 424</li>
           </ul>
        </li>
     </ul>
     <ul class="overall second-row">
        <li class="about-us">
           <ul>
              <li class="head">ATOM COMICS</li>
              <li class="aboutus">
                 <p>ATOM Comics to sklep oferujący szeroki wybór amerykańskich oraz polskich komiksów, a także związanych z nimi gadżetów, figurek i innych produktów. Naszym celem było stworzenie miejsca, w którym fani komiksu będą mogli zaopatrzyć się zarówno w nowości wydawane co środę w USA, jak i pozycje archiwalne oraz polskojęzyczne wydania. Jako jedyna firma w Polsce, wszystkie nowości komiksowe z USA otrzymujemy i wysyłamy na dzień przed ich premierą w Stanach Zjednoczonych. Na zamówienia specjalne sprowadzamy komiksy nawet z lat 50 XX wieku.</p>
              </li>
           </ul>
        </li>
        <li class="stacjo">
           <ul>
              <li class="head">Sklep stacjonarny</li>
              <li class="with-ico">
                <img src="{$base_dir}/themes/classic/assets/img/footer_ico_location.png" alt="Location">
                 <p>Lubicz 3/5,<br>31-034 Kraków</p>
              </li>
              <li class="with-ico">
                 <img src="{$base_dir}/themes/classic/assets/img/footer_ico_time.png" alt="Time">
                 <p>Poniedziałek: 12-18<br>Wtorek: 10:30-18<br>Środa: 10:30-18<br>Czwartek: 10:30-18<br>Piątek: 10:30-18<br>Sobota: 10-14</p>
              </li>
           </ul>
        </li>
        <li class="about-us-map">
          <a class="map" href="https://g.page/atomsklepkomiksowy?share" id="iframe-to-place">
            <script>
              let iframe = document.createElement("iframe");
              iframe.src =
                "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d320.14632507326996!2d19.9449219!3d50.0643666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471643df75a0c071%3A0xf3b07657ead3f60c!2sATOM%20Comics%20-%20Sklep%20z%20Komiksami!5e0!3m2!1spl!2spl!4v1573634359413!5m2!1spl!2spl";
              iframe.width = "100%";
              iframe.height = "200px";
              iframe.style.border = "0";
              iframe.allowFullscreen = true;
              iframe.loading = "lazy";

              document.getElementById("iframe-to-place").appendChild(iframe);
            </script>
          </a>
        </li>
     </ul>
     <div class="clear"></div>
  </footer>
  <div class="userfooter container">
     <div class="row">
        <p class="left"><a href="http://shoper.pl">Sklep internetowy Shoper.pl</a></p>
        <p class="mamezi right">powered by: <a href="http://mamezi.pl"><img alt="" height="24" src="{$base_dir}/themes/classic/assets/img/mamezi-logo.png" width="63" /></a></p>
     </div>
  </div>
</div>
