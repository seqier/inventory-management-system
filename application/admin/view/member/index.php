{extend name="base:base" /} {block name="body"} 
<div class="table-common">
    <div class="left">
        <a href="{:url('add')}" title="新增会员" class="btn btn-default"><i class="iconfont icon-tianjia"></i> 新增会员</a>
    </div>
    <div class="left">
        <form class="form-inline" action="{:url('index', ['pinyin'=>$pinyin])}" method="get">
            <select name="g_id" class="form-control">
                <option value="">会员分组</option>
                <?php echo html_select(model('member_group')->lists_select_tree(), request()->get('g_id')) ?>
            </select>
            <input style="width: 150px;" type="text" class="form-control" name="keyword" value="{$Think.get.keyword}" placeholder="姓名搜索" />
            <button type="submit" class="btn btn-primary" title="查询会员"><i class="iconfont icon-sousuo"></i> 搜索</button>
    </div>
</div>
<p>
    <small><i class="iconfont icon-tishi"></i> 查询到了<strong>{$count}</strong>个会员</small>
</p>
{$tpl_list}
{$pages}
{/block}