{extend name="base:base" /}
{block name="body"}  
<div class="table-common"> 
    <div class="left">
        <a class="btn btn-default" href="<?php echo url('menu_add'); ?>"><i class="iconfont icon-tianjia"></i> 添加</a>
    </div>
</div>
	
{$tpl_list}
{/block}