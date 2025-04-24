<?php
$url = 'https://jsonplaceholder.typicode.com/posts';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error en la solicitud: ' . curl_error($ch);
} else {
    $data = json_decode($response, true);
    echo "Títulos de los posts:\n";
    echo "<br><br>";
    foreach ($data as $post) {
        echo "- " . $post['title'] . "\n";
        echo "<br>";
    }
}

curl_close($ch);
?>
