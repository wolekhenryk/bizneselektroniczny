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

{block name='head' append}
  <meta property="og:type" content="product">
  {if $product.cover}
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  {if $product.show_price}
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
  {/if}
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}

  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">


  <style>
.blockreassurance_product{
  display: none !important;
}

.slider-container{
  display: none;
}

.tabs{
  background-color: transparent !important;
    margin: 0 auto;
  padding: 0 0;
  width:45%;
}

.innerbox{
      margin: 0 auto;
  padding: 0 0;
  width: 45%;
}

 .qty {
    margin-right: 0 !important;
}

.add-to-cart {
    height: auto !important;
    padding-top: 0 !important;
}

.product-info-container{
        width: 29%;
}

.margin5{
          margin-left: 5%;

}

.product-cover-container{
        width: 16%;
}

.product-cover-container img{
    width: 270px !important;
    height: 415px;
}

.product-container{
  display: flex;
  justify-content: center;
  padding-top: 65px;

}

.product-cover .layer .zoom-in {
    font-size: 3.125rem;
    color: #fff;
}

 .star-rating {
            display: flex;
            padding-bottom: 5px;
        }

        .star {
            width: 21px;
            height: 19px;
            background-image: url('{$base_dir}/themes/classic/assets/img/star0.png'); /* Pusta gwiazdka */
            background-size: contain;
            background-repeat: no-repeat;
            cursor: pointer;
            margin: 2px 2px;
            transition: transform 0.2s;
        }

        .star.filled {
            background-image: url('{$base_dir}/themes/classic/assets/img/star1.png'); /* Pełna gwiazdka */
        }

        .name{
          color: #022944;
    font-family: "Caveat Brush";
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 34px;
    text-transform: uppercase;
    margin: 0 0 10px 0;
        }

        .codes{
          color: #6a6969;
          font-size: 13px;
        }

    body{
     font-family: 'Blogger Sans Regular', Arial, sans-serif;
    }

    .desc-label{
      padding: 0;
    border: 0;
        margin-top: 15px;
    margin-bottom: 6px;
    font-size: 20px;
    color: #032944;
    font-size: 20px;
    line-height: 24px;
    font-weight: bold;
    font-family: "Blogger Sans Medium", sans-serif;
    text-transform: uppercase;
    }

    .product-description{
      color: #032944;
    font-size: 16px;
    line-height: 22px;
    }

    .table tbody tr {
    background-color: #ffffff;
}

.table tbody tr:nth-child(2n) {
    background-color: #ebebeb;
}

table.table td{
  vertical-align: middle;
}

table tbody tr td:first-child {
    border-right: 0;
    color: #6a6969;
    font-size: 16px;
    line-height: 22px;
    border-radius: 3px 0 0 3px;
    font-weight: 400 !important;
    font-family: "Blogger Sans Medium", sans-serif;
        text-transform: none;

}

.table tbody tr td:last-child {
    color: #032944;
    font-size: 16px;
    line-height: 22px;
    text-transform: none;
    border-radius: 0 3px 3px 0;
        font-family: "Blogger Sans Medium", sans-serif;
        font-weight: 400 !important;
}

table.table td {
    width: 50%;
    padding: 8px 20px;
}

.bottom-footer-conta {
  padding: 0 0;
  margin: 0 auto;
    width: 62.5%;
}

.g-row {
    display: flex
;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.f-grid-61, .f-grid-62 {
    flex: 1;
}

.f-grid-62 {
    margin-left: 33px;
}

.g-row img {
    height: auto;
}

#wrapper {
    background: transparent !important;
}

.last-images{
display:flex;
justify-content: space-between;
  width:45%;
  margin: 35px auto;
      margin-bottom: 60px;

}

.last-images img{
  width: 150px;
  height: 230px;
}

.last-label{
  text-align: ceneter;
  color: #032944;
    font-family: 'Caveat Brush', cursive;
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 1;
    text-transform: uppercase;
    text-align: center;
    padding: 0;
      margin: 35px 0;
}

</style>
{/block}

{block name='head_microdata_special'}
  {include file='_partials/microdata/product-jsonld.tpl'}
{/block}

