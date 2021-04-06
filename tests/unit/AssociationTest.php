<?php
namespace App\Tests;

use App\Entity\Association;

class AssociationTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testNonEmpty()
    {
        $asso = new Association();
        $asso->setNom("");
        self::assertEmpty(($asso->getNom()));
    }
    public function testNonCorrect()
    {
        $asso = new Association();
        $asso->setNom("raphael");
        self::assertEmpty(($asso->getNom()));
    }

    public function testNomLong(){
        $asso = new Association();
        $asso->setNom("Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.");
    }
}