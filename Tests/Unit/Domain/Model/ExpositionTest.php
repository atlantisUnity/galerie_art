<?php
namespace Qnvt\ExpositionQnvt\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas COURTOT <thomas.courtot@etu.u-bordeaux.fr>
 * @author Valentin GRAGLIA <valentin.graglia@etu.u-bordeaux.fr>
 * @author Nicolas DECRUCQ <nicolas.decrucq@etu.u-bordeaux.fr>
 * @author Quentin BERGMAN <quentin.bergman@etu.u-bordeaux.fr>
 */
class ExpositionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Qnvt\ExpositionQnvt\Domain\Model\Exposition
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Qnvt\ExpositionQnvt\Domain\Model\Exposition();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );
    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHorairesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHoraires()
        );
    }

    /**
     * @test
     */
    public function setHorairesForStringSetsHoraires()
    {
        $this->subject->setHoraires('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'horaires',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVisuelReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getVisuel()
        );
    }

    /**
     * @test
     */
    public function setVisuelForFileReferenceSetsVisuel()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setVisuel($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'visuel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTarifReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTarif()
        );
    }

    /**
     * @test
     */
    public function setTarifForStringSetsTarif()
    {
        $this->subject->setTarif('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tarif',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDatedbtReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatedbt()
        );
    }

    /**
     * @test
     */
    public function setDatedbtForDateTimeSetsDatedbt()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatedbt($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datedbt',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDatefinReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatefin()
        );
    }

    /**
     * @test
     */
    public function setDatefinForDateTimeSetsDatefin()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatefin($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datefin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLieuReturnsInitialValueForLieu()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLieu()
        );
    }

    /**
     * @test
     */
    public function setLieuForObjectStorageContainingLieuSetsLieu()
    {
        $lieu = new \Qnvt\ExpositionQnvt\Domain\Model\Lieu();
        $objectStorageHoldingExactlyOneLieu = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLieu->attach($lieu);
        $this->subject->setLieu($objectStorageHoldingExactlyOneLieu);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLieu,
            'lieu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addLieuToObjectStorageHoldingLieu()
    {
        $lieu = new \Qnvt\ExpositionQnvt\Domain\Model\Lieu();
        $lieuObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lieuObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lieu));
        $this->inject($this->subject, 'lieu', $lieuObjectStorageMock);

        $this->subject->addLieu($lieu);
    }

    /**
     * @test
     */
    public function removeLieuFromObjectStorageHoldingLieu()
    {
        $lieu = new \Qnvt\ExpositionQnvt\Domain\Model\Lieu();
        $lieuObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lieuObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lieu));
        $this->inject($this->subject, 'lieu', $lieuObjectStorageMock);

        $this->subject->removeLieu($lieu);
    }

    /**
     * @test
     */
    public function getOeuvresReturnsInitialValueForOeuvres()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOeuvres()
        );
    }

    /**
     * @test
     */
    public function setOeuvresForObjectStorageContainingOeuvresSetsOeuvres()
    {
        $oeuvre = new \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres();
        $objectStorageHoldingExactlyOneOeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOeuvres->attach($oeuvre);
        $this->subject->setOeuvres($objectStorageHoldingExactlyOneOeuvres);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOeuvres,
            'oeuvres',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOeuvreToObjectStorageHoldingOeuvres()
    {
        $oeuvre = new \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres();
        $oeuvresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oeuvre));
        $this->inject($this->subject, 'oeuvres', $oeuvresObjectStorageMock);

        $this->subject->addOeuvre($oeuvre);
    }

    /**
     * @test
     */
    public function removeOeuvreFromObjectStorageHoldingOeuvres()
    {
        $oeuvre = new \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres();
        $oeuvresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oeuvre));
        $this->inject($this->subject, 'oeuvres', $oeuvresObjectStorageMock);

        $this->subject->removeOeuvre($oeuvre);
    }
}
