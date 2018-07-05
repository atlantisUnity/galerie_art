<?php

use Qnvt\ExpositionQnvt\Domain\Model\Oeuvres;

$GLOBALS['TCA']['tx_expositionqnvt_domain_model_oeuvres']['columns']['type']['config']['items'] = [
  ["Sculpture", Oeuvres::TYPE_SCULPTURE],
  ["Peinture", Oeuvres::TYPE_PEINTURE]
];
