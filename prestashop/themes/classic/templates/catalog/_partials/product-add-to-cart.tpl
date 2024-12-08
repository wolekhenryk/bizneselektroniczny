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
<div class="product-add-to-cart js-product-add-to-cart">
  {if !$configuration.is_catalog}

    {block name='product_availability'}
      <span id="product-availability" class="js-product-availability">
        {if $product.show_availability && $product.availability_message}
          {if $product.availability == 'available'}
            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
          {elseif $product.availability == 'last_remaining_items'}
            <i class="material-icons product-last-items">&#xE002;</i>
          {else}
            <i class="material-icons product-unavailable">&#xE14B;</i>
          {/if}
          {$product.availability_message}
        {/if}
      </span>
    {/block}


    {block name='product_quantity'}
      <div class="product-quantity clearfix">
        <div class="qty">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            inputmode="numeric"
            pattern="[0-9]*"
            {if $product.quantity_wanted}
              value="{$product.quantity_wanted}"
              min="{$product.minimal_quantity}"
            {else}
              value="1"
              min="1"
            {/if}
            class="input-group"
            aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            {if !$product.add_to_cart_url}
              disabled
            {/if}
          >
            DO KOSZYKA
          </button>
        </div>

        {hook h='displayProductActions' product=$product}
      </div>
    {/block}

    {block name='product_minimal_quantity'}
      <p class="product-minimal-quantity js-product-minimal-quantity">
        {if $product.minimal_quantity > 1}
          {l
          s='The minimum purchase order quantity for the product is %quantity%.'
          d='Shop.Theme.Checkout'
          sprintf=['%quantity%' => $product.minimal_quantity]
          }
        {/if}
      </p>
    {/block}


  <ul class="share-wrap">
    <li>
    <img src="{$base_dir}/themes/classic/assets/img/zapytaj.png" alt="Najnowsza dostawa">
    Zapytaj o produkt
    </li>
    <li>
    <img src="{$base_dir}/themes/classic/assets/img/polec.png" alt="Najnowsza dostawa">
    Poleć znajomemu
    </li>
    <li>
    <img src="{$base_dir}/themes/classic/assets/img/kolekcja.png" alt="Najnowsza dostawa">
    Dodaj do przechowalni
    </li>
  </ul>

  {/if}
</div>


<style>

.product-actions{
  margin-top: -47px;
}

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

.product-quantity .input-group-btn-vertical {
    display: none !important;
}

.share-wrap li{
  font-family: "Blogger-Sans", sans-serif;
    font-weight: 300;
  padding: 0;
    margin: 0 15px 0 0;
    font-size: 14px;
    line-height: 18px;
    color: #032944;
}

.share-wrap li img{
    padding: 0;
    margin-right: 5px;
    width: 22px;
    height: 20px;
    vertical-align: middle;
}

.share-wrap{
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;

}

.product-quantity #quantity_wanted {
     font-family: 'Blogger Sans Regular';
    min-width: 58px;
    max-width: 58px;
    border: 0;
    border-top: 5px solid #119ee1;
    border-left: 5px solid #119ee1;
    border-bottom: 5px solid #119ee1;
    border-radius: 0;
        margin: 0;
        margin-bottom: 0px;
        height: 40px;
    min-height: 40px
        width: 40% !important;
            line-height: 20px;
    color: #666;
    vertical-align: middle;
    background-color: #fff;
    transition: border linear .2s;
    -webkit-appearance: none;
    display: inline-block
        padding: 4px 6px;
  overflow-clip-margin: 0px !important;
    overflow: clip !important;
        padding-block: 1px;
    padding-inline: 2px;
    text-align: center;
    margin-right:0 !important;
}

.add{
  max-width: 200px;
}


.btn-primary {


     font-family: 'Blogger Sans Regular';
    font-size: 19px;
    padding: 0 35px;
    width: initial;
    text-transform: uppercase;
    background: #009ee1;
    color: #ffffff;
    font-weight: 700;
    line-height: 18px;
}

.wishlist-button-add {
  display: none !important;
}
</style>