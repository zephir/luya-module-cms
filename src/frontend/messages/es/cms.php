<?php

return [
    'tb_composition' => 'Idioma',
    'tb_properties' => 'Propiedades',
    'tb_seo' => 'Optimización de motores de búsqueda',
    'tb_seo_title' => 'Título',
    'tb_seo_description' => 'Descripción',
    'tb_seo_description_notfound' => 'Todavía no se ha añadido ninguna descripción a esta página!',
    'tb_seo_link' => 'Enlace URL',
    'tb_seo_keywords' => 'Palabras clave',
    'tb_seo_keywords_notfound' => 'No se encontraron palabras clave! Debe añadir palabras clave para analizar su contenido. ',
    'tb_seo_warning' => 'Algunas de sus palabras clave no se encuentran en su contenido, debe corregirlo cambiando las palabras clave o añadiendo contenido para las palabras clave definidas',
    'tb_edit_alt' => 'Editar esta página en la interfaz de CMS',
    'tb_visible_not_alt' => 'Esta página NO es visible para el visitante',
    'tb_visible_alt' => 'Esta página es visible para su visitante',
    'block_html_html_label' => 'Código HTML',
    'block_html_no_content' => 'Todavía no se ha añadido ningún código HTML.',
    'block_module_name' => 'Módulo',
    'block_module_modulename_label' => 'Nombre del módulo',
    'block_module_modulecontroller_label' => 'Nombre del Controlador (sin sufijo del controlador)',
    'block_module_moduleaction_label' => 'Nombre de acción (sin prefijo de acción)',
    'block_module_moduleactionargs_label' => 'Acción Argumente (json: { "var": "valor"})',
    'block_module_no_module' => 'Todavía no se ha proporcionado ningún módulo.',
    'block_module_integration' => 'Integración de módulos',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Sólo en los módulos de frontend config registrados están disponibles.',
    'block_group_dev_elements' => 'Desarrollo',
    'block_group_layout_elements' => 'Diseño',
    'block_group_basic_elements' => 'Lo esencial',
    'block_group_project_elements' => 'Proyecto',
    'block_group_text_elements' => 'Textos',
    'block_group_media_group' =>  'Media',
    
    // 1.0.0
    'block_module_strictrender' => 'Render estricto',
    'block_module_strictrender_help' => 'Cuando se habilita el procesamiento estricto, el módulo sólo ejecutará la ruta proporcionada (módulo, controlador, acción, parámetros) sin escuchar las rutas de acción y controlador.',
    'block_html_cfg_raw_label' => 'Renderizar HTML en Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
