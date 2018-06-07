<?php
namespace Qnvt\ExpositionQnvt\Controller;

/***
 *
 * This file is part of the "exposition qnvt" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Thomas COURTOT <thomas.courtot@etu.u-bordeaux.fr>
 *           Valentin GRAGLIA <valentin.graglia@etu.u-bordeaux.fr>
 *           Nicolas DECRUCQ <nicolas.decrucq@etu.u-bordeaux.fr>
 *           Quentin BERGMAN <quentin.bergman@etu.u-bordeaux.fr>
 *
 ***/

/**
 * ArtisteController
 */
class ArtisteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * artisteRepository
     *
     * @var \Qnvt\ExpositionQnvt\Domain\Repository\ArtisteRepository
     * @inject
     */
    protected $artisteRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $artistes = $this->artisteRepository->findAll();
        $this->view->assign('artistes', $artistes);
    }

    /**
     * action show
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Artiste $artiste
     * @return void
     */
    public function showAction(\Qnvt\ExpositionQnvt\Domain\Model\Artiste $artiste)
    {
        $this->view->assign('artiste', $artiste);
    }
}
