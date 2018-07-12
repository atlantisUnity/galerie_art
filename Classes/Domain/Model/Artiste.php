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
 * Artiste
 */
class Artiste extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * biographie
     *
     * @var string
     */
    protected $biographie = '';

    /**
     * date de naissance
     *
     * @var \DateTime
     */
    protected $dateNaissance = null;

    /**
     * date de deces
     *
     * @var \DateTime
     */
    protected $dateDeces = null;

    /**
     * influences
     *
     * @var string
     */
    protected $influences = '';

    /**
     * nationalite
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Nationalite>
     * @cascade remove
     */
    protected $nationalite = null;

    /**
     * Oeuvres
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres>
     * @cascade remove
     */
    protected $oeuvres = null;

    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

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
     * Returns the biographie
     *
     * @return string $biographie
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Sets the biographie
     *
     * @param string $biographie
     * @return void
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * Returns the dateNaissance
     *
     * @return \DateTime $dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Sets the dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return void
     */
    public function setDateNaissance(\DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Returns the dateDeces
     *
     * @return \DateTime $dateDeces
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Sets the dateDeces
     *
     * @param \DateTime $dateDeces
     * @return void
     */
    public function setDateDeces(\DateTime $dateDeces)
    {
        $this->dateDeces = $dateDeces;
    }

    /**
     * Returns the influences
     *
     * @return string $influences
     */
    public function getInfluences()
    {
        return $this->influences;
    }

    /**
     * Sets the influences
     *
     * @param string $influences
     * @return void
     */
    public function setInfluences($influences)
    {
        $this->influences = $influences;
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
        $this->nationalite = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Nationalite
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Nationalite $nationalite
     * @return void
     */
    public function addNationalite(\Qnvt\ExpositionQnvt\Domain\Model\Nationalite $nationalite)
    {
        $this->nationalite->attach($nationalite);
    }

    /**
     * Removes a Nationalite
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Nationalite $nationaliteToRemove The Nationalite to be removed
     * @return void
     */
    public function removeNationalite(\Qnvt\ExpositionQnvt\Domain\Model\Nationalite $nationaliteToRemove)
    {
        $this->nationalite->detach($nationaliteToRemove);
    }

    /**
     * Returns the nationalite
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Nationalite> $nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Sets the nationalite
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Nationalite> $nationalite
     * @return void
     */
    public function setNationalite(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * Adds a Oeuvres
     *
     * @param \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvre
     * @return void
     */
    public function addOeuvre(\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres $oeuvre)
    {
        $this->oeuvres->attach($oeuvre);
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Qnvt\ExpositionQnvt\Domain\Model\Oeuvres> $oeuvres
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
