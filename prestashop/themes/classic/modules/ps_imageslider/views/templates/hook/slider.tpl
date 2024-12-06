<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="{$theme_assets}/css/custom.css" type="text/css" media="all" />


{if $homeslider.slides}
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
          <img src="{$base_dir}/themes/classic/assets/img/najnowsza-dostawa.png" alt="Najnowsza dostawa">
        </div>
      </div>
    </div>
  </div>

  <div id="thin-bar"></div>
{/if}

<style>
  /* Ogólne style paska pod sliderem */
  .below-slider-bar {
    font-family: "Caveat Brush", cursive;
    background-color: #103f5b;
    padding-top: 10px;
    padding-bottom: 10px;
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
  width: 60%;
}

#thin-bar{
  padding: 10px 0;
  margin: 0 0;
  width: 100%;
  background: rgba(2, 41, 68, 0.8)
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

</style>