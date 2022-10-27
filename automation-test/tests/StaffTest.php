<?php
use PHPUnit\Framework\TestCase;
class StaffTest extends TestCase
{
    public function testReturnsFullName()
    {
        require('automation-test/Staff.php');

        $staff = new Staff;

        $staff->first_name = "Nguyen";
        $staff->last_name = "Bao";

        $this->assertEquals('Nguyen Bao', $staff->getFullName());
    }
    public function testFullNameIsEmptyByDefault()
    {
        $staff = new Staff;
        $this->assertEquals('', $staff->getFullName());
    }

    /**
     * @test
     */
//    public function only_first_name()
//    {
//        $staff = new Staff;
//        $staff->first_name = "Nguyen";
//        $this->assertEquals('Nguyen', $staff->getFullName());
//    }

    public function only_last_name()
    {
        $staff = new Staff;
        $staff->last_name = "aHieu";
        $this->assertEquals('Hieu', $staff->getFullName());
    }
}
