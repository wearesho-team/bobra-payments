<?php

namespace Wearesho\Bobra\Payments\Notification\Exception;

use Wearesho\Bobra\Payments\Notification;

/**
 * Interface InvalidMerchant
 * @package Wearesho\Bobra\Payments\Notification\Exception
 * Should be thrown when Request has unknown or invalid merchant identifier or sign
 */
interface InvalidMerchant extends Notification\Exception
{
}
