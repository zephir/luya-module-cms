<?php

return [
    'tb_composition' => '语言',
    'tb_properties' => '属性',
    'tb_seo' => 'SEO搜索优化',
    'tb_seo_title' => '标题',
    'tb_seo_description' => '描述',
    'tb_seo_description_notfound' => '当前页面没有添加描述.',
    'tb_seo_link' => 'URL链接',
    'tb_seo_keywords' => '关键字',
    'tb_seo_keywords_notfound' => '未找到关键字.您应该添加关键字来分析您的内容.',
    'tb_seo_warning'=>'您的某些关键字在您的内容中找不到，您应该通过更改关键字或将缺少的关键字添加到内容来解决这个问题。',
    'tb_edit_alt'=>'在CMS管理中编辑此页面',
    'tb_visible_not_alt'=>'这个网页对访客不可见',
    'tb_visible_alt'=>'这个页面对访问者是可见的',
    'block_html_html_label'=>'HTML代码',
    'block_html_no_content'=>'没有添加HTML代码。',
    'block_module_name'=>'模块',
    'block_module_modulename_label'=>'模块名称',
    'block_module_modulecontroller_label'=>'控制器名称（不带controller后缀）',
    'block_module_moduleaction_label'=>'动作名称（不带action前缀）',
    'block_module_moduleactionargs_label'=>'动作参数（json：{“var”：“value”}）',
    'block_module_no_module'=>'尚未指定模块。',
    'block_module_integration'=>'模块整合',
    'block_html_name'=>'HTML',
    'block_module_modulename_help'=>'只列出在配置文件中注册的前端模块。',
    'block_group_dev_elements'=>'高级',
    'block_group_layout_elements' => '布局',
    'block_group_basic_elements' => '基础',
    'block_group_project_elements' => '开发',
    'block_group_text_elements' => '文本',
    'block_group_media_group' => '媒体',

    // 1.0.0
    'block_module_strictrender' => '严格渲染',
    'block_module_strictrender_help' => '当严格渲染被启用时，模块将只运行提供的路由（模块，控制器，动作，参数）而不监听动作和控制器路由。',
    'block_html_cfg_raw_label' => '在Admin中渲染HTML',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
