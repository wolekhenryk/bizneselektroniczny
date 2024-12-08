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
 
<div id="custom-filter-wrapper">
    <div id="custom-filter-container">
        <span id="options-label">OPCJE PRZEGLĄDANIA</span>
        <div id="inner-box">
            <div class="multiselect">
                <span class="filter-label">Producent: (wybierz)</span>
            </div>
            <div class="multiselect">
                <span class="filter-label">Dostępność: (wybierz)</span>
            </div>
            <div class="multiselect">
                <span class="filter-label">Wysyłka w: (wybierz)</span>
            </div>
            <div class="multiselect">
                <span class="filter-label">Cena: (wybierz)</span>
            </div>
        </div>
    </div>
</div>

<div id="products-container">

<div id="js-product-list-header">
    {if $listing.pagination.items_shown_from == 1}
        <div class="block-category card card-block">
            <h1 class="h1" id="category-name">{$category.name}</h1>
        </div>
    {/if}
</div>

</div>

  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">

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

#inner-box{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.multiselect{
    margin: 15px 0 0 0;
    border-radius: 4px;
    border: 1px solid #e1e1e1;
    color: #032944;
    cursor: pointer;
    width: 32%;
    line-height: 40px;
}

.custom-thumbnail {
    width: 80px !important;
    height: 115px !important;
}

.filter-label{
    color: #022944;
    font-size: 16px;
    line-height: 18px;
    padding: 0 1em;
    font-family: "Blogger Sans Regular", sans-serif;

}

.product-description-container{
  display:flex;
}

.product-description{
  display:flex;
}

#options-label{
    color: #022944;
    font-family: "Blogger Sans Medium", sans-serif;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
}

#custom-filter-wrapper{
    background-color: #fff;

}

#custom-filter-container{
    padding: 15px 0;
    padding-bottom: 30px;
    margin: 0 auto;
    width: 62.5%;
}

.products{
    flex-wrap: no-wrap;
    flex-direction: column;
}
.js-product {
width:100%;
background: #fff;
margin: 5px 15px;
padding: 0 0;
border-radius: 5px;
}

.product-miniature{
    justify-content: normal;
    width: 100%
}

.thumbnail-container{
    width: 100%;
    background: transparent !important;
}

.product-price-and-shipping{
    margin-top: 10px;
    margin-right: 30px
}

.product-description-container{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items:center;
}

.price-cart-container{
    display: flex;
    align-item:center;
    margin-right: 40px;
}

.product-description{
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items:center;
    margin-top: 37px;
    font-family: "Blogger Sans Regular";
    }

.slider-container{
    display: none;
}

.add-to-cart{
    width: 125px;
    height: 38px;
    border-radius: 3px;
    border: 2px solid #119ee1;
    background: transparent;
    color: #119ee1;
    font-size: 16px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase;
    text-align: center;
}

.product-title a{
    color: #022944 !important;
    font-size: 18px !important;
    font-weight: 300 !important;
    line-height: 18px !important;
}

.addtobasket:hover {
    background: #119ee1;
    color: #fff;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#category-name{
font-family: 'Caveat Brush', cursive;
    color: #022944;
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 1;
    margin: 0;
    text-transform: uppercase;
}

  main {
    background: url('{$base_dir}/themes/classic/assets/css/site-background_min.jpg') no-repeat;

    background-position: 0 0;
    background-size: cover;
    
}

#wrapper {
    background: transparent !important;
}

.container{
    padding: 0 0;
    margin: 0 auto;
}

#content-wrapper{
    padding: 0 0;
    margin: 0 auto;
    width: 100%;
    float: none;
}


#products{
    width: 62.5%;
    margin: 0 auto;
    padding: 0 0;

}

#left-column{
    display:none;
}

 #subcategories{
    display: none;
 }

 .sort-by-row{
border: none;
    padding: 0 .5em 0 1em;
    background: none !important;
    color: #032944;
    justify-content: end;
    font-size: 13px;
    line-height: 18px;
 }

 .products-sort-order{
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0 none;
    font-size: 100%;
    background: transparent;
        color: #032944;
    float: none;
    width: auto;
    padding-left: 5px;
 }

 .sort-by .products-sort-order{
    font-family: "Blogger Sans Regular";
 }

 .products-sort-order .select-title{
    border: 0
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0 none;
    font-size: 100%;
    background: transparent;
    text-align: right;
 }

 .block-category{
    background: transparent;
    padding: 0 0;
    margin: 0 0;
        min-height: 10px;
 }

.total-products{
    display: none;
}

 .dropdown-menu{
    position: absolute;
    left: -140px !important;
    top: 39px;
    width: 223px !important;
    text-align: left;
    border: 1px solid #d8d8d8;
    background-color: #fff;
    z-index: 10;
    min-width: 180px;
    margin: 0;
    padding: 0;
 }

#category-name{
    position: absolute;
    width: 18.75%;
    margin-top: 25px;
    margin-left: 18.75%;
}

 .products-selection{
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
 }


 #js-product-list{
    margin-top: 50px;
 }

</style>