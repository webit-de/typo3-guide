<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Add tour libraries
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Hooks/PageRenderer.php:Tx\\Guide\\Hooks\\PageRenderer->addJSCSS';
	// Add AJAX
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler (
		'GuideController::ajaxRequest',
		'Tx\\Guide\\Controller\\GuideController->ajaxRequest'
	);
	// Add page typoscript tours
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/tsconfig.txt">');
}

// Register a guided tour
$tours = array(
    'AboutModule' => array(
        'moduleIdentifier' => 'help_AboutAboutmodules',
        'iconIdentifier' => 'module-guide-tour-core'
    ),
    'PageModule' => array(
        'moduleIdentifier' => 'web_layout',
        'iconIdentifier' => 'module-guide-tour-page-module'
    ),
    'ViewModule' => array(
        'moduleIdentifier' => 'web_ViewpageView',
        'iconIdentifier' => 'module-guide-tour-view-module'
    ),
    'FunctionModule' => array(
        'moduleIdentifier' => 'web_func',
        'iconIdentifier' => 'module-guide-tour-function-module'
    ),
    'Tree' => array(
        'moduleIdentifier' => 'core',
        'iconIdentifier' => 'module-guide-tour-core'
    ),
    'Topbar' => array(
        'moduleIdentifier' => 'core',
        'iconIdentifier' => 'module-guide-tour-core'
    ),
    'Menu' => array(
        'moduleIdentifier' => 'core',
        'iconIdentifier' => 'module-guide-tour-core'
    )
);
foreach($tours as $tourKey => $tour) {
    \Tx\Guide\Utility\GuideUtility::addTour(
        $tourKey,
        'LLL:EXT:guide/Resources/Private/Language/BootstrapTour' . $tourKey . '.xlf:tx_guide_tour.title',
        'LLL:EXT:guide/Resources/Private/Language/BootstrapTour' . $tourKey . '.xlf:tx_guide_tour.description',
        $tour['moduleIdentifier'],
        $tour['iconIdentifier'],
        'EXT:guide/Configuration/Tours/'
    );
}