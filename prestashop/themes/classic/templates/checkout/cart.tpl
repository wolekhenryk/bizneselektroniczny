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
{extends file=$layout}

{block name='content'}
  <section id="main">
    <style>
      .card {
        border-radius: 4px;
      }

      .cart-grid-body .card-block {
        padding-top: 1.5rem;
      }

      .cart-grid-body .card-block h1 {
        font-family: 'Blogger Sans Regular', sans-serif;
        font-weight: bold;
        font-size: 24px;
        padding-left: 15px;
      }

      .header-row1 {
        width: 100%;
        display: grid;
        font-family: 'Blogger Sans Medium', sans-serif;
        grid-template-columns: 4fr 1fr 1fr 1fr 1fr; 
        padding: 10px;
        padding-left: 20px;
        font-weight: bold;
        line-height: 1.2; 
        text-transform: uppercase;
        font-size: 13px;
        padding-bottom: 0;
        padding-top: 30px;
      }

      .js-increase-product-quantity {
        display: none !important;
      }

      .js-decrease-product-quantity {
        display: none !important;
      }
      
      .card-grid-body3 {
        width: 100%;
      }

      .cardcuscart-container {
        font-family: 'Blogger Sans Regular', sans-serif;
        width: 62.5%;
        margin: auto;
        background-color: #fff;
        border-radius: 4px;
        margin-top: 20px;
        margin-bottom: 20px;
      }
    </style>
    <div class="cart-grid row">
      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body3">
        <!-- cart products detailed -->
        <div class="cardcuscart-container">

          <div class="card-block">
            <h1 class="h1">{l s='Zawartość twojego koszyka' d='Shop.Theme.Checkout'}</h1>
          </div>

          <hr class="separator">

          <div class="header-row1">
            <div class="header-item1 name" style="text-transform: uppercase;">{l s='Nazwa produktu'}</div>
            <div class="header-item1 rwd-hide-medium time" style="text-transform: uppercase;">{l s='Wysyłka w'}</div>
            <div class="header-item1 quantity" style="text-transform: uppercase;">{l s='Ilość'}</div>
            <div class="header-item1 rwd-hide-small price" style="text-transform: uppercase;">{l s='Cena'}</div>
            <div class="header-item1 sum" style="text-transform: uppercase;">{l s='Wartość'}</div>
          </div>

          {block name='cart_overview'}
            {include file='checkout/_partials/cart-detailed.tpl' cart=$cart}
          {/block}
          
          <div class="buttons">
            {block name='continue_shopping'}
            <style>
              .my-btn {
                background-color: #f3f3f3;
                color: #000;            
                border-radius: 4px;   
                padding: 10px 20px;     
                font-size: 14px;       
                text-transform: uppercase; 
                font-weight: 700;
                font-family: "Blogger-Sans Regular", sans-serif;
                border: none;
                margin-left: 20px;s
                margin-bottom: 10px;
              }
              
              .my-btn:hover {
                background-color: #cdcdcd; 
                text-decoration: none;    
              }

              .buttons {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-right: 30px;
                padding-left: 20px;
                padding-bottom: 20px;
              }
            </style>
            <a class="label" href="{$urls.pages.index}">
              <button type="submit" class="my-btn btn-gray radius upper" name="button1" value="button1">
                <span>{l s='Kontynuuj zakupy' d='Shop.Theme.Actions'}</span>
              </button>
            </a>
            {/block}
            {block name='cart_actions'}
                {include file='checkout/_partials/cart-detailed-actions.tpl' cart=$cart}
            {/block}
          </div>  
        </div>

      </div>

    </div>
  </section>
{/block}
