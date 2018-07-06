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
 * ExpositionController
 */
class ExpositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * expositionRepository
     * 
     * @var \Qnvt\ExpositionQnvt\Domain\Repository\ExpositionRepository
     * @inject
     */
    protected $expositionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $expositions = $this->expositionRepository->findAll();
        $this->view->assign('expositions', $expositions);
    }

    /**
     * action show
     * 
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Exposition $exposition
     * @return void
     */
    public function showAction(\Qnvt\ExpositionQnvt\Domain\Model\Exposition $exposition)
    {
        $this->view->assign('exposition', $exposition);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
