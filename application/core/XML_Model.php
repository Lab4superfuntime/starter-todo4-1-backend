<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-11-19
 * Time: 1:46 PM
 */

Class XML_Model extends Memory_Model {
    public $id, $task, $priority, $size, $group, $deadline, $status, $flag;

    //---------------------------------------------------------------------------
//  Housekeeping methods
//---------------------------------------------------------------------------

    /**
     * Constructor.
     * @param string $origin Filename of the CSV file
     * @param string $keyfield  Name of the primary key field
     * @param string $entity	Entity name meaningful to the persistence
     */
    function __construct($origin = null, $keyfield = 'id', $entity = null)
    {
        parent::__construct();

        // guess at persistent name if not specified
        if ($origin == null)
            $this->_origin = get_class($this);
        else
            $this->_origin = $origin;

        // remember the other constructor fields
        $this->_keyfield = $keyfield;
        $this->_entity = $entity;

        // start with an empty collection
        $this->_data = array(); // an array of objects
        $this->_fields = array(); // an array of strings
        // and populate the collection
        $this->load();
    }

    protected function load()
    {
        if(file_exists($this->_origin)){

            $tasks = simplexml_load_file($this->_origin);

            $tmp = array();
            $holdname = 'task';
            foreach($tasks->children()->children() as $child){
                if($child->getName() === 'name') {


                    array_push($tmp, 'task');
                }else {


                    array_push($tmp,(string)$child->getName());
                }
            }
            $this->_fields = $tmp;


            foreach($tasks->children() as $childtask){
                $record = new stdClass();
                $i = 0;
                foreach($childtask->children() as $sechitask){
                    $record->{$this->_fields[$i]} = (string)$sechitask;
                    $i++;
                }
                $key = $record->{$this->_keyfield};
                $this->_data{$key} = $record;

            }

//            $this->_fields = array("id","task","priority","size","group","deadline","status","flag");
//            foreach($tasks->task as $task){
//                $record = new stdClass();
//                for ($i = 0; $i < count($this->_fields); $i ++ ){
//                    if($this->_fields[$i] === 'task'){
//                        $record->{$this->_fields[$i]} = (string)$task->name;
//                    }else{
//                        $record->{$this->_fields[$i]} = (string)$task->{$this->_fields[$i]};
//
//                    }
//                }
//                $key = $record->{$this->_keyfield};
//
//                $this->_data[$key] = $record;
//
//            }

        }
        $this->reindex();

    }
    protected function store()
    {
        $xml = new SimpleXMLElement("<tasks></tasks>");
        if (file_exists($this->_origin)) {
            foreach ($this->_data as $key => $record) {
                $holdtask = $xml->addChild("task");
                for ($i = 0; $i < count($this->_fields); $i++) {
                    if ($this->_fields[$i] === "task") {
                        $holdtask->addChild("name", $record->{$this->_fields[$i]});
                    } else {
                        $holdtask->addChild($this->_fields[$i], $record->{$this->_fields[$i]});
                    }

                }
            }
            $xml->asXml($this->_origin);
        }
    }


}