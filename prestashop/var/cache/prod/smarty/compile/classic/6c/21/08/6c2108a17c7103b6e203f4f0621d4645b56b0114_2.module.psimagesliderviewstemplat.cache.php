<?php
/* Smarty version 3.1.48, created on 2025-01-12 23:34:27
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67844373071c00_36871038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1736704383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67844373071c00_36871038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18720170616784437306ef53_37857086';
?>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_assets']->value, ENT_QUOTES, 'UTF-8');?>
/css/custom.css" type="text/css" media="all" />


<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <!-- Pasek pod sliderem -->
  <div class="below-slider-bar">
    <div class="container">
      <div id="below-slider" class="row custom-row header-row">
        <!-- Lewa strona -->
        <div class="col-4 left-section">
          <h2 id="below-slider-title" class="title">Najnowsze katalogi<br>Preorder</h2>
        </div>
        
        <!-- Środkowa część -->
        <div class="col-4 middle-section">
          <ul class="catalog-links">
            <li><a href="#">LUTY 2025</a></li>
            <li><a href="#">STYCZEŃ 2025</a></li>
            <li><a href="#">GRUDZIEŃ 2024</a></li>
            <li><a href="#">LISTOPAD 2024</a></li>
          </ul>
        </div>
        
        <!-- Prawa strona -->
        <div class="col-4 right-section">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
/themes/classic/assets/img/najnowsza-dostawa.png" alt="Najnowsza dostawa">
        </div>
      </div>
    </div>
      <div id="thin-bar"></div>

  </div>

<?php }?>

<style>
  /* Ogólne style paska pod sliderem */
  .below-slider-bar {
    font-family: "Caveat Brush", cursive;
    background-color: #1f435d;
    padding-top: 10px;
    padding-bottom: 0;
    padding-left: 5px;
    padding-right: 5px;
  }



  /* Styl dla równej linii elementów */
  .below-slider-bar .row {
    display: flex;
    justify-content: space-between; /* Elementy rozmieszczone na całą szerokość */
    align-items: center; /* Wyśrodkowanie w pionie */
  }

  /* Lewa sekcja */
  .below-slider-bar .left-section .title {
    font-family: "Caveat Brush", cursive;
    color: white;
    font-size: 25px;
    margin: 0;
    line-height: 1.5;
    font-weight: normal;
  }

  /* Środkowa sekcja */
  .below-slider-bar .middle-section .catalog-links {
        font-size: 22px;

    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 10px;
  }

  .below-slider-bar .middle-section .catalog-links li {
    display: inline-block;
  }

  .below-slider-bar .middle-section .catalog-links a {
    display: inline-block;
    padding: 0 14px;
    background-color: white;
    color: #119ee1;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s;
    line-height: 38px;
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase;
  }

  .below-slider-bar .middle-section .catalog-links a:hover {
    background-color: #119ee1;
    color: white;
  }

  /* Prawa sekcja */
  .below-slider-bar .right-section img {
    max-width: 100%;
    height: auto;
  }

  /* Slider - usunięcie marginesów */
  #carousel {
    margin-bottom: 0;
      max-width: 1110px; /* Maksymalna szerokość slidera */
  margin: 0 auto; /* Automatyczne marginesy po bokach */
  padding: 0; /* Brak dodatkowych odstępów */
  }


  .below-slider-bar {
    margin-top: 0;
  }
  .carousel-inner{
    margin-bottom: 0;
  }
  #carousel-wrapper{
      background: rgba(2, 41, 68, 0.8);

  }
.below-slider-bar {
  margin: 0;
  width: 100vw;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}
#carousel-wrapper {
  margin-bottom: 0;
    background-color: #103f5b;

       width: 100vw;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}
.below-slider-bar {
  margin-top: 0;
}

#carousel{
  padding: 0 0;
  margin: 0 auto;
  width: 62.5%;
}

#thin-bar{
  padding: 10px 0;
  margin: 0 0;
  width: 100%;
  background: #2D4C61;
  margin-top: 10px;
}

#below-slider{
  padding: 0 5px;
}


#below-slider-title{
  font-size: 26px;
  font-weight: 400;
  letter-spacing: 1.08px;
  line-height: 25px;
}

</style><?php }
}
