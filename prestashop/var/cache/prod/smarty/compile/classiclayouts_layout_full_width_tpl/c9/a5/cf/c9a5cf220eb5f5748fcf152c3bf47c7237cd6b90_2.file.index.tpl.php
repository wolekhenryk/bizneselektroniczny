<?php
/* Smarty version 3.1.48, created on 2024-12-05 17:47:42
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6751d92e0275e2_23475607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1733401559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6751d92e0275e2_23475607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 
 
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12485518896751d92e0255b3_18134376', 'page_content_container');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13393473066751d92e025907_10823125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10783660146751d92e025fa1_03022082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

           <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5432121576751d92e025da2_47492540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10783660146751d92e025fa1_03022082', 'hook_home', $this->tplIndex);
?>

         <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12485518896751d92e0255b3_18134376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12485518896751d92e0255b3_18134376',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13393473066751d92e025907_10823125',
  ),
  'page_content' => 
  array (
    0 => 'Block_5432121576751d92e025da2_47492540',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10783660146751d92e025fa1_03022082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <section id="content" class="page-home">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13393473066751d92e025907_10823125', 'page_content_top', $this->tplIndex);
?>

 
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5432121576751d92e025da2_47492540', 'page_content', $this->tplIndex);
?>

         <style>
           @font-face {
             font-family: 'Blogger Sans Regular';
             src: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/fonts/blogger-sans.regular.ttf') format('truetype');
             font-weight: 300;
             font-style: normal;
           }
         
           .bottom-footer-row {
             background: transparent;
             margin-top: 20px;
             display: flex;
             flex-direction: column;
             align-items: center; 
             justify-content: center; 
             width: 100%;
             margin-right: auto;
             margin-left: auto;
             font-family: 'Blogger Sans Regular';
             padding-bottom: 30px;
           }
           
           .bottom-footer-conta {
             width: 62.5%;
           }
          
           #seo-text {
             display: flex;
             align-items: center; 
             justify-content: center; 
             width: 62.5%;
             margin-right: auto;
             margin-left: auto;
           }
 
           .f-row h1 {
             font-size: 1.6em;
             margin: .83em 0;
           }
           .f-row h2 {
             font-size: 1.2rem;
             margin: .73em 0;
           }
 
           .h2 span {
             font-weight: bold;
           }
 
           .f-row p {
             font-family: 'Blogger Sans Regular';
             margin: .86em 0;
             line-height: 1.5;
             color: black;
             font-weight: bold;
             font-size: 13px;
             text-align: justify;
           }
           
           .g_row {
             display: flex;
             flex-direction: row;
             align-items: center; 
             justify-content: center; 
             width: 62.5%;
             margin-right: auto;
             margin-left: auto;
           }

           #bottom_banners {
            margin: auto auto 20px 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center; 
            width: 62%;
          }
          .g-row {
            display: flex;
            flex-direction: row; /* Układ poziomy */
            align-items: center; /* Wyrównanie w pionie */
            justify-content: space-between; /* Równomierny odstęp między elementami */
            width: 100%;
          }
          
          .g-row img {
            height: auto;
          }
          
          .f-grid-61,
          .f-grid-62 {
            flex: 1; 
          }

          .f-grid-62 {
            margin-left: 33px;
          }
          
         </style>
 
         <div class="bottom-footer-row">
           <div class="bottom-footer-conta">
               <div class="box resetcss box_custom" id="bottom-banners">
                 <div class="g-row">
                   <div class="f-grid-61">
                       <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/napisz-do-nas.png" alt="" width="auto" height="auto" />
                   </div>
                   <div class="f-grid-62">
                       <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/zamowienia-specjalne.png" alt="" width="auto" height="auto" />
                   </div>
                 </div>
               </div>
               </div>
               <div class="box resetcss box_custom" id="seo-text">
                  <div class="f-row">
                      <h1 style="text-align: justify;"><span>Atomcomics.pl – Twój sklep z komiksami!</span></h1>
                      <p style="text-align: justify;"><span>Witamy Cię w </span><strong>Atom Comics -</strong> sklepie tworzonym przez fanów dla fanów, ale również dla wszystkich, którzy dopiero rozpoczynają swoją komiksową przygodę! To najlepsze miejsce w sieci oferujące tak zróżnicowany wybór komiksów i gadżetów związanych z komiksowym światem. Nieważne czy jesteś komiksowym maniakiem, czy dopiero stawiasz w tym świecie pierwsze kroki – na pewno znajdziesz u nas to, czego szukasz! Oprócz szerokiej oferty zapewniamy atrakcyjne ceny i liczne promocje, gwarantujemy bezpieczne zakupy i umożliwiamy wybór wielu form dostawy, by zakupy były dla Ciebie jak najwygodniejsze. Dbamy o to, by każdy zamówiony produkt był w staranny sposób zapakowany i dotarł do Ciebie jak najszybciej i w jak najlepszym stanie! Przekonaj się sam i złóż pierwsze zamówienie!</span></p>
                      <h2 style="text-align: justify;"><span>Szeroki wybór komiksów polskich i amerykańskich!</span></h2>
                      <p style="text-align: justify;"><span>Atom Comics tworzyliśmy z myślą o wszystkich fanach komiksu. Dlatego w naszej ofercie znajduje się tak duża baza komiksów, zarówno tych w języku angielskim, jak i polskim - zaczynając od klasycznych, superbohaterskich komiksach amerykańskich, przez polskie komiksy z najróżniejszych gatunków, kończąc na europejskich nowościach. Oferujemy popularne „zeszytówki”, które docierają do nas z USA co tydzień. Superhero, sci-fi, horror, fantastyka, komedia, historie obyczajowe, jak i te oparte na faktach – będziesz pozytywnie zaskoczony, jak wiele do zaoferowania ma komiksowy świat!</span></p>
                      <h2 style="text-align: justify;"><span>Nie tylko komiksy – gadżety i figurki ze świata komiksu</span></h2>
                      <p style="text-align: justify;"><strong>Komiksy</strong> to dopiero początek. W naszym sklepie znajdziesz szereg figurek, statuetek, kubków, gier planszowych, puzzli oraz innych gadżetów związanych z komiksową popkulturą i grami komputerowymi. Warto sprawdzić osobną kategorię figurki, pełną kolekcjonerskich edycji. Wiemy także jak odpowiednio zabezpieczyć Twoją kolekcję – w dziale materiałów ochronnych znajdziesz folie i tekturki ochronne na zeszyty w różnych rozmiarach, pudła, toploady, separatory oraz inne produkty najwyższej jakości!</span></p>
                      <h2 style="text-align: justify;"><span>Nowości komiksowe z USA co tydzień!</span></h2>
                      <p style="text-align: justify;"><span>Nowe komiksy z USA docierają do nas co tydzień już w dniu ich premiery w USA. Dzięki specjalnemu systemowi preorderów z wyprzedzeniem możesz zadbać o zaplanowanie zakupów, a także zarezerwowanie pożądanych serii. Oferujemy możliwość prenumeraty wybranych tytułów, a także płatność dopiero po skompletowaniu zamówienia! Jest to najlepsza opcja kolekcjonowania nowości, a także gwarancja tego, że gorące wydania będą dla Ciebie odpowiednio wcześnie zarezerwowane. Co piątek na naszym ATOMowym blogu publikujemy nowe listy F.O.C., a także zapowiedzi nowości.</span></p>
                      <h2 style="text-align: justify;"><span>Archiwalne komiksy na zamówienie i pomoc w zakupie</span></h2>
                      <p style="text-align: justify;"><span>Wiemy, jak ważne dla fanów potrafią być poszczególne wydania komiksów sprzed wielu lat. Dlatego oferujemy możliwość składania zamówień specjalnych, co pozwala zdobyć wiele rzadkich i starszych komiksowych zeszytów i wydań zbiorczych. Dysponujemy ogromną bazą archiwalną, więc napisz do nas już teraz, a my sprawdzimy, jak możemy pomóc Ci w uzupełnieniu kolekcji! Kontakt z nami może być także przydatny, jeśli czujesz się przytłoczony wyborem, a chcesz zacząć komiksową przygodą. W Atom Comics pracują sami miłośnicy komiksów, którzy z miłą chęcią polecą odpowiednie tytuły na początek!</span></p>
                  </div>
               </div>
           </div>
         </div>
       </section>
     <?php
}
}
/* {/block 'page_content_container'} */
}
