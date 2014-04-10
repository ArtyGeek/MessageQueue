<?php
namespace Artygeek;

// This is a Queue class that can push and pop to a persistent storage 

class BarbieQueue
{
    private $_adapter;
    private $_pending;




    public function __construct(&$adapter)
    {
        $this->_adapter = &$adapter;
    
        $this->_pending = array();
    }





    // Slipping items is better than pushing them
    public function slipExtra($item, $store = false)
    {
        $this->push($item, $store);
    }





    // This pushes items onto a queue and it can optionally write them in persistenet storage
    public function push($item, $store = false)
    {
        $this->_pending[] = $item;

        if (true === $store)
        {
            $this->store();
        }

        return $this;
    }






    // Force a store of pending items
    public function store()
    {
        $success = $this->_adapter->store($this->_pending);
        if (false === $success) {
            throw new \Exception('Adapter Failed.');
        }

        // Reset the pending items
        $this->_pending = array();
        
        return $this;
    }









    // Remove a single item from persistent storage
    public function pop()
    {
        $item = $this->_adapter->pop();

        return $item;
    }







    // Clear the persistent storage of all items
    public function clear()
    {
        $this->_adapter->clear();
    }



}


