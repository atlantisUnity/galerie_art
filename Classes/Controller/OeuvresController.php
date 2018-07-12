<?php
namespace Qnvt\ExpositionQnvt\Controller;

use TYPO3\CMS\Extbase\Mvc\Request;
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
 * OeuvresController
 */
class OeuvresController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * oeuvresRepository
     *
     * @var \Qnvt\ExpositionQnvt\Domain\Repository\OeuvresRepository
     * @inject
     */
    protected $oeuvresRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $oeuvres = $this->oeuvresRepository->findAll();
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action show
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvres
     * @return void
     */
    public function showAction(\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvres)
    {
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action hightlight
     *
     * @return void
     */
    public function hightlightAction()
    {

    }

    /**
     * action search
     *
     * @param \Qnvt\ExpositionQnvt\MVC\Search $search
     * @return void
     */
    public function searchAction(\Qnvt\ExpositionQnvt\MVC\Search $search)
    {


        if (!empty($search->getIntitule())) {
            $oeuvres = $this->oeuvresRepository->findByIntitule($search->getIntitule());
        }
        else {
            $oeuvres = $this->oeuvresRepository->findAll();
        }

        $this->view->assign('oeuvres', $oeuvres);
    }
}
