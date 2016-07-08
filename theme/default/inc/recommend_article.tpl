<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- {if $recommend_article} -->
<div class="incBox">
 <h3><a href="{$url.article}">{$lang.article_news}</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$recommend_article name=recommend_article item=article} -->
  <a href="{$article.url}"><li<!-- {if $smarty.foreach.recommend_article.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b>{$article.title|truncate:50:"..."}</li></a>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->