<?php

return [
    'tb_composition' => 'Γλώσσα',
    'tb_properties' => 'Ιδιότητες',
    'tb_seo' => 'Βελτιστοποίηση Μηχανής Αναζήτησης',
    'tb_seo_title' => 'Τίτλος',
    'tb_seo_description' => 'Περιγραφή',
    'tb_seo_description_notfound' => 'δεν έχει δοθεί περιγραφή ακόμη για αυτή τη σελίδα!',
    'tb_seo_link' => 'URL Link',
    'tb_seo_keywords' => 'Λέξεις Κλειδιά',
    'tb_seo_keywords_notfound' => 'Δεν υπάρχουν λέξεις κλειδιά! Πρέπει να προσθέσετε λέξεις κλειδιά ώστε να αναλυθεί το περιεχόμενο σας.',
    'tb_seo_warning' => 'Κάποιες από τις λέξεις κλειδιά δεν βρέθηκαν στο περιεχόμενο, αυτό θα πρέπει να διορθωθεί αλλάζοντας τις λέξεις κλειδιά ή προθέτοντας τις στο περιεχόμενο',
    'tb_edit_alt' => 'Επεξεργαστήτε την σελίδα στο CMS interface',
    'tb_visible_not_alt' => 'Αυτή η σελίδα ΔΕΝ είναι ορατή για τον επισκέπτη',
    'tb_visible_alt' => 'Αυτή η σελίδα είναι ορατή για τον επισκέπτη',
    'block_html_html_label' => 'κώδικας HTML',
    'block_html_no_content' => 'Δεν έχει ακόμη προστεθεί κώδικας HTML.',
    'block_module_name' => 'Module',
    'block_module_modulename_label' => 'Ονομα Module',
    'block_module_modulecontroller_label' => 'Ονομα ελεγκτή - Controller Name (without controller suffix)',
    'block_module_moduleaction_label' => 'Ονομα Δράσης - Action Name (without action prefix)',
    'block_module_moduleactionargs_label' => 'Ορίσματα Δράσης - Action Argument (json: {"var":"value"})',
    'block_module_no_module' => 'Δεν έχει δοθεί module.',
    'block_module_integration' => 'Ενσωμάτωση Module',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Only frontend modules that are registered in the config file are listed.',
    'block_group_dev_elements' => 'Ανάπτυξη',
    'block_group_layout_elements' => 'Διάταξη',
    'block_group_basic_elements' => 'Βασικά',
    'block_group_project_elements' => 'Εργο - Project',
    'block_group_text_elements' => 'Κείμενα',
    'block_group_media_group' => 'Πολυμέσα',
    
    // 1.0.0
    'block_module_strictrender' => 'Strict Render',
    'block_module_strictrender_help' => 'When strict render is enabled, the module will only run the provided route (module, controller, action, params) without listening to action and controller routes.',
    'block_html_cfg_raw_label' => 'Render HTML in Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
