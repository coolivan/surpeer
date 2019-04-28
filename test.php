
	
	
	
	<?php
    // 加载 WordPress 环境
    // define( 'WP_DEBUG', true ); / * 要 debug 模式 取消注释。*/
    require( './wp-load.php' );
    // require_once( './wp-admin/admin.php' ); /* 要 is_admin() 取消注释 */
?>
<pre>
<?php
    /* 下面是测试的代码 */
    var_dump( is_admin() );
?>


</pre>


