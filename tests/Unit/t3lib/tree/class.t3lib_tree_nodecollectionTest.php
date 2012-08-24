<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 Stefan Galinski <stefan.galinski@gmail.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Testcase for class t3lib_tree_NodeCollection.
 *
 * @author Stefan Galinski <stefan.galinski@gmail.com>
 * @package TYPO3
 * @subpackage t3lib
 */
class t3lib_tree_NodeCollectionTest extends tx_phpunit_testcase {

	public function setUp() {

	}

	public function tearDown() {

	}

	/**
	 * @test
	 */
	public function sortNodes() {
		$nodeCollection = new \TYPO3\CMS\Backend\Tree\TreeNodeCollection(array(
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 15),
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 25),
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 5),
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 2),
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 150),
			array('serializeClassName' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode', 'id' => 67)
		));
		$nodeCollection->asort();
		$expected = array(2, 5, 15, 25, 67, 150);
		$ids = array();
		foreach ($nodeCollection as $node) {
			$ids[] = $node->getId();
		}
		$this->assertSame($expected, $ids);
	}

}

?>