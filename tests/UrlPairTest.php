<?php

namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\UrlPair;

/**
 * Class UrlPairTest
 * @package Wearesho\Bobra\Payments\Tests
 */
class UrlPairTest extends TestCase
{
    public function testConstructor()
    {
        $pair = new UrlPair($google = 'https://google.com');

        $this->assertEquals($google, $pair->getGood());
        $this->assertEquals($google, $pair->getBad());

        $pair = new UrlPair($google, $bing = 'https://bing.com');
        $this->assertEquals($google, $pair->getGood());
        $this->assertEquals($bing, $pair->getBad());
    }
}
