<?php
namespace Qnvt\ExpositionQnvt\Domain\Repository;

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
 * The repository for Artistes
 */
class ArtisteRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param $intitule
     */
    public function findByNom($nom)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_expositionqnvt_domain_model_artiste');
        return $queryBuilder->select('*')->from('tx_expositionqnvt_domain_model_artiste')->where($queryBuilder->expr()->like('nom', $queryBuilder->createNamedParameter('%' . $queryBuilder->escapeLikeWildcards($nom) . '%')))->execute()->fetchAll();
    }
}
