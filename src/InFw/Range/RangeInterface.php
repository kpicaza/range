<?php

/**
 * This file is part of InFw\Range package.
 */

namespace InFw\Range;

/**
 * Interface Range.
 */
interface RangeInterface
{
    /**
     * Get Range min value.
     *
     * @return int
     */
    public function getMin();

    /**
     * Get Range max value.
     *
     * @return int
     */
    public function getMax();
}
