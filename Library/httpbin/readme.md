# Library httpbin

This library build from PHP language and use CURL for grab and process external URL, default use this server for testing https://httpbin.org but you can change URL if ypu need

## Documentation

First you can call this library

$httpbin = new httpbin;

- IP

  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json

  $apiget = $httpbin->ip($timeout, $json_decode);

- GET

  $url = 'default'; // can change another endpoint
  $params = array('test'=>'bvhw98y88ch0867326875^%6854766795', 'grab'=>'grabvalue'); // this params push to endpoint
  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json

  $apiget = $httpbin->get($url, $params, $timeout, $json_decode);

- POST

  $url = 'default'; // can change another endpoint
  $params = array('test'=>'bvhw98y88ch0867326875^%6854766795', 'grab'=>'grabvalue'); // this params push to endpoint
  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json
  
  $apiget = $httpbin->post($url, $params, $timeout, $json_decode);

- PATCH

  $url = 'default'; // can change another endpoint
  $params = array('test'=>'bvhw98y88ch0867326875^%6854766795', 'grab'=>'grabvalue'); // this params push to endpoint
  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json
  
  $apiget = $httpbin->patch($url, $params, $timeout, $json_decode);

- PUT

  $url = 'default'; // can change another endpoint
  $params = array('test'=>'bvhw98y88ch0867326875^%6854766795', 'grab'=>'grabvalue'); // this params push to endpoint
  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json
  
  $apiget = $httpbin->put($url, $params, $timeout, $json_decode);

- DELETE

  $url = 'default'; // can change another endpoint
  $params = array('test'=>'bvhw98y88ch0867326875^%6854766795', 'grab'=>'grabvalue'); // this params push to endpoint
  $timeout = 10; //this timeout based on seconds
  $json_decode = true; // this for decode output json
  
  $apiget = $httpbin->delete($url, $params, $timeout, $json_decode);

- GETXML

  ```PHP
  $timeout = 10; //this timeout based on seconds
  
  $json_decode = true; // this for decode output json
  
  $apiget = $httpbin->getXml($timeout, $json_decode);
  ```

## License

The library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
