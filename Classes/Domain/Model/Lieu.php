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
 * Lieu
 */
class Lieu extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * latitude
     *
     * @var string
     */
    protected $latitude = '';

    /**
     * longitude
     *
     * @var string
     */
    protected $longitude = '';

    /**
     * adresse
     *
     * @var string
     * @validate NotEmpty
     */
    protected $adresse = '';

    /**
     * code_postal
     *
     * @var string
     * @validate NotEmpty
     */
    protected $codePostal = '';

    /**
     * descsription
     *
     * @var string
     */
    protected $description = '';

    /**
     * accessiblePMR
     *
     * @var bool
     */
    protected $accessiblePMR = false;

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
     * Returns the latitude
     *
     * @return string $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     *
     * @param string $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns the longitude
     *
     * @return string $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     *
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Returns the codePostal
     *
     * @return string $codePostal
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Sets the codePostal
     *
     * @param string $codePostal
     * @return void
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
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
     * Returns the accessiblePMR
     *
     * @return bool $accessiblePMR
     */
    public function getAccessiblePMR()
    {
        return $this->accessiblePMR;
    }

    /**
     * Sets the accessiblePMR
     *
     * @param bool $accessiblePMR
     * @return void
     */
    public function setAccessiblePMR($accessiblePMR)
    {
        $this->accessiblePMR = $accessiblePMR;
    }

    /**
     * Returns the boolean state of accessiblePMR
     *
     * @return bool
     */
    public function isAccessiblePMR()
    {
        return $this->accessiblePMR;
    }
}
