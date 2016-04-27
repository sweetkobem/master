<?php

namespace Library\httpbin;

class httpbin {
    
    const URL_DEFAULT = 'https://httpbin.org';

    public function prepareCurl($method, $url, $params = array(), $timeout = 10, $json_decode = false){
        if (!function_exists('curl_init')){
            return 'Sorry cURL is not installed!';
        }
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        if(!in_array($method, array('get','xml'))){
            if($method == 'post'){
                curl_setopt($ch, CURLOPT_POST, 1);
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        
        $output = curl_exec($ch);
        if($json_decode == true){
            $output = json_decode($output);
        }
        curl_close($ch);

        return $output;
    }
    
    public function ip($timeout = 10, $json_decode = false) {
        return $this->prepareCurl('get', self::URL_DEFAULT.'/ip', array(), $timeout, $json_decode);
    }

    public function get($url = 'default', $params = array(), $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/get';
        }
        if(!empty($params)){
            $params_array = array();
            foreach($params as $key=>$val){
                array_push($params_array, $key.'='.$val); 
            }
            $url = $url."?".implode('&',$params_array);
        }
        return $this->prepareCurl('get', $url, array(), $timeout, $json_decode);
    }
    
    public function post($url = 'default', $params = array(), $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/post';
        }
        return $this->prepareCurl('post', $url, $params, $timeout, $json_decode);
    }
    
    public function patch($url = 'default', $params = array(), $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/patch';
        }
        return $this->prepareCurl('patch', $url, $params, $timeout, $json_decode);
    }
    
    public function put($url = 'default', $params = array(), $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/put';
        }
        return $this->prepareCurl('put', $url, $params, $timeout, $json_decode);
    }
    
    public function delete($url = 'default', $params = array(), $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/delete';
        }
        return $this->prepareCurl('delete', $url, $params, $timeout, $json_decode);
    }
    
    public function getXml($url = 'default', $timeout = 10, $json_decode = false) {
        if($url == 'default'){
            $url = self::URL_DEFAULT.'/xml';
        }
        return $this->prepareCurl('get', $url, array(), $timeout, $json_decode);
    }

}

?>