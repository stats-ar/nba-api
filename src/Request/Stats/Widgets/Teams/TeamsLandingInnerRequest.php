<?php

namespace JasonRoman\NbaApi\Request\Stats\Widgets\Teams;

use JasonRoman\NbaApi\Request\AbstractStatsRequest;

/**
 * Get the teams inner page sidebar. This contains several statistical categories and the top 5 teams in each.
 */
class TeamsLandingInnerRequest extends AbstractStatsRequest
{
    const ENDPOINT = '/js/data/widgets/teams_landing_inner.json';
}