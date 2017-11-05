<?php
namespace App\Models;

class JsonHandler {

    const REFRESH_PAGE = 'refreshpage';
    const SHOW_MODAL_PASSWORD = 'show_modal_password';

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