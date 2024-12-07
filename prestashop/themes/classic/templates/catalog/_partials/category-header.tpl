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
 
<div id="js-product-list-header">
    {if $listing.pagination.items_shown_from == 1}
        <div class="block-category card card-block">
            <h1 class="h1" id="category-name">{$category.name}</h1>
        </div>
    {/if}
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

.slider-container{
    display: none;
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
    width: 62.5%;
    float: none;
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
    width: 50%;
    margin-top: 10px
}

 .products-selection{
    display: flex;
    justify-content: flex-end;
 }

 #products{
    width: 100%;
 }

 #js-product-list{
    margin-top: 50px;
 }

</style>