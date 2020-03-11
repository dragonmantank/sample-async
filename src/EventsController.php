<?php
declare(strict_types=1);

namespace MyApp;

class EventsController extends AbstractHttpController
{
    public function onOpen(\Ratchet\ConnectionInterface $conn, ?\Psr\Http\Message\RequestInterface $request = null)
    {
    }
}