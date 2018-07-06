
plugin.tx_expositionqnvt_pi1 {
    view {
        templateRootPaths.0 = EXT:exposition_qnvt/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_expositionqnvt_pi1.view.templateRootPath}
        partialRootPaths.0 = EXT:exposition_qnvt/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_expositionqnvt_pi1.view.partialRootPath}
        layoutRootPaths.0 = EXT:exposition_qnvt/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_expositionqnvt_pi1.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_expositionqnvt_pi1.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_expositionqnvt._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-exposition-qnvt table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-exposition-qnvt table th {
        font-weight:bold;
    }

    .tx-exposition-qnvt table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

page.includeCSS.expositionqnvt = EXT:exposition_qnvt/Resources/Public/Css/Custom.css
plugin.tx_expositionqnvt_pi1.persistence.storagePid >

