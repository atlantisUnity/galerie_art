<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Qnvt.ExpositionQnvt',
            'Pi1',
            [
                'Artiste' => 'list, show',
                'Oeuvres' => 'list, show, hightlight',
                'Exposition' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Artiste' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('exposition_qnvt') . 'Resources/Public/Icons/user_plugin_pi1.svg
                        title = LLL:EXT:exposition_qnvt/Resources/Private/Language/locallang_db.xlf:tx_exposition_qnvt_domain_model_pi1
                        description = LLL:EXT:exposition_qnvt/Resources/Private/Language/locallang_db.xlf:tx_exposition_qnvt_domain_model_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = expositionqnvt_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
