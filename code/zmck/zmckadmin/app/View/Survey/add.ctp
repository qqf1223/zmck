<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href='/survey/index' ><em>问答列表</em></a><span>|</span>
        <a href='/survey/add' class="on"><em>添加问答</em></a>   
    </div>
</div>
<form name="addsurvey" method="post" action="/survey/add" >
    <div id="div_setting_1" class="contentList pad-10">
        <table width="100%" class="table_form ">
            <tr>
                <th width="200">问答名称：</th>
                <td>
                    <input type="text" name="title" value="">
                </td>
            </tr>
            <tr>
                <th width="200">选项：</th>
                <td>
                    <input type="text" name="options[]" value=""><input type="button" value="添加选项" onclick="addoptions();">
                    <div id="options"></div>
                </td>
            </tr>
            <tr>
                <th width="200"></th>
                <td>
                    <input type="radio" name="ismultiple" value="0"  checked="checked"> 单选
                    <!-- <input type="radio" name="ismultiple" value="1"> 多选 -->
                </td>
            </tr>
            <tr>
                <th width="200"></th>
                <td>
                    <input type="radio" name="enable" value="0"> 隐藏
                    <input type="radio" name="enable" value="1" checked="checked"> 显示
                </td>
            </tr>
        </table>
    </div>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="提交" class="button">
</form>

<script type="text/javascript">
    function addoptions(){
        var html = '<div style="margin:3px 0;"><input type="text" name="options[]" class="input-text"></div>';
        $('#options').append(html);
    }
</script>