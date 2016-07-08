<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="flexslider">
 <ul class="slides">
  <!-- {foreach from=$show_list name=show item=show} -->
  <li style="background:url({$show.show_img}) center 0 no-repeat;"><a href="{$show.show_link}">div+css</a></li>
  
  <!-- {/foreach} -->
 </ul>
</div>
<script type="text/javascript">
{literal}
$(function(){
	$('.flexslider').flexslider({
		directionNav: true,
		pauseOnAction: false
	});
});
{/literal}
</script>