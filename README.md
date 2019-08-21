# Ejercicio Laravel

En este repositorio se encuentra la solución al siguiente ejercicio:

Cree una aplicación web en php utilizando Laravel que permita realizar las siguientes acciones:

A. Acceder a la zona de inicio: para acceder a la zona de inicio se debe enviar por la URL el código:
A765. En caso de que el código sea válido se desplegarán 3 enlaces, el primero a “registrar
vehículos”, el segundo a “listar vehículos” y el tercero a “estadísticas vehículos”. En caso contrario
deberá desplegar un mensaje que diga zona prohibida.

B. Registrar vehículos: Cree un sistema que permita registrar tanto vehículos como dueños al mismo
tiempo. En un mismo formulario recoja todos los datos y registre los datos de las 2 tablas.
Nota: se recomienda registrar primero los datos de los dueños para evitar problemas de claves
foráneas inexistentes. Registre 2 vehículos y 2 dueños. Verifique únicamente que la marca sea
válida.

C. Listar vehículos: Liste todos los vehículos con los siguientes datos: placa y marca; para los
vehículos tipo Mazda muestre al lado de la placa un mensaje en verde que diga (“Los de Mazda
son los mejores”) y para los vehículos tipo Toyota muestra la placa en rojo y negrilla.

D. Estadísticas vehículos: Muestre cuántos vehículos de cada tipo existen registrados en el sistema
(por ejemplo: 3 Mazda, 2 Toyota, 0 Chevrolet).

Antes de mostrar las vistas de la aplicación, explicare un poco sobre la estructura interna del proyecto

Para el desarrollo de esta aplicación se crearon:

Dos controladores: RestriccionController y VehiculoController. El primero para restringir el ingreso de la Zona
de Inicio (si en la url no tiene el código A765, no puede obtener la vista). El segundo para poder crear el vehiculo
y su dueño (se representa como Persona), listar los vehiculos y obtener las estadísticas de los vehiculos.

Dos modelos Persona y Vehiculo. Estos dos modelos estan relacionados con dos métodos persona() y vehiculo() para
poder implementar en la base de datos una relacion uno a uno (Una persona solo puede tener un vehículo, y un vehiculo solo 
tiene un dueño). 

Cuatro vistas: para la zona de inicio, registrar vehiculos, listar vehiculos y la última para ver las estadisticas.


Para acceder a la zona de inicio: se necesita ir a la url : http://localhost:8000/Zona-Inicio/A765.


Vista Zona de Inicio
![Zona-Inicio](https://github.com/MariaRosales1/Ejercicio-Laravel/blob/master/Zona-Inicio.PNG)


Vista Registro de vehículos

![Registro-Vehiculos](https://github.com/MariaRosales1/Ejercicio-Laravel/blob/master/Registro.PNG)


Vista Lista de vehículos

![Lista-Vehiculos](https://github.com/MariaRosales1/Ejercicio-Laravel/blob/master/lista.PNG)

Vista de estadísticas

![Estadísticas-Vehiculos](https://github.com/MariaRosales1/Ejercicio-Laravel/blob/master/Estadisticas.PNG)


Para poder correr el proyecto, sigue los siguientes pasos:

1. Descarga el repositorio como ZIP
2. Pon el archivo en la carpeta www de tu servidor web (en mi caso es wamp64)
3. Descomprimelo y abrelo con un editor (puede ser visual studio code)
4. Cambias el archivo env.example por .env y configuras tu base de datos
5. Si debes crear una clave, abres la terminal(debe estar ubicado en la ruta del proyecto) y pones **php artisan key:generate**
6. Teniendo la terminal abierta, generas la migración: **php artisan migrate**
7. Como la aplicación tiene unos datos como ejemplo, para obtenerlos, en la misma terminal escribe **php artisan db:seed**
8. Finalmente, pones **php artisan serve** para poder visualizar las vistas en el navegador.
