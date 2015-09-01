<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Page exclude in breadcrumb option');

$tempColumns = array(
	'tx_pagebreadcrumb_exclude' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:pagebreadcrumb/Resources/Private/Language/locallang_db.xml:tx_pagebreadcrumb_exclude',
		'config' => array(
			'type' => 'check',
			'items' => array(
				1 => array(
					0 => 'LLL:EXT:pagebreadcrumb/Resources/Private/Language/locallang_db.xml:tx_pagebreadcrumb_exclude.0',
				),
			),
		),
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('pages', 'miscellaneous', 'tx_pagebreadcrumb_exclude');

$tempColumns = array(
	'tx_pagebreadcrumb_title' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:pagebreadcrumb/Resources/Private/Language/locallang_db.xml:tx_pagebreadcrumb_title',
		'config' => array(
			'type' => 'input',
			'size' => 50,
			'eval' => 'trim'
		),
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages', 'tx_pagebreadcrumb_title', '', 'after:title');
?>