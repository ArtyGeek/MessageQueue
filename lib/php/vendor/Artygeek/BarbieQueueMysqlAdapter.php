<?php
namespace Artygeek;

// Done with all primatives
class BarbieQueueMysqlAdapter
{
    // Database handler for adapter
    private $_dbh;




    public function __construct($host, $dbname, $user, $pw)
    {
        $dsn = "mysql:dbname={$dbname};host={$host}";
        
        $this->_dbh = new \PDO($dsn, $user, $pw); 
    }









    public function store($arr)
    {
        $success = $this->_dbh->beginTransaction();
        if (false === $success) {
            return false;
        }

        $stmt = $this->_dbh->prepare('INSERT INTO queue (user, data, type) VALUES (:user, :data, :type)');

        foreach ($arr as $m)
        {
            $user = $m['user'];
            $data = $m['data'];
            $type = $m['type'];
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':data', $data);
            $stmt->bindParam(':type', $type);
            $stmt->execute();        
        }

        $success = $this->_dbh->commit();
error_log(var_export($success, true));
        return $success;
    }










    public function pop()
    {
        // Lock the table since we will be popping a row from it
        $this->_dbh->exec('LOCK TABLES queue WRITE');

        // This removes the item with the lowest id from the queue
        $stmt = $this->_dbh->query('SELECT id, user, data, type FROM queue ORDER BY id LIMIT 1');
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        // Return false if there are no elements on the queue
        if ($row === false) {
            $this->_dbh->exec('UNLOCK TABLES');
            return false;
        }

        // $id is the primary key, $data is the message data
        $id = $row['id'];

        $success = $this->_dbh->beginTransaction();

        // Now we delete the item with the lowest primary id
        $stmt = $this->_dbh->prepare('DELETE FROM queue WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $success = $stmt->execute();

        // Pay us $money for robust error handling
        $err = $stmt->errorInfo();

        $this->_dbh->commit();

        // Unlock the queue table
        $this->_dbh->exec('UNLOCK TABLES');

        return $row;
    }










    // Clear the queue
    public function clear()
    {
        $success = $this->_dbh->beginTransaction();

        // This deletes the queue from the database and resets the primary key count
        $this->_dbh->exec('TRUNCATE TABLE queue');

        $this->_dbh->commit();
    }



}


