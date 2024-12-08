{block name='product_miniature_item'}
<div class="js-product product{if !empty($productClasses)} {$productClasses}{/if}">
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
    <div class="thumbnail-container">
      <div class="product-description-container">
        {block name='product_thumbnail'}
          {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img
                src="{$product.cover.bySize.home_default.url}"
                alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                loading="lazy"
                data-full-size-image-url="{$product.cover.large.url}"
                class="custom-thumbnail"
              />
            </a>
          {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img
                src="{$urls.no_picture_image.bySize.home_default.url}"
                loading="lazy"
                class="custom-thumbnail"
              />
            </a>
          {/if}
        {/block}

        <div class="product-description">
          {block name='product_name'}
            <h3 class="h3 product-title">
              <a href="{$product.url}" content="{$product.url}">{$product.name|truncate:30:'...'}</a>
            </h3>
          {/block}

          <div class="price-cart-container">
          {block name='product_price_and_shipping'}
            {if $product.show_price}
              <div class="product-price-and-shipping">
                {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}
                  <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
                  {if $product.discount_type === 'percentage'}
                    <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                  {elseif $product.discount_type === 'amount'}
                    <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                  {/if}
                {/if}

                <span class="price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                  {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                  {if '' !== $smarty.capture.custom_price}
                    {$smarty.capture.custom_price nofilter}
                  {else}
                    {$product.price}
                  {/if}
                </span>
              </div>
            {/if}
          {/block}

          {block name='add_to_cart'}
            <div class="product-add-to-cart">
              <form action="{$product.add_to_cart_url}" method="post" class="ajax_add_to_cart" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
                <button type="submit" class="btn btn-primary add-to-cart">
                  DO KOSZYKA
                </button>
              </form>
            </div>
          {/block}
          </div>
        </div>
      </div>
    </div>
  </article>
</div>
{/block}

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

  .wishlist-button-add {
    display: none;
  }

 
</style>
