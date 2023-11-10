<?php
    require_once 'config.php';
    require_once 'libs/router.php';

    require_once 'app/controllers/siniestros.api.controller.php';
    require_once 'app/controllers/cias.api.controller.php';

    $router = new Router();

    #                 endpoint      verbo     controller           método
    $router->addRoute('siniestros',     'GET',    'SiniestrosApiController', 'getAll' );
    $router->addRoute('siniestros',     'POST',   'SiniestrosApiController', 'create' );
    $router->addRoute('siniestros/:ID', 'GET',    'SiniestrosApiController', 'get'    );
    $router->addRoute('siniestros/:ID', 'PUT',    'SiniestrosApiController', 'update' );
    $router->addRoute('siniestros/:ID', 'DELETE', 'SiniestrosApiController', 'delete' );
    
    
    $router->addRoute('cias',          'GET',          'CiasApiController', 'getAll'  );
    $router->addRoute('cias',          'POST',         'CiasApiController', 'create'  );
    $router->addRoute('cias/:ID',      'GET',          'CiasApiController', 'get'     );
    $router->addRoute('cias/:ID',      'PUT',          'CiasApiController', 'update'  );
    $router->addRoute('cias/:ID',      'DELETE',       'CiasApiController', 'delete'  );


    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);