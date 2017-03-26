<?php
defined('TYPO3_MODE') || die('Access denied.');
call_user_func(
    function ($extKey) {
        // Add/register icons
        if (TYPO3_MODE === 'BE') {
            // Registers a Backend Module
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Tx.' . $extKey,
                'help',		// Make module a submodule of 'help'
                'guide',	// Submodule key
                '',			// Position
                array(
                    'Guide' => 'list,ajaxRequest',
                ),
                array(
                    'access' => 'user,group',
                    'icon' => 'EXT:guide/ext_icon.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_guide.xlf',
                )
            );
            // register svg icons: identifier and filename
            $iconsSvg = [
                'module-guide-tour-function-module' => 'EXT:func/Resources/Public/Icons/module-func.svg',
                'module-guide-tour-view-module' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.svg',
                'module-guide-tour-page-module' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
                'module-guide-tour-core' => 'EXT:guide/Resources/Public/Icons/core_tours.svg'
            ];
            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            foreach ($iconsSvg as $identifier => $path) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                    ['source' => $path]
                );
            }
        }
    },
    $_EXTKEY
);