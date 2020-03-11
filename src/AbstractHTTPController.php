<?php
declare(strict_types=1);

namespace MyApp;

use Ratchet\Http\HttpServerInterface;

abstract class AbstractHttpController implements HttpServerInterface
{
    public function onOpen(\Ratchet\ConnectionInterface $conn, ?\Psr\Http\Message\RequestInterface $request = null)
    {
        $conn->close();
    }

    public function onClose(\Ratchet\ConnectionInterface $conn)
    {
        
    }

    public function onError(\Ratchet\ConnectionInterface $conn, \Exception $e)
    {
        
    }

    public function onMessage(\Ratchet\ConnectionInterface $from, $msg)
    {
        
    }
}