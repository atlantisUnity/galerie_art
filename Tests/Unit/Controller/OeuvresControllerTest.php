<?php
namespace Qnvt\ExpositionQnvt\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Thomas COURTOT <thomas.courtot@etu.u-bordeaux.fr>
 * @author Valentin GRAGLIA <valentin.graglia@etu.u-bordeaux.fr>
 * @author Nicolas DECRUCQ <nicolas.decrucq@etu.u-bordeaux.fr>
 * @author Quentin BERGMAN <quentin.bergman@etu.u-bordeaux.fr>
 */
class OeuvresControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Qnvt\ExpositionQnvt\Controller\OeuvresController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Qnvt\ExpositionQnvt\Controller\OeuvresController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOeuvressFromRepositoryAndAssignsThemToView()
    {

        $allOeuvress = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresRepository = $this->getMockBuilder(\Qnvt\ExpositionQnvt\Domain\Repository\OeuvresRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $oeuvresRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOeuvress));
        $this->inject($this->subject, 'oeuvresRepository', $oeuvresRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('oeuvress', $allOeuvress);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOeuvresToView()
    {
        $oeuvres = new \Qnvt\ExpositionQnvt\Domain\Model\Oeuvres();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('oeuvres', $oeuvres);

        $this->subject->showAction($oeuvres);
    }
}
