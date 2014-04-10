<?php


// The autoloader for Artygeek namespaced classes
function artygeek_autoloader($className)
{
	if (! preg_match('/^Artygeek\\\\(.*)/', $className, $matches))
	{
		return;
    }

    $classFrag = str_replace('\\', '/', $matches[0]) . '.php';
    $currentPath = dirname(__FILE__);
    $classPath = "$currentPath/vendor/$classFrag";

	require_once($classPath);
}


spl_autoload_register('artygeek_autoloader', false, true);
