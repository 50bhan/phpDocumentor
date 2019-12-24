<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Tag;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use phpDocumentor\Reflection\Types\Array_;

/**
 * Tests the functionality for the ReturnDescriptor class.
 */
class ReturnDescriptorTest extends MockeryTestCase
{
    /** @var ReturnDescriptor $fixture */
    protected $fixture;

    /**
     * @covers \phpDocumentor\Descriptor\Tag\BaseTypes\TypedAbstract::setType
     * @covers \phpDocumentor\Descriptor\Tag\BaseTypes\TypedAbstract::getType
     */
    public function testSetAndGetTypes() : void
    {
        $expected = new Array_();
        $this->fixture = new ReturnDescriptor('name', $expected);
        $result = $this->fixture->getType();

        $this->assertSame($expected, $result);
    }
}
