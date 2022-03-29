
# 1. Implementar la función sumaArray para calcular la suma de los elementos de un array numérico:

La respuesta a este ejercicio esta en el codigo del proyecto en

> App\Service\SumaArray

Tiene un test de verificacion para comprobar que el algoritmo responde a los casos de uso presentado

> App/Tests/SumaArrayTest


# 2. ¿Encuentras algo raro en el siguiente código? ¿Por qué?

``` [php]
function duplicar($obj) {
    $newObj = $obj;
    return $newObj;
}

$a = new MiClase();
$a_copia = duplicar($a);
$a->setValor(10);
$a_copia->setValor(20);
```

Todo el codigo de la funcion duplicar carece de centido
debido a que solo resive un objeto para devolver el mismo objeto que resive.

En ese caso una llamada a la funcion duplicar es lo mismo que instanciar el objeto y volverlo a usar como en el sguiente codigo que es mas eficiente en cuanto a memoria, procesamiento y mas facil de leer, favoreciendo el Clean Code.

``` [php]
$a = new MiClase();
$a->setValor(10);
$a->setValor(20);
```

Digamos que en este ejemplo la clase MiClase es como sigue

class MiClase {
    public function setValor($number)
    {
        echo $number;
    }
}

Tiene un Metodo que llamado setValor() que resive un argunmento que e un numero entero.

Los dos codigos anteriores darian el mismo resultado pero la diferencia esta en cuanto a la cantidad y calidad del codigo, el segundo es muchisimo mas eficiente que el primero, porque ahorra una funcion y muchas variables innecesariamente.

## Promedio de tiempo de ejecucion
### Codigo Mas eficiente
> [Done] exited with code=0 in 0.324 seconds

### Codigo Menos eficiente
> [Done] exited with code=0 in 0.411 seconds


# 3. ¿Cuál de estas afirmaciones es correcta sobre un método estático?
> Los métodos estáticos no proveen una referencia a $this.

Los metodos estaticos no se llaman con $this, $this es una pseudovariable que permite hacer referencia al metodo o atributo de un objeto instanciado, en el caso de un metodo statico la llamada se haria

``` [php]
ClaseDelMetodoEstatico::metodoEstatico()
```

si la referencia al metodo estatico lo hacemos dentro de la clase que lo contenga se usa la palabra reservado 'self'

``` [php]
self::metodoEstatico()
```


# 4. ¿Qué función en PHP utilizarías para quitar todos los espacios de un string?

Hay dos funciones que se pueden utilizar con PHP para eliminar los espacio en blanco de una cadena

```[php]
str_replace(
    mixed $search,
    mixed $replace,
    mixed $subject,
    int &$count = ?
): mixed
```
``` [php]
preg_replace(
    mixed $pattern,
    mixed $replacement,
    mixed $subject,
    int $limit = -1,
    int &$count = ?
): mixed
```

Un ejemplo del uso de str_replace()

[Enlace a la documentacion de str_replace](https://www.php.net/manual/es/function.str-replace.php)

``` [php]
<?php
$searchString = " ";
$replaceString = "";
$originalString = "Esta es la prueba de hrbotfactory";

$outputString = str_replace($searchString, $replaceString, $originalString);
```

Un ejemplo del uso de preg_replace()

[Enlace a la documentacion de preg_replace](https://www.php.net/manual/es/function.preg-replace.php)

``` [php]
$searchString = " ";
$replaceString = "";
$originalString = "Esta es la prueba de hrbotfactory";

$outputString = preg_replace('/\s+/', '', $originalString);
```
