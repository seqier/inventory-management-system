{extend name="base:base" /} {block name="body"}
<div class="table-common">
    <div class="left">
        <a class="btn btn-default" href="<?php echo url('member/index') ?>"><i class="iconfont icon-flow"></i> 返回列表</a>
        <button type="submit" class="btn btn-primary ajax-post" target-form="form-horizontal"><i class="iconfont icon-tubiao_tijiao"></i> 保存</button>
    </div>
</div>
<form class="form-horizontal container" action="{:url('edit')}" method="post">
    <input type="hidden" name="id" value="{$Think.get.id}" />
    {$tpl_form}
</form>
{/block}
{block name="foot_js"}
<!--加载时间框--> 
<script>
    $(function () {
        $('#birthday').datetimepicker(
                {lang: 'zh', format: 'Y-m-d', timepicker: false, closeOnDateSelect: true});
    });
</script> 
<!--加载时间框END-->
{/block}