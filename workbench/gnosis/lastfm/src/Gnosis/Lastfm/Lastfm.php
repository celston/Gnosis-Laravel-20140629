<?php
/**
 * Created by PhpStorm.
 * User: CElston
 * Date: 6/29/14
 * Time: 9:33 PM
 */

namespace Gnosis\Lastfm;


class Lastfm {
    private $lastfm;

    public function __construct() {
        $this->lastfm = new \LastFm\LastFm('59d09be6bab770f89ca6eeb33ae2b266', '59d09be6bab770f89ca6eeb33ae2b266');

        $response = $this->lastfm->user_getrecenttracks(array('user' => 'celston'));
        print_r($response);
    }
} 