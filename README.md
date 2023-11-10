# Tercer-Entrega-

En esta tercer entrega trabajamos con dos tablas de nuestra base de datos, quedando las demas tablas sin codear pero seran utilizadas en una futura implementacion.

Las tablas codeadas para esta tercer entrega son la principal denominada siniestros y cias.

Ambas tablas realizan los items obligatorios de esta entrega.

Los endpoints utilizados para ambas tablas son:
 #                 endpoint      verbo     controller           método
    $router->addRoute('siniestros',     'GET',    'SiniestrosApiController', 'getAll' ); Obtenemos la coleccion de siniestros
    $router->addRoute('siniestros',     'POST',   'SiniestrosApiController', 'create' ); Agregamos a la base un nuevo siniestro
    $router->addRoute('siniestros/:ID', 'GET',    'SiniestrosApiController', 'get'    ); Obtenemos un sinietros especificado por "ID"
    $router->addRoute('siniestros/:ID', 'PUT',    'SiniestrosApiController', 'update' ); Modificamos un siniestro especificado por "ID"
    $router->addRoute('siniestros/:ID', 'DELETE', 'SiniestrosApiController', 'delete' ); Borramos un siniestro especificado por "ID"
    
    
    $router->addRoute('cias',          'GET',          'CiasApiController', 'getAll'  );  Obtenemos la coleccion de cias
    $router->addRoute('cias',          'POST',         'CiasApiController', 'create'  ); Agregamos a la base una nueva compania 
    $router->addRoute('cias/:ID',      'GET',          'CiasApiController', 'get'     ); Obtenemos una cia especificado por "ID"
    $router->addRoute('cias/:ID',      'PUT',          'CiasApiController', 'update'  ); Modificamos una cia especificado por "ID"
    $router->addRoute('cias/:ID',      'DELETE',       'CiasApiController', 'delete'  ); Borramos una cia especificado por "ID"

    En ambas tablas usamos el Parametros GET para ordenar una coleccion a partir de un campo dado de la tabla, de manera ascendiente como descendiente.
