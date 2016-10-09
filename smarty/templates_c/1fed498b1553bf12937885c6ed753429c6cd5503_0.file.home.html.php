<?php
/* Smarty version 3.1.29, created on 2016-10-09 18:07:29
  from "D:\wamp\www\PHP\work\shopping\smarty\templates\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57fa6b419b6ea3_07334907',
  'file_dependency' => 
  array (
    '1fed498b1553bf12937885c6ed753429c6cd5503' => 
    array (
      0 => 'D:\\wamp\\www\\PHP\\work\\shopping\\smarty\\templates\\home.html',
      1 => 1476029247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fa6b419b6ea3_07334907 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="http://127.0.0.1/PHP/work/shopping/css/bootstrap.css">
    <?php echo '<script'; ?>
 src="http://127.0.0.1/PHP/work/shopping/js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://127.0.0.1/PHP/work/shopping/js/bootstrap.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="container">
    	<table class="table table-hover " >
			<thead>
			<tr>
				<th>id</th>
				<th>名称</th>
				<th>详情</th>
				<th>单价</th>
				<th>数量</th>
			</tr>
			<tbody>
				<?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['goods']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
				<tr gid= <?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['gid'];?>
 >
					<td> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null);?>
 </td>
					<td> <?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['gname'];?>
 </td>
					<td> <?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['gdetail'];?>
 </td>
					<td> <?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['gprice'];?>
 </td>
					<td> <?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['gnum'];?>
 </td>
				</tr>
				<?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
			</tbody>
			
			</thead>
		</table>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    	var path="http://127.0.0.1/PHP/work/shopping/index.php"
    	$("tbody tr").click(function(){
    		$.ajax({
    			url:path+"/home/addList",
    			data:{gid:$(this).attr("gid")},
    			type:"get",
    			success:function(re){
    				console.log(re)
    			}
    		})
    	})
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
