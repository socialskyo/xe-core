<?php

if(!defined('__XE__'))
	exit();

/**
 * @file counter.addon.php
 * @author NHN (developers@xpressengine.com)
 * @brief Counter add-on
 */
// Execute if called_position is before_display_content
if(Context::isInstalled() && $called_position == 'before_module_init' && Context::get('module') != 'admin' && Context::getResponseMethod() == 'HTML')
{
	$oCounterController = getController('counter');
	$oCounterController->counterExecute();
}
/* End of file counter.addon.php */
/* Location: ./addons/counter/counter.addon.php */
