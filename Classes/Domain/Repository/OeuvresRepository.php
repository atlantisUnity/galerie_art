<?php
namespace Qnvt\ExpositionQnvt\Domain\Repository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * The repository for Oeuvres
 */
class OeuvresRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findByIntituleAndType($intitule,$type){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_expositionqnvt_domain_model_oeuvres');
        return $queryBuilder->select('*')->from('tx_expositionqnvt_domain_model_oeuvres')
            ->where(
                $queryBuilder->expr()->like(
                    'intitule',
                    $queryBuilder->createNamedParameter('%' . $queryBuilder->escapeLikeWildcards($intitule) . '%'))
            )->andWhere(
                $queryBuilder->expr()->like(
                    'type',
                    $queryBuilder->createNamedParameter($type))
            )
            ->execute()->fetchAll();

    }

    public function findByIntitule($intitule){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_expositionqnvt_domain_model_oeuvres');
        return $queryBuilder->select('*')->from('tx_expositionqnvt_domain_model_oeuvres')
            ->where(
                $queryBuilder->expr()->like(
                    'intitule',
                    $queryBuilder->createNamedParameter('%' . $queryBuilder->escapeLikeWildcards($intitule) . '%'))
            )->execute()->fetchAll();

    }

    public function findByType($type){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_expositionqnvt_domain_model_oeuvres');
        return $queryBuilder->select('*')->from('tx_expositionqnvt_domain_model_oeuvres')
            ->where(
                $queryBuilder->expr()->like(
                    'intitule',
                    $queryBuilder->createNamedParameter($type))
            )->execute()->fetchAll();
    }
}
