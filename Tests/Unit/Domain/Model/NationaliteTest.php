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
class NationaliteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Qnvt\ExpositionQnvt\Domain\Model\Nationalite
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Qnvt\ExpositionQnvt\Domain\Model\Nationalite();
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
    public function getCodeIsoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodeIso()
        );
    }

    /**
     * @test
     */
    public function setCodeIsoForStringSetsCodeIso()
    {
        $this->subject->setCodeIso('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codeIso',
            $this->subject
        );
    }
}
