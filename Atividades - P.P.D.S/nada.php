<?php
#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>

const char ssid = "ESP01_SVR";
const char password = "123456789";

ESP8266WebServer server(80);

const int pinOut = 0;
const int pinOut = 2;

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $pagina);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true);
$return = curl_exec($ch);



if (isset($_COOKIE['usuario'])) {
    $nome= $_COOKIE['usuario'];
    echo "Bem Vindo Sr.(a) $nome";
    echo "Este é seu painel de controle do Arduino ESP-01"
    echo "Abaixo você vera as funções de desligar e ligar dois dos seus aparelhos remotamente."
    $pagina = "http://192.168.1.80/?realy0=on";
    echo $return;
}
curl_close($ch);
?>