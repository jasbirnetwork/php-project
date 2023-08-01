<?php
require_once '../vendor/autoload.php';
require_once '../config.php';


function create_meeting($title="Learning", $password="12345") {

    
    $client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);

    
    $db = new DB();
   
    $arr_token = $db->get_access_token();

    $accessToken = $arr_token->access_token;

    try {
        $response = $client->request('POST', '/v2/users/me/meetings', [
            "headers" => [
                "Authorization" => "Bearer $accessToken"
            ],
            'json' => [
                "topic" => $title,
                "type" => 2,
                "start_time" => date("Y-m-d h:i:sa"),
                "duration" => "30", // 30 mins
                "password" => $password
            ],
        ]);
        $data = json_decode($response->getBody());
        echo "Topic:". $data->topic;
        echo "<br>";
        echo "Join URL: <a class='btn text-white' href='$data->join_url' role='button'>";
        echo "<br>";
        echo "Meeting Password: ". $data->password;
        $db->insert_new_meeting($data);
 
    } catch(Exception $e) {
        if( 401 == $e->getCode() ) {
            $refresh_token = $db->get_refresh_token();
 
            $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic ". base64_encode(CLIENT_ID.':'.CLIENT_SECRET)
                ],
                'form_params' => [
                    "grant_type" => "refresh_token",
                    "refresh_token" => $refresh_token
                ],
            ]);
            $db->update_access_token($response->getBody());
 
            create_meeting();
        } else {
            echo $e->getMessage();
        }
    }
}

create_meeting("testing app", "1234567");