<?php
namespace Qnvt\ExpositionQnvt\Domain\Model;

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
 * Nationalite
 */
class Nationalite extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * code iso
     * 
     * @var string
     */
    protected $codeIso = '';

    /**
     * Returns the nom
     * 
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     * 
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the codeIso
     * 
     * @return string $codeIso
     */
    public function getCodeIso()
    {
        return $this->codeIso;
    }

    /**
     * Sets the codeIso
     * 
     * @param string $codeIso
     * @return void
     */
    public function setCodeIso($codeIso)
    {
        $this->codeIso = $codeIso;
    }
}
