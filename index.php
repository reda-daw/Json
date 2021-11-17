<?php

//Devuelve un objeto (El nivel superior en la cadena JSON es un diccionario JSON)
$json_string = '{"nombre": "Tomas", "edad": 20, "activo": true, "colores": ["rojo", "azul"]}';
$objecto = json_decode($json_string);

printf('Hola %s, Tu edad es %s años.', $objecto ->nombre, $objecto ->edad);
echo '<br>';

// Devuelve un array (El nivel superior de la cadena JSON es un array JSON)
$json_string = '["Tomas", 20, true, ["rojo", "azul"]]';
$array = json_decode($json_string);
$edad = $array[1]*2;
printf('Hola %s, Tu edad es %s años.', $array[0], $edad);

?>