<?php

namespace Drunkcode\LaraSeasons;

use Carbon\Carbon;

class LaraSeasons
{
    /**
     * Our Seasons Config
     *
     * Winter Season - Between 1st December to 31st December
     *
     * @var boolean
     */
    private $seasons = [
        'winter' => [
            'active' => false,
            'between' => [
                '1st December',
                '31st December',
            ]
        ]
    ];

    public function __construct(Carbon $date)
    {
        $this->activateSeasons($date);
    }

    /**
     * Loop through our seasons and activate the current ones
     *
     * @param Carbon $date
     * @return void
     */
    private function activateSeasons(Carbon $date)
    {
        foreach ($this->seasons as $season => $details) {
            if (
                $date->between(
                    new Carbon($details['between'][0]),
                    new Carbon($details['between'][1])
                )
            ) {
                $this->seasons[$season]['active'] = true;
            }
        }
    }

    /**
     * Return whether our Winter season is active or not
     *
     * @return boolean
     */
    public function isWinter()
    {
        return $this->seasons['winter']['active'];
    }
}
