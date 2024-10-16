<?php

namespace App\Controller;

use App\Service\service;

require '../vendor/autoload.php';

class ControllerLikedPlaylist
{

    protected $service;

    function __construct()
    {
        $this->service = new service();
    }

    public function handle($option, $user_id, $id_music = null)
    {
        if ($option == 'update') {
            return $this->service->updateLikedPlaylist($user_id, $id_music);
        }
        if ($option == 'select') {
            return $this->service->selectLikedPlaylist($user_id);
        }
    }
}
