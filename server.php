<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'b912dae9a546050847b3', // Replace with 'key' from dashboard
    '03bc14e242841989d5c9', // Replace with 'secret' from dashboard
    '1760100', // Replace with 'app_id' from dashboard
    $options
);

$contador = 0;

while ($contador < 8) {
    $data= [
        rand(22, 26),
        rand(45, 55),
        rand(60, 90)
    ];
    $pusher->trigger('barra', 'nuevaBarra', $data);
    $contador++;
    sleep(1);
}
?>
