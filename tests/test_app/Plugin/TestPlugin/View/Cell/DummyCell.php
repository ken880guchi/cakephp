<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
namespace TestPlugin\View\Cell;

/**
 * DummyCell class
 *
 */
class DummyCell extends \Cake\View\Cell {

/**
 * Default cell action.
 *
 * @return void
 */
	public function display() {
	}

/**
 * Simple echo.
 *
 * @param string $msg
 * @return void
 */
	public function echoThis($msg) {
		$this->set('msg', $msg);
	}

}