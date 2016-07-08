<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- {if $recommend_product} -->
<div class="incBox">
 <h3><a href="{$url.product}">{$lang.product_news}</a></h3>
 <div id="divcenter">
 <ul class="recommendProduct">
  <!-- {foreach from=$recommend_product name=recommend_product item=product} -->
  <li style="width: 200px;height: 250px; margin-bottom: 10px;">
  	<div class="view view-tenth">
        <img src="{$product.thumb}" />
        <div class="mask" style="padding-right: 20px">
            <h2>{$product.name}</h2>
            <p>{$product.description|truncate:30:"..."}</p>
            <a href="{$product.url}" class="info">查看</a>
        </div>
    </div>
  </li>
  <!-- {/foreach} -->
 </ul>
 </div>
</div>
<!-- {/if} -->