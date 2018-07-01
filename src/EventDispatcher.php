<?php
/**
 * This file is part of YoungFramework.
 *
 * (c) YoungFramework 2018
 *
 * If you want, you can see license file at https://github.com/v18team/YoungFramework/LICENSE
 *
 * Date: 01.07.18
 * Time: 15:14
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace YoungFramework\Module\EventDispatcher;

use YoungFramework\Module\EventDispatcher\Event\Event;
use YoungFramework\Module\EventDispatcher\Exception\EmptyEventNameException;

/**
 * Class EventDispatcher
 * @package YoungFramework\Module\EventDispatcher
 */
class EventDispatcher
{
    private $listeners = [];

    /**
     * @param Event $event
     * @param callable $listener
     */
    public function addListener(Event $event, callable $listener)
    {
        if ('' === $event->getName()) {
            throw new EmptyEventNameException();
        }

        $this->listeners[$event][] = $listener;
    }

    /**
     * @param Event $event
     */
    public function dispatch(Event $event)
    {
        if ('' === $event->getName()) {
            throw new EmptyEventNameException();
        }

        foreach ($this->listeners[$event->getName()] as $listener) {
            $listener($event);
        }
    }
}