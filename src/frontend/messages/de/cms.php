<?php

return [
    'tb_composition' => 'Sprachen',
    'tb_properties' => 'Eigenschaften',
    'tb_seo' => 'Suchmaschinenoptimierung',
    'tb_seo_title' => 'Titel',
    'tb_seo_description' => 'Beschreibung',
    'tb_seo_description_notfound' => 'Sie haben noch keine beschreibung für diese Seite hinterlegt.',
    'tb_seo_link' => 'Link-Adresse',
    'tb_seo_keywords' => 'Stichworte',
    'tb_seo_keywords_notfound' => 'Sie haben noch keine Stichworte für diese Seite hinterlegt.',
    'tb_seo_warning' => 'Ihre definierten Stichworte wurde nicht im Inhalt gefunden. Nicht gefunden Stichworte sollten in den Inhalt integriert werden oder passen Sie die Stichworte an.',
    'tb_edit_alt' => 'Diese Seite im CMS bearbeiten',
    'tb_visible_not_alt' => 'Diese Seite ist für den Besucher unsichtbar',
    'tb_visible_alt' => 'Diese Seite ist für den Besucher sichtbar',
    'block_html_html_label' => 'HTML-Inhalt',
    'block_html_no_content' => 'Es wurde noch kein HTML Code eingegeben.',
    'block_html_name' => 'HTML',
    'block_module_name' => 'Modul',
    'block_module_modulename_label' => 'Modulname',
    'block_module_modulecontroller_label' => 'Controller Name (ohne Controller suffix)',
    'block_module_moduleaction_label' => 'Action Name (ohne action prefix)',
    'block_module_moduleactionargs_label' => 'Action Argumente (json: {"var":"value"})',
    'block_module_no_module' => 'Es wurde noch kein Modul angegeben.',
    'block_module_integration' => 'Modulintegration',
    'block_module_modulename_help' => 'Nur frontend module aus der Konfiguration sind verfügbar.',
    'block_group_dev_elements' => 'Entwickler',
    'block_group_layout_elements' => 'Layouts',
    'block_group_basic_elements' => 'Standard',
    'block_group_project_elements' => 'Projekt',
    'block_group_text_elements' => 'Texte',
    'block_group_media_group' => 'Medien',
    
    // 1.0.0
    'block_module_strictrender' => 'Striktes rendern',
    'block_module_strictrender_help' => 'Wenn striktes rendern aktiviert ist, wird nur die route ausgeführt welche angegeben ist (module, controller, action, params) ohne auf umgebungs variable zu hören.',
    'block_html_cfg_raw_label' => 'HTML im Admin ausführen.',
    
    // 3.4.0
    'tag_alias_readme' => 'Das alias-Tag ermöglicht es, applikations-spezifische sowie vordefinierte Aliasse zu verwenden. Mit `alias[@web]` können zum Beispiel Bilder im Public-HTML-Verzeichnis verlinkt werden: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Erstelle einen Link zu einem Menü-Eintrag, wobei die Seiten-ID als Key anzugeben ist (Seiten-IDs werden beim Überfahren der Website-Navigation in der Administration angezeigt).',
    'tag_page_readme' => 'Lade den Inhalt einer kompletten Seite oder eines Platzhalters einer Seite. Der erste Parameter ist die Seiten-ID (die beim Überfahren der Website-Navigation in der Administration angezeigt wird): `page[1]`. Wenn nur der Inhalt eines Platzhalters des CMS-Layouts geladen werden soll, verwenden Sie den zweiten Parameter: `page[1](placeholderName)`.',
];
