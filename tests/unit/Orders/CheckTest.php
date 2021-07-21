<?php
namespace Orders;

use App\models\Orders;
use App\models\Customers;
use Faker\Factory;

class CheckTest extends \Codeception\Test\Unit
{
    const TEST_ACTIVE_STATUS = 1;
    const TEST_INACTIVE_STATUS = 0;
    const TEST_CNUMBERS = [103,119,124,157];
    const TEST_ORDERS = [10100,10116,10122];
    
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    //tests
    public function testCustomersModel()
    {

      $cusID =  $this->tester->seeRecord(
        'app\models\Customers',
        ['customerNumber' => self::TEST_CNUMBERS[rand(0,3)]]
       );

    }


    // tests
    public function testOrderModel()
    {
        $fakeDta = Factory::create('App\Orders');
        $id = $fakeDta->randomDigitNotNull();
        $orderDate =  $fakeDta->date('Y-m-d', 'now');
        $requiredDate =  $fakeDta->date('Y-m-d', 'now');
        $shipedDate =  $fakeDta->date('Y-m-d', 'now');
        $status =  self::TEST_ACTIVE_STATUS;
        $comment =  $fakeDta->sentence();

        $orderID =  $this->tester->seeRecord(
            'app\models\MySqlOrder',
            ['orderNumber' => self::TEST_ORDERS[rand(0,3)]]
           );
    }

}