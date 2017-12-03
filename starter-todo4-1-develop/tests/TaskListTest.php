<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-11-05
 * Time: 4:40 PM
 */

class TaskListTest extends PHPUnit\Framework\TestCase {
    private $tasks;
    public function setUp()
    {
        $this->tasks = new Tasks();
    }
    public function testListSize(){
        $ccount = $this->tasks->getCompletedTask();
        $ucount = $this->tasks->getUncompletedTask();
        $this->assertLessThan(ucount,ccount);
    }
}