<?php

namespace JasonRoman\NbaApi\Request\Nba\Wsc\Video;

use JasonRoman\NbaApi\Request\Nba\Wsc\AbstractNbaWscRequest;
use JasonRoman\NbaApi\Response\ResponseType;
use Symfony\Component\Validator\Constraints as Assert;

class VideoRequest extends AbstractNbaWscRequest
{
    const ENDPOINT = '/video/wsc/league/{videoId}.xml';

    const DEFAULT_RESPONSE_TYPE = ResponseType::XML;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @Assert\Uuid(strict = false)
     */
    public $videoId;

    /**
     * {@inheritdoc}
     */
    public static function getExampleValues(): array
    {
        return [
            'videoId' => '087a6075-00fc-187d-3f9b-10023abe58a3',
        ];
    }
}