<?php
declare(strict_types=1);

namespace MyApp;

use Ratchet\MessageComponentInterface;

class Socket implements MessageComponentInterface
{
    public function __construct()
    {
    }

    public function onOpen(\Ratchet\ConnectionInterface $conn)
    {
    }

    public function onMessage(\Ratchet\ConnectionInterface $from, $msg) 
    {
        
    }

    public function onClose(\Ratchet\ConnectionInterface $conn)
    {
    }

    public function onError(\Ratchet\ConnectionInterface $conn, \Exception $e)
    {
    }
}