<?php

/*
| ------------------------------------------------------------------------------
| Idiomas
| ------------------------------------------------------------------------------
| Definir los idiomas para permitir las traducciones de ACF.
| https://www.advancedcustomfields.com/resources/multilingual-custom-fields/
|
*/

function my_acf_settings_default_language() {
    return pll_default_language();
}
add_filter('acf/settings/default_language', 'my_acf_settings_default_language');

 
function my_acf_settings_current_language() {
    return pll_current_language();
}
add_filter('acf/settings/current_language', 'my_acf_settings_current_language');