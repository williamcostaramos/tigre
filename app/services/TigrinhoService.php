<?php

namespace App\services;

use App\services\Service;
use Exception;
use stdClass;

class TigrinhoService  implements Service
{
    private $data;

    public function execute()
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, env('URL_TIGRINHO'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $this->data = curl_exec($ch);
        } catch (Exception $e) {
        } finally {
            curl_close($ch);
        }
        return json_decode( $this->data);
    }

    public function transform(stdClass $object)
    {
    }
}
