<?php
namespace TYPO3\CMS\Install\Configuration;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Christian Kuhn <lolli@schwarzbu.ch>
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
 * Abstract feature class implements common code
 */
abstract class AbstractFeature {

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 * @inject
	 */
	protected $objectManager = NULL;

	/**
	 * @var string Name of feature
	 */
	protected $name = '';

	/**
	 * @var array List of preset classes
	 */
	protected $presetRegistry = array();

	/**
	 * @var array Holds instances of presets
	 */
	protected $presetInstances = array();

	/**
	 * @var array List of $POST values
	 */
	protected $postValues = array();

	/**
	 * Initialize presets of feature
	 *
	 * @param array $postValues List of $POST values of this feature
	 * @return void
	 * @throws Exception
	 */
	public function initializePresets(array $postValues) {
		// Give feature sub array of $POST values to preset and set to own property
		$featurePostValues = array();
		if (!empty($postValues[$this->name])) {
			$featurePostValues = $postValues[$this->name];
		}
		$this->postValues = $featurePostValues;

		$isNonCustomPresetActive = FALSE;
		$customPresetFound = FALSE;
		foreach ($this->presetRegistry as $presetClass) {
			/** @var PresetInterface $presetInstance */
			$presetInstance = $this->objectManager->get($presetClass);
			if (!($presetInstance instanceof PresetInterface)) {
				throw new Exception(
					'Preset ' . $presetClass . ' does not implement PresetInterface',
					1378644821
				);
			}

			$presetInstance->setPostValues($featurePostValues);

			// Custom preset is set active if no preset before is active
			if ($presetInstance->isActive()) {
				$isNonCustomPresetActive = TRUE;
			}
			if ($presetInstance instanceof CustomPresetInterface
				&& !$isNonCustomPresetActive
			) {
				// Throw Exception if two custom presets are registered
				if ($customPresetFound === TRUE) {
					throw new Exception(
						'Preset ' . $presetClass . ' implements CustomPresetInterface, but another'
							. ' custom preset is already registered',
						1378645039
					);
				}

				/** @var CustomPresetInterface $presetInstance */
				$presetInstance->setActive();
				$customPresetFound = TRUE;
			}

			$this->presetInstances[] = $presetInstance;
		}
	}

	/**
	 * Return presets ordered by priority
	 *
	 * @return array<PresetInterface>
	 * @throws Exception
	 */
	public function getPresetsOrderedByPriority() {
		if (empty($this->presetInstances)) {
			throw new Exception(
				'Presets not initialized',
				1378645155
			);
		}
		$orderedPresets = array();
		foreach ($this->presetInstances as $presetInstance) {
			/** @var PresetInterface $presetInstance */
			$orderedPresets[$presetInstance->getPriority()] = $presetInstance;
		}
		krsort($orderedPresets, SORT_NUMERIC);
		return $orderedPresets;
	}

	/**
	 * Return name of feature
	 *
	 * @return string Name of feature
	 */
	public function getName() {
		return $this->name;
	}
}
?>