<?php

rex_extension::register('PACKAGES_INCLUDED', static function (rex_extension_point $ep) {
    // Ausgabe der Übergabewerte im Logfile
    //$var = rex_escape(var_export($ep, true));
    //demo_addon_logger::log('<pre>' . $var . '</pre>', $ep->getName());

    // Modus und URL für die Logfile-Ausgabe
    $rxmode = (rex::isBackend() && rex::getUser()) ? 'Backend' : 'Frontend';
    $url = $_SERVER['REQUEST_URI'];
    demo_addon_logger::log('Mode: ' . $rxmode . '<br>URL: ' . $url, $ep->getName());
});
