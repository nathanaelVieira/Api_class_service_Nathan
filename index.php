<?php
    
    include 'service.php';

    header ("Content-type: application/json; charset=UTF-8");

    if ( $_GET['url']) 
        $url = explode('/', $_GET['url']);
    
    if ( $url[0] === 'api') {

        array_shift($url);
        
        $service =  ucfirst( $url[0]).'Service';

        $method = strtolower( $_SERVER['REQUEST_METHOD']);

        var_dump($service);
        echo "</br>";
        var_dump($method);
        echo "</br>";
        var_dump($url);

        try {
            $response = call_user_method_array( array( new $service, $method), $url);

            http_response_code(200);
            echo json_encode( array( 'status' => 'sucess', 'data' => $response));
        } catch {
            http_response_code(400);
            echo json_encode( array( 'status' => 'erro', 'data' => $e => getMessage()));
        }
    }
?>