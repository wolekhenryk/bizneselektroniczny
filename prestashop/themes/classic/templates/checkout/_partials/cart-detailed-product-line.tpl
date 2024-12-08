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

<style>
  .product-line-grid {
    display: grid;
    grid-template-columns: 4fr 1fr 1fr 1fr 1fr;
    padding-left: 1rem;
    align-items: center;
    height: auto;
  }

  .product-line-grid-left {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }

  .product-image.media-middle {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }

  .product-line-grid-left img {
    max-width: 80px;
  }

  .product-line-info a{
    font-family: 'Blogger Sans Medium', sans-serif;
    font-weight: bold;
    font-size: 20px;
  }

  .product-item1.rwd-hide-medium.time {
    font-family: 'Blogger Sans Regular', sans-serif;
    font-size: 13px;
  }

  .cart-line-product-actions {
    padding-left: 30px;
  }

  .input-group-btn-vertical {
    display: none;
  }

  .cart-overview.js-cart.cus {
    display: flex;
    flex-direction: row;
    margin-right: 0;
    margin-left: 0;
    padding-right: 0;
    padding-left: 0;
    width: 100%;
  }

  .price {
    color: #000;
    font-size: 20px;
  }
</style>

<div class="product-line-grid">
  <!--  product line left content: image-->
  <div class="product-line-grid-left">
    <div class="product-image media-middle">
      {if $product.default_image}
        <img src="{$product.default_image.bySize.cart_default.url}" alt="{$product.name|escape:'quotes'}" loading="lazy">
        <div class="product-line-info">
          <a class="label" href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a>
        </div>
      {else}
        <img src="{$urls.no_picture_image.bySize.cart_default.url}" loading="lazy" />
        <div class="product-line-info">
          <a class="label" href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a>
        </div>
      {/if}
      </div>
  </div>

  <div class="product-item1 rwd-hide-medium time">24h</div>

  <div class="col-md-6 col-xs-6 qty">
    {if !empty($product.is_gift)}
      <span class="gift-quantity">{$product.quantity}</span>
    {else}
      <input
        class="js-cart-line-product-quantity"
        data-down-url="{$product.down_quantity_url}"
        data-up-url="{$product.up_quantity_url}"
        data-update-url="{$product.update_quantity_url}"
        data-product-id="{$product.id_product}"
        type="number"
        inputmode="numeric"
        pattern="[0-9]*"
        value="{$product.quantity}"
        name="product-quantity-spin"
        aria-label="{l s='%productName% product quantity field' sprintf=['%productName%' => $product.name] d='Shop.Theme.Checkout'}"
      />
    {/if}
  </div>

  <div class="product-line-info product-price h5 {if $product.has_discount}has-discount{/if}">
    {if $product.has_discount}
      <div class="product-discount">
        <span class="regular-price">{$product.regular_price}</span>
        {if $product.discount_type === 'percentage'}
          <span class="discount discount-percentage">
              -{$product.discount_percentage_absolute}
            </span>
        {else}
          <span class="discount discount-amount">
              -{$product.discount_to_display}
            </span>
        {/if}
      </div>
    {/if}
    <div class="current-price">
      <span class="price">{$product.price}</span>
      {if $product.unit_price_full}
        <div class="unit-price-cart">{$product.unit_price_full}</div>
      {/if}
    </div>
    {hook h='displayProductPriceBlock' product=$product type="unit_price"}
  </div>

  <div class="ps2">
    <div class="col-md-6 col-xs-2 price">
      <span class="product-price">
        <strong>
          {if !empty($product.is_gift)}
            <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
          {else}
            {$product.total}
          {/if}
        </strong>
      </span>
    </div>

    <div class="cart-line-product-actions">
      <a
          class                       = "remove-from-cart"
          rel                         = "nofollow"
          href                        = "{$product.remove_from_cart_url}"
          data-link-action            = "delete-from-cart"
          data-id-product             = "{$product.id_product|escape:'javascript'}"
          data-id-product-attribute   = "{$product.id_product_attribute|escape:'javascript'}"
          data-id-customization   	  = "{$product.id_customization|escape:'javascript'}"
      >
        {if empty($product.is_gift)}
          <img class="material-icons float-xs-left" src="{$base_dir}/themes/classic/assets/img/delete.png" style="width: auto; padding-left: 20px;" />
        {/if}
      </a>
    </div>
  </div>

  {foreach from=$product.attributes key="attribute" item="value"}
    <div class="product-line-info {$attribute|lower}">
      <span class="label">{$attribute}:</span>
      <span class="value">{$value}</span>
    </div>
  {/foreach}
</div>
