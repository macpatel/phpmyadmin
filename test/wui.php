<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * runs all defined tests
 *
 * @version $Id$
 * @package phpMyAdmin-test
 */

/**
 *
 */
require_once 'AllTests.php';

echo '<pre>';
AllTests::main();
echo '</pre>';

?>