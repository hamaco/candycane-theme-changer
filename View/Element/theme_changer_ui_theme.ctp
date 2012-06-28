<?php
$ui = $currentuser['UserPreference']['pref']['ui_theme'];
if ( !empty( $ui ) )
{
	$css = '/themed/' . $ui . '/css/application.css';
	echo $this->Html->css( $css );
}
