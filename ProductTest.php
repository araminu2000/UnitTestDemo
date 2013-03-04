<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius.Anghel
 * Date: 3/4/13
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */
class ProductTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testNullProduct($product)
    {
        $this->assertNotNull($product);
    }

    /**
     * @dataProvider provider
     */
    public function testEmptyProduct($product)
    {
        $this->assertNotEmpty($product);
    }

    public function provider()
    {
        return array(
            array(
                array(
                    'code' => 'P1',
                    'title' => 'ProductTitle1',
                    'currency' => 'RON'
                )
            ),
            array(null),
            array(
                array(
                    'code' => 'P2',
                    'title' => 'ProductTitle2',
                    'currency' => 'EUR'
                )
            ),
            array(
                array(
                    'code' => 'P3',
                    'title' => 'ProductTitle3',
                    'currency' => 'USD'
                )
            )
        );
    }
}
