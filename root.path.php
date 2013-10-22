<?php
// Creation Date: 14 Mar 2012
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/


// Configure a fixed root path for requires coming from different starting points
// Use it by doing an 'ln -s' inside directories that require to address files.
// Do not use 'cp -l' as the system needs to get to the root path of your aplication, not the current path

define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
