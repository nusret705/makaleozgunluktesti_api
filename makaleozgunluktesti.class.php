<?php
class ozgunluk {

    public $api_key = "";


    public function new_order($text) {

        $url = 'https://api.makaleozgunluktesti.com';
        $ch = curl_init();
        $fields = array(
                    'api_key' => $this->api_key,
                    'request' => "new_order",
                    'order_id' => $text);
        $fields_string = http_build_query($fields);
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($ch);
        return $result;

    }

    public function show_order($order_id) {

        $url = 'https://api.makaleozgunluktesti.com';
        $ch = curl_init();
        $fields = array(
                    'api_key' => $this->api_key,
                    'request' => "show_order",
                    'order_id' => $order_id);
        $fields_string = http_build_query($fields);
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($ch);
        return $result;

    }


    public function get_balance() {

        $url = 'https://api.makaleozgunluktesti.com';
        $ch = curl_init();
        $fields = array(
                    'api_key' => $this->api_key,
                    'request' => "get_balance");
        $fields_string = http_build_query($fields);
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($ch);
        return $result;

    }


}
