<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TaskTest
 *
 * @author Teah
 */

class TaskTest extends PHPUnit\Framework\TestCase {
    
    
    private $task;    
    public function setUp()
    {
        $this->task = new Task();     
    }
    
    // set task validation
    public function testSetTaskValid()
    {        
        $taskTitle = "This string is under 65 characters.";
        $this->task->setTask($taskTitle);
        $this->assertEquals( $taskTitle, $this->task->task );
    }  
    
    public function testSetTaskEmpty()
    {        
        $taskTitle = "";
        $this->task->setTask($taskTitle);
        $this->assertEquals( $taskTitle, $this->task->task );
    }  
      
    public function testSetTaskTooLong()
    {        
        $taskTitle = "This string is over 65 characters. This string is over 65 characters. This string is over 65 characters. ";
        $this->task->setTask($taskTitle);
        $this->assertNotEquals( $taskTitle, $this->task->task );
    }    
    
    // set priority
    public function testSetPriorityValidMin()
    {        
        $priority = 0;
        $this->task->setPriority($priority);
        $this->assertEquals( $priority, $this->task->priority );
    }  
    
    public function testSetPriorityValidMax()
    {        
        $priority = 3;
        $this->task->setPriority($priority);
        $this->assertEquals( $priority, $this->task->priority );
    } 
    
    public function testSetPriorityNonNumeric()
    {        
        $priority = 'x';
        $this->task->setPriority($priority);
        $this->assertNotEquals( $priority, $this->task->priority );
    }  
    
    public function testSetPriorityTooHigh()
    {        
        $priority = 5;
        $this->task->setPriority($priority);
        $this->assertNotEquals( $priority, $this->task->priority );
    }  
    
    // set size
    public function testSetSizeValidMin()
    {        
        $size = 0;
        $this->task->setSize($size);
        $this->assertEquals( $size, $this->task->size );
    }  
    
    public function testSetSizeValidMax()
    {      
        $size = 3;
        $this->task->setSize($size);
        $this->assertEquals( $size, $this->task->size );
    } 
    
    public function testSetSizeNonNumeric()
    {        
        $size = 'x';
        $this->task->setSize($size);
        $this->assertNotEquals( $size, $this->task->size );
    }  
    
    public function testSetSizeTooHigh()
    {        
        $size = 5;
        $this->task->setSize($size);
        $this->assertNotEquals( $size, $this->task->size );
    }  
    
    // set group
    public function testSetGroupValidMin()
    {        
        $group = 0;
        $this->task->setGroup($group);
        $this->assertEquals( $group, $this->task->group );
    }  
    
     public function testSetGroupValidMax()
    {      
        $group = 4;
        $this->task->setGroup($group);
        $this->assertEquals( $group, $this->task->group );
    } 
    
    public function testSetGroupNonNumeric()
    {        
        $group = 'x';
        $this->task->setGroup($group);
        $this->assertNotEquals( $group, $this->task->group );
    }  
    
    public function testGroupSizeTooHigh()
    {        
        $group = 5;
        $this->task->setGroup($group);
        $this->assertNotEquals( $group, $this->task->group );
    }  
}
