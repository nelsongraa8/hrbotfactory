
# 1. Implementar la función sumaArray para calcular la suma de los elementos de un array numérico:

La respuesta a este ejercicio esta en el codigo del proyecto en

App\Service\SumaArray

Tiene un test de verificacion para comprobar que el algoritmo responde a los casos de uso presentado

App/Tests/SumaArrayTest

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