{block name='content'}

  <section id="main">
    <meta content="{$product.url}">

    <div class="row product-container js-product-container">
      <div class="product-cover-container">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            {/block}
          </section>
        {/block}
        </div>
        <div class="product-info-container">
        <div class="margin5">

        <div class="star-rating">
        <div class="star" data-value="1"></div>
        <div class="star" data-value="2"></div>
        <div class="star" data-value="3"></div>
        <div class="star" data-value="4"></div>
        <div class="star" data-value="5"></div>
    </div>
        
          {block name='page_header_container'}
            {block name='page_header'}
              <h1 class="h1 name">{block name='page_title'}{$product.name}{/block}</h1>
            {/block}
          {/block}

          <div class="codes">
              Kod produktu: FEB140847 <br> Kod ISBN: 9780785190110
          </div>

          {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block}



            {if $product.is_customizable && count($product.customizations.fields)}
              {block name='product_customization'}
                {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
              {/block}
            {/if}

            <div class="product-actions js-product-actions">
              {block name='product_buy'}
                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id" class="js-product-customization-id">

                  {block name='product_variants'}
                    {include file='catalog/_partials/product-variants.tpl'}
                  {/block}

                  {block name='product_pack'}
                    {if $packItems}
                      <section class="product-pack">
                        <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                        {foreach from=$packItems item="product_pack"}
                          {block name='product_miniature'}
                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack showPackProductsPrice=$product.show_price}
                          {/block}
                        {/foreach}
                    </section>
                    {/if}
                  {/block}

                  {block name='product_discounts'}
                    {include file='catalog/_partials/product-discounts.tpl'}
                  {/block}

                  {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                  {/block}


                  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                  {block name='product_refresh'}{/block}
                </form>
              {/block}

            </div>



        </div>
      </div>
    </div>

    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products row">
            {foreach from=$accessories item="product_accessory" key="position"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory position=$position productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}


            {block name='product_tabs'}
              <div class="tabs">

                <div class="desc-label">Opis produktu</div>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in{if $product.description} active js-product-tab-active{/if}" id="description" role="tabpanel">
                   {block name='product_description'}
                     <div class="product-description">{$product.description nofilter}</div>
                   {/block}
                 </div>

                 {block name='product_details'}
                   {include file='catalog/_partials/product-details.tpl'}
                 {/block}

                 {block name='product_attachments'}
                   {if $product.attachments}
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
                         {foreach from=$product.attachments item=attachment}
                           <div class="attachment">
                             <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                             <p>{$attachment.description}</p>
                             <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                               {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                             </a>
                           </div>
                         {/foreach}
                       </section>
                     </div>
                   {/if}
                 {/block}

                 {foreach from=$product.extraContent item=extra key=extraKey}
                 <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                   {$extra.content nofilter}
                 </div>
                 {/foreach}
              </div>
            </div>
          {/block}


<div class="innerbox">
                <div class="desc-label" style="margin-bottom: 15px;">Szczegóły produktu</div>

            <table class="table">
                <tbody>
                                                                        <tr class="s-row">
                                <td class="name">Scenariusz</td>
                                <td class="value">NATHAN EDMONDSON, KELLY SUE DECONNICK, G. WILLOW WILSON, CHARLES SOULE, JASON AARON &amp; RYAN NORTH</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Rysunki</td>
                                <td class="value">PHIL NOTO, DAVID LOPEZ, ADRIAN ALPHONA, JAVIER PULIDO, RUSSELL DAUTERMAN &amp; ERICA HENDERSON</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Okładka</td>
                                <td class="value">JAMIE MCKELVIE, KEVIN P. WADA &amp; PHIL NOTO</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name" style="font-weight: 600;">Data wydania</td>
                                <td class="value" style="font-weight: 600;">27.01.2016</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Oprawa</td>
                                <td class="value">miękka</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Liczba stron</td>
                                <td class="value">136</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Cena okładkowa</td>
                                <td class="value">14.99 $</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Format</td>
                                <td class="value">17 cm x 26 cm</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Druk</td>
                                <td class="value">kolorowy</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Sugerowany dla dorosłych</td>
                                <td class="value">Nie</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Rodzaj</td>
                                <td class="value">Wydanie zbiorcze</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Język</td>
                                <td class="value">angielski</td>
                            </tr>
                                                                                                <tr class="s-row">
                                <td class="name">Stan</td>
                                <td class="value">Nowy</td>
                            </tr>
                                                                                    	<tr class="s-row">
                            <td class="name">Kod ISBN</td>
                            <td class="value">9780785199007</td>
                        </tr>
                                    </tbody>
            </table>
        </div>

          <div class="last-label">
          Ostatnio oglądane
          </div>

          <div class="last-images">
            <img src="/themes/classic/assets/img/1.jpg" alt="" width="auto" height="auto">
            <img src="/themes/classic/assets/img/2.jpg" alt="" width="auto" height="auto">
            <img src="/themes/classic/assets/img/3.jpg" alt="" width="auto" height="auto">
            <img src="/themes/classic/assets/img/4.jpg" alt="" width="auto" height="auto">
            <img src="/themes/classic/assets/img/5.jpg" alt="" width="auto" height="auto">
          </div>

    <div class="bottom-footer-conta">
               <div class="box resetcss box_custom" id="bottom-banners">
                 <div class="g-row">
                   <div class="f-grid-61">
                       <img src="/themes/classic/assets/img/napisz-do-nas.png" alt="" width="auto" height="auto">
                   </div>
                   <div class="f-grid-62">
                       <img src="/themes/classic/assets/img/zamowienia-specjalne.png" alt="" width="auto" height="auto">
                   </div>
                 </div>
               </div>
    </div>

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>



   <script>
        // Pobierz wszystkie gwiazdki
        const stars = document.querySelectorAll('.star');

        let currentRating = 0; // Przechowywanie aktualnej oceny

        // Dodaj nasłuchiwacze zdarzeń
        stars.forEach((star, index) => {
            star.addEventListener('mouseover', () => {
                highlightStars(index);
            });

            star.addEventListener('mouseout', () => {
                resetStars();
                highlightStars(currentRating - 1); // Zachowaj trwałą ocenę
            });

            star.addEventListener('click', () => {
                currentRating = index + 1; // Ustaw ocenę
                highlightStars(index);
            });
        });

        // Funkcja do podświetlenia gwiazdek
        function highlightStars(index) {
            stars.forEach((star, i) => {
                if (i <= index) {
                    star.classList.add('filled'); // Pełna gwiazdka
                } else {
                    star.classList.remove('filled'); // Pusta gwiazdka
                }
            });
        }

        // Funkcja do resetowania gwiazdek
        function resetStars() {
            stars.forEach(star => star.classList.remove('filled'));
        }
    </script>

{/block}


