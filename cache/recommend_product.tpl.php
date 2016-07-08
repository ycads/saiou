<?php /* Smarty version 2.6.26, created on 2016-07-08 22:16:04
         compiled from inc/recommend_product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'inc/recommend_product.tpl', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['recommend_product']): ?>
<div class="incBox">
 <h3><a href="<?php echo $this->_tpl_vars['url']['product']; ?>
"><?php echo $this->_tpl_vars['lang']['product_news']; ?>
</a></h3>
 <div id="divcenter">
 <ul class="recommendProduct">
  <?php $_from = $this->_tpl_vars['recommend_product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_product'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_product']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['recommend_product']['iteration']++;
?>
  <li style="width: 200px;height: 250px; margin-bottom: 10px;">
  	<div class="view">
        <img src="<?php echo $this->_tpl_vars['product']['thumb']; ?>
" />
        <div class="mask" style="padding-right: 20px">
            <h2><?php echo $this->_tpl_vars['product']['name']; ?>
</h2>
            <p><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")); ?>
</p>
            <a href="<?php echo $this->_tpl_vars['product']['url']; ?>
" class="info">查看</a>
        </div>
    </div>
  </li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
 </div>
</div>
<?php endif; ?>