<?php

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: text/html; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$respuesta = array (
    "En mi opinión, sí",
    "Es cierto",
    "Es decididamente así",
    "Probablemente",
    "Buen pronóstico",
    "Todo apunta a que sí",
    "Sin duda",
    "Sí",
    "Sí - definitivamente",
    "Debes confiar en ello",
    "Respuesta vaga, vuelve a intentarlo",
    "Pregunta en otro momento",
    "Será mejor que no te lo diga ahora",
    "No puedo predecirlo ahora",
    "Concéntrate y vuelve a preguntar",
    "Puede ser",
    "No cuentes con ello",
    "Mi respuesta es no",
    "Mis fuentes me dicen que no",
    "Las perspectivas no son buenas",
    "Muy dudoso"
);

$resp = array_rand($respuesta, 1);
echo $respuesta[$resp];