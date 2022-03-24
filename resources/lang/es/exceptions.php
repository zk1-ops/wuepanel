<?php

return [
    'daemon_connection_failed' => 'There was an exception while attempting to communicate with the daemon resulting in a HTTP/:code response code. This exception has been logged.',
    'node' => [
        'servers_attached' => 'A node must have no servers linked to it in order to be deleted.',
        'daemon_off_config_updated' => 'The daemon configuration <strong>has been updated</strong>, however there was an error encountered while attempting to automatically update the configuration file on the Daemon. You will need to manually update the configuration file (config.yml) for the daemon to apply these changes.',
    ],
    'allocations' => [
        'server_using' => 'A server is currently assigned to this allocation. An allocation can only be deleted if no server is currently assigned.',
        'too_many_ports' => 'Adding more than 1000 ports in a single range at once is not supported.',
        'invalid_mapping' => 'The mapping provided for :port was invalid and could not be processed.',
        'cidr_out_of_range' => 'CIDR notation only allows masks between /25 and /32.',
        'port_out_of_range' => 'Ports in an allocation must be greater than 1024 and less than or equal to 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'A Nest with active servers attached to it cannot be deleted from the Panel.',
        'egg' => [
            'delete_has_servers' => 'An Egg with active servers attached to it cannot be deleted from the Panel.',
            'invalid_copy_id' => 'The Egg selected for copying a script from either does not exist, or is copying a script itself.',
            'must_be_child' => 'The "Copy Settings From" directive for this Egg must be a child option for the selected Nest.',
            'has_children' => 'This Egg is a parent to one or more other Eggs. Please delete those Eggs before deleting this Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable de entorno :name debe ser unica para este Egg.',
            'reserved_name' => 'La variable de entorno :name está protegido y no se puede asignar a una variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'Hubo un error al intentar analizar el archivo JSON: :error.',
            'file_error' => 'El archivo JSON proporcionado no es valido.',
            'invalid_json_provided' => 'El archivo JSON proporcionado no está en un formato que se pueda reconocer.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'No está permitido editar su propia cuenta de subusuario.',
        'user_is_owner' => 'No puede agregar al propietario del servidor como subusuario para este servidor.',
        'subuser_exists' => 'Un usuario con esa dirección de correo electrónico ya está asignado como subusuario para este servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'No se puede eliminar un servidor host de base de datos que tiene bases de datos activas vinculadas.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'El tiempo de intervalo máximo para una tarea encadenada es de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'No se puede eliminar una ubicación que tiene nodos activos adjuntos.',
    ],
    'users' => [
        'node_revocation_failed' => 'Error al revocar claves en <a href=":link">Nodo #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No se encontraron nodos que cumplieran los requisitos especificados para la implementación automática.',
        'no_viable_allocations' => 'No se encontraron asignaciones que cumplieran los requisitos para el despliegue automático.',
    ],
    'api' => [
        'resource_not_found' => 'El recurso solicitado no existe en este servidor.',
    ],
];
