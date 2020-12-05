<?php

namespace Drunkcode\LaraSeasons;

use Carbon\Carbon;

class LaraSeasons
{
    /**
     * Our Seasons Config
     *     *
     * @var boolean
     */
    private $seasons;

    public function __construct(array $config, Carbon $date)
    {
        $this->seasons = $config;
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
     * Return whether our Spring season is active or not
     *
     * @return boolean
     */
    public function isSpring()
    {
        return $this->seasons['spring']['active'];
    }

    /**
     * Return whether our Summer season is active or not
     *
     * @return boolean
     */
    public function isSummer()
    {
        return $this->seasons['summer']['active'];
    }

    /**
     * Return whether our Autumn season is active or not
     *
     * @return boolean
     */
    public function isAutumn()
    {
        return $this->seasons['autumn']['active'];
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
