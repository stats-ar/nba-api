<?php

namespace JasonRoman\NbaApi\Request\Stats\Data\Synergy;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Params\SeasonYearParam;
use JasonRoman\NbaApi\Request\Stats\Data\AbstractStatsDataRequest;

/**
 * This appears to only work with the 2015 season and the parameters cannot be changed.
 */
class TeamPlayTypeSpotupRequest extends AbstractStatsDataRequest
{
    const ENDPOINT = '/js/data/playtype/team_Spotup.js';
}