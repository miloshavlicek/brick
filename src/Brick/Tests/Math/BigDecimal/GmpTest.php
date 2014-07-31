<?php

namespace Brick\Tests\Math\BigDecimal;

use Brick\Math\Calculator\GmpCalculator;

/**
 * @requires extension gmp
 */
class GmpTest extends AbstractTestCase
{
    /**
     * @inheritdoc
     */
    public function getCalculator()
    {
        return new GmpCalculator();
    }
}