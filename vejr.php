<?php
/**
 * Created by PhpStorm.
 * User: Simon_
 * Date: 17-10-2017
 * Time: 09:23
 */

function getVejr($location)
{


    // Start cURL
    $ch = curl_init();

    // Set cURL options
        curl_setopt($ch, CURLOPT_URL, 'http://vejr.eu/api.php?location=' . $location . '&degree=C');
//    curl_setopt($ch, CURLOPT_URL, 'http://vejr.eu/api.php?location=Roskilde&degree=C');
    curl_setopt($ch, CURLOPT_USERAGENT, 'apivejr');

    // Parse result
    $result = curl_exec($ch);

    // Close connection when done
    curl_close($ch);

    // Return our decoded result
    return json_decode($result);


}

// Test CVRAPI
print_r(getVejr('Vordingborg'));
//print_r(cvrapi());
?>