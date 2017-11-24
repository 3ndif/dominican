<?php
namespace App\Models;

class JsonHandler {

    const REFRESH_PAGE = 'refreshpage';
    const REDIRECT = 'redirect';
    const SHOW_MODAL_PASSWORD = 'show_modal_password';
    const SHOW_ADS_CREATE_FORM_CONTAINER = 'show_ads_create_form_container';

    private static $jsonData = [];

    public static function response(array $data){
        $json = [];

        foreach ($data as $constOperationName => $jsonData) {
            $json['type'] = $constOperationName;
            $json['data'] = $jsonData;
            self::$jsonData[] = $json;
        }

        return \Illuminate\Support\Facades\Response::json(self::$jsonData);
    }
}