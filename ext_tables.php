<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Qnvt.ExpositionQnvt',
            'Pi1',
            'Expo qnvt'
        );

        $pluginSignature = str_replace('_', '', 'exposition_qnvt') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:exposition_qnvt/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('exposition_qnvt', 'Configuration/TypoScript', 'exposition qnvt');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionqnvt_domain_model_exposition', 'EXT:exposition_qnvt/Resources/Private/Language/locallang_csh_tx_expositionqnvt_domain_model_exposition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionqnvt_domain_model_exposition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionqnvt_domain_model_lieu', 'EXT:exposition_qnvt/Resources/Private/Language/locallang_csh_tx_expositionqnvt_domain_model_lieu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionqnvt_domain_model_lieu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionqnvt_domain_model_artiste', 'EXT:exposition_qnvt/Resources/Private/Language/locallang_csh_tx_expositionqnvt_domain_model_artiste.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionqnvt_domain_model_artiste');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionqnvt_domain_model_nationalite', 'EXT:exposition_qnvt/Resources/Private/Language/locallang_csh_tx_expositionqnvt_domain_model_nationalite.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionqnvt_domain_model_nationalite');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionqnvt_domain_model_oeuvres', 'EXT:exposition_qnvt/Resources/Private/Language/locallang_csh_tx_expositionqnvt_domain_model_oeuvres.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionqnvt_domain_model_oeuvres');

    }
);
