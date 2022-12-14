<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['fotografiemartin_sitepackage'] = 'EXT:fotografiemartin_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fotografiemartin_sitepackage/Configuration/TsConfig/Page/All.tsconfig">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fotografiemartin_sitepackage/Configuration/TsConfig/Page/Mod/Wizard/backgroundBanner.tsconfig">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fotografiemartin_sitepackage/Configuration/TsConfig/Page/Mod/Wizard/galleryElement.tsconfig">'
);