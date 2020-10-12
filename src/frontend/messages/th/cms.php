<?php

return [
    'tb_composition' => 'ภาษา',
    'tb_properties' => 'คุณสมบัติ',
    'tb_seo' => 'Search engine optimization (SEO)',
    'tb_seo_title' => 'หัวเรื่อง',
    'tb_seo_description' => 'คำอธิบาย',
    'tb_seo_description_notfound' => 'ยังไม่มีคำอธิบายของหน้านี้ถูกเพิ่ม',
    'tb_seo_link' => 'ลิ้งค์ URL',
    'tb_seo_keywords' => 'คีย์เวิร์ด',
    'tb_seo_keywords_notfound' => 'ไม่เจอคีย์เวิร์ด คุณควรจะเพิ่มคีย์เวิร์ดเข้ามาเพื่อที่จะทำการวิเคราะห์เนื้อหา',
    'tb_seo_warning' => 'คีย์เวิร์ดบางคำไม่มีอยู่ในเนื้อหา คุณควรที่จะเปลี่ยนคีย์เวิร์ดหรือว่าเพิ่มเนื้อหาที่ตรงกับคีย์เวิร์ดที่หายไป',
    'tb_edit_alt' => 'แก้ไขหน้านี้ใน CMS administration',
    'tb_visible_not_alt' => 'หน้านี้ถูกซ่อนอยู่สำหรับผู้เข้าชม',
    'tb_visible_alt' => 'หน้านี้ถูกผู้เข้าชมมองเห็นได้',
    'block_html_html_label' => 'โค้ด HTML',
    'block_html_no_content' => 'ยังไม่มีโค้ด HTML ถูกเพิ่มเข้ามา',
    'block_module_name' => 'โมดูล',
    'block_module_modulename_label' => 'ชื่อโมดูล',
    'block_module_modulecontroller_label' => 'ชื่อตัวควบคุม (ไม่มีคำต่อท้าย)',
    'block_module_moduleaction_label' => 'ชื่อการกระทำ (ไม่มีคำนำหน้า)',
    'block_module_moduleactionargs_label' => 'พารามิเตอร์การกระทำ (json: {"var":"value"})',
    'block_module_no_module' => 'ยังไม่มีโมดูลถูกเลือก',
    'block_module_integration' => 'การผสานโมดูล',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'แสดงเฉพาะโมดูลที่ถูกเพิ่มไว้ในคอมฟิกไฟล์',
    'block_group_dev_elements' => 'การพัฒนา',
    'block_group_layout_elements' => 'เลย์เอาท์',
    'block_group_basic_elements' => 'พื้นฐาน',
    'block_group_project_elements' => 'โครงการ',
    'block_group_text_elements' => 'ข้อความ',
    'block_group_media_group' => 'มีเดีย',
    
    // 1.0.0
    'block_module_strictrender' => 'การแสดงแบบจำกัด',
    'block_module_strictrender_help' => 'เมื่อการแสดงแบบจำกัดถูกเปิด โมดูลจะทำงานเฉพาะเส้นทางที่กำหนดไว้ (module, controller, action, params) โดยไม่ต้องดูการกระทำและการควบคุม',
    'block_html_cfg_raw_label' => 'แสดง HTML ในแอดมิน',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
