<?php /* Smarty version 2.6.30, created on 2024-10-20 18:51:27
         compiled from abc_view.tpl */ ?>
<h1>Numbers:</h1>
<ul>
    <?php $_from = $this->_tpl_vars['numbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['number']):
?>
        <li><?php echo $this->_tpl_vars['number']; ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
</ul>
<p>Name: <?php echo $this->_tpl_vars['name']; ?>
</p>