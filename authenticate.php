<?php 
    #https://api.instagram.com/oauth/authorize/?client_id=e0a337b8b5dc423ba2c5e6d82add0b46&redirect_uri=http://localhost/social_wall/authenticate.php&response_type=code
    if(isset($_GET["error"])){
        echo "We are so sorry. You must give permission to use our application";
    }else{
        $code = $_GET["code"];
        $url = 'https://api.instagram.com/oauth/access_token';
        $data = array(
            'client_id' => 'e0a337b8b5dc423ba2c5e6d82add0b46',
            'client_secret' => '1abc0ae29013452083544709092d24ab',
            'grant_type' => 'authorization_code',
            'redirect_uri' => 'http://localhost/social_wall/authenticate.php',
            'code' => $code
        );

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $result = json_decode($result);
        if ($result === FALSE) {
            #handle error
        }
        echo "<pre>";
        echo $result->access_token;
     }

?>
