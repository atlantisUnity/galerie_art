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
 * Exposition
 */
class Exposition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * horaires
     *
     * @var string
     */
    protected $horaires = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * visuel
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $visuel = null;

    /**
     * tarif
     *
     * @var string
     */
    protected $tarif = '';

    /**
     * date_dbt
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datedbt = null;

    /**
     * date_fin
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datefin = null;

    /**
     * Lieu
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Lieu>
     * @cascade remove
     */
    protected $lieu = null;

    /**
     * Oeuvres
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres>
     */
    protected $oeuvres = null;

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
     * Returns the horaires
     *
     * @return string $horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Sets the horaires
     *
     * @param string $horaires
     * @return void
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the visuel
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     */
    public function getVisuel()
    {
        return $this->visuel;
    }

    /**
     * Sets the visuel
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     * @return void
     */
    public function setVisuel(\TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel)
    {
        $this->visuel = $visuel;
    }

    /**
     * Returns the tarif
     *
     * @return string $tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Sets the tarif
     *
     * @param string $tarif
     * @return void
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    /**
     * Returns the datedbt
     *
     * @return \DateTime $datedbt
     */
    public function getDatedbt()
    {
        return $this->datedbt;
    }

    /**
     * Sets the datedbt
     *
     * @param \DateTime $datedbt
     * @return void
     */
    public function setDatedbt(\DateTime $datedbt)
    {
        $this->datedbt = $datedbt;
    }

    /**
     * Returns the datefin
     *
     * @return \DateTime $datefin
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Sets the datefin
     *
     * @param \DateTime $datefin
     * @return void
     */
    public function setDatefin(\DateTime $datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->lieu = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Lieu
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Lieu $lieu
     * @return void
     */
    public function addLieu(\Qnvt\ExpositionQnvt\Domain\Model\Lieu $lieu)
    {
        $this->lieu->attach($lieu);
    }

    /**
     * Removes a Lieu
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Lieu $lieuToRemove The Lieu to be removed
     * @return void
     */
    public function removeLieu(\Qnvt\ExpositionQnvt\Domain\Model\Lieu $lieuToRemove)
    {
        $this->lieu->detach($lieuToRemove);
    }

    /**
     * Returns the lieu
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Lieu> $lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Sets the lieu
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Lieu> $lieu
     * @return void
     */
    public function setLieu(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * Adds a Oeuvres
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvre
     * @return void
     */
    public function addOeuvre(\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvre)
    {
        $this->oeuvres->attach($oeuvres);
    }

    /**
     * Removes a Oeuvres
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvreToRemove The Oeuvres to be removed
     * @return void
     */
    public function removeOeuvre(\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvreToRemove)
    {
        $this->oeuvres->detach($oeuvreToRemove);
    }

    /**
     * Returns the oeuvres
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres> oeuvres
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Sets the oeuvres
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres> $oeuvres
     * @return void
     */
    public function setOeuvres(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oeuvres)
    {
        $this->oeuvres = $oeuvres;
    }
}
