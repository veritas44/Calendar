<?php
/* SVN FILE: $Id$ */
/**
 * HelpersGroupTest file
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * HelpersGroupTest class
 *
 * This test group will run all test in the cases/libs/view/helpers directory.
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class HelpersGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core helpers'
 * @access public
 */
	var $label = 'All Helpers';
/**
 * HelpersGroupTest method
 *
 * @access public
 * @return void
 */
	function HelpersGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'view' . DS . 'helper');
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'libs' . DS . 'view' . DS . 'helpers');
	}
}
?>