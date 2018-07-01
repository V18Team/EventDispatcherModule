<?php
/**
 * This file is part of YoungFramework.
 *
 * (c) YoungFramework 2018
 *
 * If you want, you can see license file at https://github.com/v18team/YoungFramework/LICENSE
 *
 * Date: 01.07.18
 * Time: 15:16
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace YoungFramework\Module\EventDispatcher\Event;

/**
 * Class Event
 * @package YoungFramework\Module\EventDispatcher\Event
 */
class Event
{
    private $eventName;

    /**
     * Event constructor.
     * @param string $eventName
     */
    public function __construct(string $eventName = '')
    {
        $this->eventName = $eventName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->eventName;
    }
}