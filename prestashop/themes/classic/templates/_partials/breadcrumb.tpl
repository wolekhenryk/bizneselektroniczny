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
<div class="breadcrumb-wrapper">
<nav data-depth="{$breadcrumb.count}" class="breadcrumb hidden-sm-down">
<div class="breadcrumb-home">
<img src="{$base_dir}/themes/classic/assets/img/ico_home.png" alt="Najnowsza dostawa">
</div>
  <ol>
    {block name='breadcrumb'}
      {foreach from=$breadcrumb.links item=path name=breadcrumb}
        {block name='breadcrumb_item'}
          <li>
            {if not $smarty.foreach.breadcrumb.last}
              <a href="{$path.url}"><span>{$path.title}</span></a>
            {else}
              <span>{$path.title}</span>
            {/if}
          </li>
        {/block}
      {/foreach}
    {/block}
  </ol>
</nav>
</div>


<style>
#wrapper .breadcrumb li::after {
    margin: 0.3125rem;
    content: "»";
}

.breadcrumb-wrapper{
  margin: 0 0;
  padding: 0 0;
  width: 100%;
  border-bottom: 1px solid #e1e1e1;
}

.breadcrumb{
      background: #fff !important;
    padding: 8px 0 !important;
    margin: 0 auto;
    width: 62.5%;
    display: flex;
    align-items:center;
}

.breadcrumb-home img{
      width: 20px;
    height: 20px;
    margin: 0 7px 9px 0;
}

.breadcrumb ol{
  text-transform: uppercase;
    padding-left: 0;
    padding-right: 2px;
    color: #6a6969;
    font-size: 12px;
}

#wrapper .breadcrumb li a{
  text-transform: uppercase;
    padding-left: 0;
    padding-right: 2px;
    color: #6a6969;
    font-size: 12px;
    text-decoration: none;
}

#wrapper .breadcrumb li:last-child {
      color: #6a6969;
}

#content-wrapper #wrapper{
  background-color:transparent; 
}

body{
  background-color: #fff !important;
}
</style>
