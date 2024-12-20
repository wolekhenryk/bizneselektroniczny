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
{extends file='checkout/cart.tpl'}

{block name='content'}
  <style>
    #main {
      position: relative;
    }
    
    .cart-grid row {
      display: flex;
      flex-direction: row;
      margin: auto;
      width: 62.5%;
    }
  </style>
  <section id="main">
    <div class="cart-grid row">
      <style>
        .cart-grid-body2 {
          width: 100%;
        }
      </style>
      <!-- Left Block -->
      <div class="cart-grid-body2">
          {include file='checkout/_partials/cart-detailed.tpl' cart=$cart}
          {if $cart.products|@count > 0}
            <!-- Produkty koszyka -->
            {block name='cart_overview'}
              {include file='checkout/_partials/cart-detailed.tpl' cart=$cart}
            {/block}
          {/if}
        </div>

        <!-- Hook dla koszyka (opcjonalny) -->
        {block name='hook_shopping_cart_footer'}
          {hook h='displayShoppingCartFooter'}
        {/block}
      </div>

      <!-- Prawy blok: tylko gdy koszyk nie jest pusty -->
      {if $cart.products|@count > 0}
      <div class="cart-grid-right col-xs-12 col-lg-4">
        {block name='cart_summary'}
          <div class="card cart-summary">
            {block name='hook_shopping_cart'}
              {hook h='displayShoppingCart'}
            {/block}

            {block name='cart_totals'}
              {include file='checkout/_partials/cart-detailed-totals.tpl' cart=$cart}
            {/block}

            {block name='cart_actions'}
              {include file='checkout/_partials/cart-detailed-actions.tpl' cart=$cart}
            {/block}
          </div>
        {/block}
      </div>
      {/if}

    </div>
  </section>
{/block}
