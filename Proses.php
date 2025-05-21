<?php
$game_id = $_POST['game_id'];
$server = $_POST['server'];
$nominal = $_POST['nominal'];

// Contoh endpoint API (misalnya dari Apigames)
$endpoint = "https://api.apigames.id/v1/top-up";

// API Key
$apikey = "ISI_API_KEY_KAMU";

// Kirim request ke API
$data = [
  "game_id" => $game_id,
  "zone_id" => $server,
  "product" => $nominal,
  "signature" => md5($apikey . $game_id),
  "apikey" => $apikey
];

$options = [
  'http' => [
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data),
  ],
];
$context  = stream_context_create($options);
$result = file_get_contents($endpoint, false, $context);

// Cek hasil
if ($result === FALSE) {
  die("Gagal top up.");
}

// Arahkan ke halaman sukses
header("Location: success.php");
?>
