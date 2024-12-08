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
{block name='cart_detailed_product'}
  <style>
    .cart-overview1js-cartcus {
      display: flex;
      flex-direction: column;
      width: 100%;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .empty-cart {
      text-align: left;
      margin: auto;
      border-color: #0af;
      background-color: #ebf8ff;
      border-width: 1px 0 1px 0;
      border-style: solid;
      width: 62.5%;
    }

    .empty-cart p {
      font-family: 'Blogger Sans Regular', sans-serif;
      font-size: 13px;
      line-height: 18px;
      padding: 13px;
      margin: auto;
      color: #000;
    }

    .cart-items {
      width: 100%;
      margin: 30px;
      margin-top: 0;
      border: 1px solid rgba(0, 0, 0, 0.125)
    }

    .cart-item {
      padding: 0.2rem 0;
    }

    .gridxyz {
      width: 100%;
    }

    .col-lg-4 {
      float: right;
    }
  </style>

  <div class="cart-overview1js-cartcus" data-refresh-url="{url entity='cart' params=['ajax' => true, 'action' => 'refresh']}">
    {if $cart.products}
    <ul class="cart-items">
      {foreach from=$cart.products item=product}
        <li class="cart-item">
          {block name='cart_detailed_product_line'}
            {include file='checkout/_partials/cart-detailed-product-line.tpl' product=$product}
          {/block}
        </li>
        {if is_array($product.customizations) && $product.customizations|count >1}<hr>{/if}
      {/foreach}
    </ul>

    <div class="gridxyz">
      <div class="cart-grid-right col-xs-12 col-lg-4">
        {block name='cart_summary'}
            {block name='cart_totals'}
              {include file='checkout/_partials/cart-detailed-totals.tpl' cart=$cart}
            {/block}
          </div>
        {/block}
      </div>

    {else}
      <div class="empty-cart">
        <p>{l s='Twój koszyk jest pusty.' d='Shop.Theme.Checkout'}</p>
      </div>
    {/if}
  </div>
{/block}
