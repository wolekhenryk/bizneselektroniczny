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
{block name='cart_detailed_actions'}
  <style>
    .custom-btn {
      background-color: #f3f3f3;
      color: #000;            
      border-radius: 4px;   
      padding: 10px 30px;     
      font-size: 14px;       
      text-transform: uppercase; 
      font-weight: 700;
      font-family: "Blogger-Sans Regular", sans-serif;
      border: none;
      margin-right: 36px;
      margin-bottom: 30px;
    }

    .my-btn:hover {
      background-color: #cdcdcd; 
      text-decoration: none;    
    }
    
    .text-sm-right1 button {
      margin-right: 10px;
    }

  </style>
  <div class="checkout1">
    {if $cart.minimalPurchaseRequired}
      <div class="alert alert-warning" role="alert">
        {$cart.minimalPurchaseRequired}
      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Zamawiam' d='Shop.Theme.Actions'}</button>
      </div>
    {elseif empty($cart.products) }
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Zamawiam' d='Shop.Theme.Actions'}</button>
      </div>
    {else}
      <div class="text-sm-right1">

        <a href="{$urls.pages.order}">
          <button type="submit" class="my-btn btn-gray radius upper" name="button2" value="button2">
            <span>{l s='Zamawiam' d='Shop.Theme.Actions'}</span>
          </button>
        </a>
        {hook h='displayExpressCheckout'}
      </div>
    {/if}
  </div>
{/block}
