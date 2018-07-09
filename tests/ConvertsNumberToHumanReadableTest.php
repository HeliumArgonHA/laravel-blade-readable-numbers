<?php

namespace SanderVanHooft\Tests\ReadableNumbers;

class ConvertsNumberToHumanReadableTest extends BaseTestCase
{
    /** @test */
    public function convertsNumberToHumanReadableThousands()
    {
        $blade = '@readable_int(123456)';
        $this->assertBladeRenders("123K+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableMillions()
    {
        $blade = '@readable_int(123456789)';
        $this->assertBladeRenders("123M+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableBillions()
    {
        $blade = '@readable_int(123456789012)';
        $this->assertBladeRenders("123B+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableTrillions()
    {
        $blade = '@readable_int(123456789012345)';
        $this->assertBladeRenders("123T+", $blade);
    }
}
