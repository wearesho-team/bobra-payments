<?php

namespace Wearesho\Bobra\Payments\Notification\Exception;

use Wearesho\Bobra\Payments\Notification;

/**
 * Class UnprocessableRequest
 * @package Wearesho\Bobra\Payments\Notification\Exception
 * Should be thrown in case passed Request does not have fields or have invalid format
 */
class UnprocessableRequest extends \Exception implements Notification\Exception
{
}
