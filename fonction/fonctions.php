<?php
function generateUUIDv4(){
    $data = random_bytes(16); // 16 octets aléatoires

    // Mettre le 7ème octet à 0100 pour version 4
    $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);

    // Mettre le 9ème octet à 10xx pour la variante
    $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);

    // Formater en UUID standard
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function generateClientUUID() {
    $data = random_bytes(16);
    $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
    $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function generateFournisseurUUID() {
    $data = random_bytes(16);
    $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
    $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}



?>