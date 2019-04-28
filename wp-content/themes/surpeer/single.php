<?php 
if(in_category('products')){
    //调用产品模板
    get_template_part('single-products');
}else if(in_category('news')){
     //调用新闻模板
    get_template_part('single-news');
}

?>