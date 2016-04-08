<?php
    $apiKey = "AIzaSyBqm8k0Vvea-YmpU4rwU_Rtiex6_xUKXcU";

    $fields = array(
       'data' => array('message'=>'hallo MEGA','time'=>'15:10'),
       'registration_ids' => ['fKWAMq3Kl_4:APA91bH-uYwqttl0CpZZReLONJTlKGA5lljSwnAkqRzV3M89eCVvvdMEXJhcDFRMs7t-RXzq2Iy80SDCnuRdg--obhBp_I6DzkKsnH9CMpz1hl2QMpMAjhSAEd8T5hrj_w_YRfnC430q']
    );

    $headers = array( 
       'Content-Type:application/json',
        'Authorization:key='.$apiKey
    );

    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, 'https://gcm-http.googleapis.com/gcm/send' );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

    $result = curl_exec($ch);
    $result = curl_exec($ch);
    if ($result === FALSE) {
       die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);

    echo json_encode($result);

?>