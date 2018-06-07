
plugin.tx_expositionqnvt_pi1 {
    view {
        # cat=plugin.tx_expositionqnvt_pi1/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:exposition_qnvt/Resources/Private/Templates/
        # cat=plugin.tx_expositionqnvt_pi1/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:exposition_qnvt/Resources/Private/Partials/
        # cat=plugin.tx_expositionqnvt_pi1/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:exposition_qnvt/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_expositionqnvt_pi1//a; type=string; label=Default storage PID
        storagePid =
    }
}
