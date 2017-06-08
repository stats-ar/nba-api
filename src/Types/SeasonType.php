<?php

namespace JasonRoman\NbaApi\Types;

class SeasonType
{
    const FORMAT = '/^(Pre Season)|(Regular Season)|(Playoffs)$/';

    const PRE_SEASON     = 'Pre Season';
    const REGULAR_SEASON = 'Regular Season';
    const PLAYOFFS       = 'Playoffs';

    /**
     * @var string
     */
    public $value;
}