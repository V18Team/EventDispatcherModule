<?php
/**
 * This file is part of YoungFramework.
 *
 * (c) YoungFramework 2018
 *
 * If you want, you can see license file at https://github.com/v18team/YoungFramework/LICENSE
 *
 * Date: 01.07.18
 * Time: 15:19
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace YoungFramework\Module\EventDispatcher\Exception;

class EmptyEventNameException extends \Exception
{
    public function __construct(string $message = 'EventDispatcher event name is empty!')
    {
        parent::__construct($message);
    }
}