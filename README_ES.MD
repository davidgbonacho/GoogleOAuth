# Ejecutar por fecha
Cómo usar la función `date()` como un interruptor para ejecutar código en tu aplicación.

`[SimPIL son una serie de ejemplos ultra-simples de cómo realizar diferentes operaciones con código. Sin complicaciones.]`

## Instalación
No es necesario instalar nada, solo mira el código.

## Ejecución
Simplemente usa este código para ejecutar cierto código basado en la fecha actual del servidor:

```php

$exeByDate = false;
$current_date = strtotime(date("d-m-Y H:i:00",time())); // obtener la fecha actual
$activation_date = strtotime("15-04-2024 00:06:00"); // establecer la fecha de activación

if($current_date > $activation_date){ // comparar y establecer como verdadero si la fecha actual es mayor que la fecha de activación
    $exeByDate = true;
}

if($exeByDate){
    // tu código aquí
}
```

## Archivos
- index.php con este código simple
- img/logo.svg: solo las imágenes importantes están aquí

[Text in English here](README.MD)


![](img/logo.svg)
---
`título:` ejecutar por fecha [`SimPIL`] 26/12/24\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)