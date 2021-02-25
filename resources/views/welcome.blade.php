<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Prueba Tecnica Centribal</h1>

    <h2>Ejercicio 1</h2>
    <p>
        Cree un nuevo arreglo ocupando la función map, la función creada debe dividir a la mitad y guardar solo los números pares Ej: Array = [10,20,30,40,50,60,70,80,90,100] Resultado: Array = [10,20,30,40,50]
    </p>
    <button onclick="mostrarArreglo(arregloNumeros, 'arregloIniciar')" >Mostrar Arreglo Inicial</button>
    <button onclick="mostrarArreglo(arregloResultante, 'arregloResultante')">Mostrar Arreglo Resultante</button>
    <ul id="arregloIniciar">
    </ul>

    <ul id="arregloResultante">
    </ul>

    <hr>

    <h2>Ejercicio 2</h2>

    <p>
        Para crear la vista prueba.blade.php y poder acceder a ella a través de https://url/prueba es necesario tener archivos previos de enrutamiento y controladores. <br/>
        ¿Qué archivos estima ud que hacen falta para poder crear la vista utilizando buenas prácticas?
    </p>
    <p>
        Ruta: /routes/web.php <br/>
        Definir la ruta de acceso a la vista y darle un nombre <br/>
        Ruta: app/http/Controllers/PruebaController.php <br/>
        Crear el controlador en la ruta especificada y un metodo index para renderizar la vista seleccionada <br/>
        Ruta:  /resources/views/prueba/index.blade.php <br/>
        Crear la vista con blade que contenga el html necesario que se desea mostrar <br/>
    </p>

    <hr>

    <h2>Ejercicio 3</h2>

    <p>
        Cree un método en el lenguaje de su preferencia que calcule los numero primos del 1 al 100, teniendo en consideración que los números primos son aquellos que son divisibles solo por 1 y por sí mismos, ejemplo: 2, 3, 5, 7 ,11, 13, atc.
    </p>

    <button onclick="primosRango(1,100)">Calcular numeros Primos del 1 al 100</button>

    <ul id="numeroPrimos">
    </ul>

    <hr>

    <h2>Ejercicio 4</h2>

    <p>
        Cree la ruta, tabla en base de datos y los métodos POST crear(store) y GET, Obtener(index) para la tabla transacción <br/>
        Ejemplo del json de envío <br/>

        Json enviado post <br>

        https://url/crear <br/>

        <code>
            data {
                idUsuario:1234,
                usuario: ‘prueba’,
                Transacción: ‘#1236547’,
                Date:’01/09/2020’,
                Producto: ‘Teclado’,
                idProducto:’Tec-12345lk’
                } 
        </code>

        <br/>

        <h3>Link Para Consultar Transacciones</h3>

        <a href="{{ route('indexTransacciones') }}"> Lista de transacciones </a>

        <h3>Link Para Crear Transacciones (POST)</h3>

        <a href="{{ route('crearTransaccion') }} "> {{ route('crearTransaccion') }} </a>


    </p>
    
    





    <script>

        const arregloNumeros = [10,20,30,40,50,60,70,80,90,100];
        let arregloResultante = arregloNumeros.filter(function(item, key, array){
            
            //Se considera solo la mitad del arreglo
            if( key <= ( (array.length/2) - 1) ){
                return item
            }else{
                return false
            }

        }).map( function(item, key, array){
            //Si el resto de la division entre 2 es igual a 0 - el valor es par
            if( item % 2 === 0 ){
                return item
            }
        })

        function mostrarArreglo(arreglo, idUl){
            let ulArreglo = document.getElementById(idUl);
            ulArreglo.innerHTML = ""
            arreglo.forEach(element => {
                let liItemArreglo = document.createElement("li")
                liItemArreglo.innerHTML = element
                ulArreglo.appendChild(liItemArreglo)
            });
        }

        function esPrimo(numero){
            
            if(numero == 0 || numero == 1 || numero == 4){
                return false
            }

            for(let index = 2; index < numero / 2; index++){
                if(numero % index === 0){
                    return false
                }
            }

            return true

        }

        function primosRango(numeroInicial, numeroFinal){

            let arregloNumeroPrimos = []
            

            for(let index = numeroInicial; index < numeroFinal; index++){

                if( esPrimo(index) ){
                    arregloNumeroPrimos.push(index)
                }

            }

            mostrarArreglo(arregloNumeroPrimos, "numeroPrimos")

        }


    </script>
</body>
</html>