<?php

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_enter_cancel','0.1');


App::uses('CakeEventManager', 'Event');

CakeEventManager::instance()->attach(function()
  {
    $setting = ClassRegistry::getObject('Setting');
    $setting->ui_theme = '';
  }, 'View.beforeRender'
);


$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
  'ui_theme',
  '../../Plugin/CcThemeChanger/View/Element/theme_changer_ui_theme',
  false
);
$hookContainer->registerElementHook(
  'my/preferences',
  '../../Plugin/CcThemeChanger/View/Element/theme_changer_preferences',
  false
);
