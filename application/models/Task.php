<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-11-02
 * Time: 3:48 PM
 */

require_once APPPATH . 'core/Entity.php';
Class Task extends Entity {

    //id,task,priority,size,group,deadline,status,flag



    public $id, $task, $priority, $size, $group, $deadline, $status, $flag;
    public function setId($value) {
        $this->id = $value;
    }
    public function setTask($value) {
        if(strlen($value) < 65){
            $this->task = $value;
        } else {
            return;
        }
    }
    public function setPriority ($value) {
        if(is_int($value)) {
            if($value < 4) {
                $this->priority = $value;
            }else{
                return;
            }
        } else{
            return;
        }
    }
    public function setSize($value) {
        if(is_int($value)) {
            if($value < 4) {
                $this->size = $value;
            }else{
                return;
            }
        } else{
            return;
        }

    }
    public function setGroup($value) {
        if(is_int($value)) {
            if($value < 5) {
                $this->group = $value;
            }else{
                return;
            }
        } else{
            return;
        }


    }
    public function setDeadline($value) {
        $this->deadline = $value;
    }
    public function setStatus($value) {
        $this->status = $value;
    }
    public function setFlag($value) {
        $this->flag = $value;
    }
}