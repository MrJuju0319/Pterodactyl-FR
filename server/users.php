<?php

return [
    'permissions' => [
        'websocket_*' => 'Permet d’accéder au websocket pour ce serveur.',
        'control_console' => 'Permet à l’utilisateur d’envoyer des données à la console du serveur.',
        'control_start' => 'Permet à l’utilisateur de démarrer l’instance du serveur.',
        'control_stop' => 'Permet à l’utilisateur d’arrêter l’instance du serveur.',
        'control_restart' => 'Permet à l’utilisateur de redémarrer l’instance du serveur.',
        'control_kill' => 'Permet à l’utilisateur de tuer l’instance du serveur.',
        'user_create' => 'Permet à l’utilisateur de créer de nouveaux comptes utilisateur pour le serveur.',
        'user_read' => 'Permet à l’utilisateur d’afficher les utilisateurs associés à ce serveur.',
        'user_update' => 'Permet à l’utilisateur de modifier les autres utilisateurs associés à ce serveur.',
        'user_delete' => 'Permet à l’utilisateur de supprimer les autres utilisateurs associés à ce serveur.',
        'file_create' => 'Permet à l’utilisateur de créer de nouveaux fichiers et répertoires.',
        'file_read' => 'Permet à l’utilisateur de voir les fichiers et dossiers associés à cette instance de serveur, ainsi que de voir leur contenu.',
        'file_update' => 'Permet à l’utilisateur de mettre à jour les fichiers et dossiers associés au serveur.',
        'file_delete' => 'Permet à l’utilisateur de supprimer des fichiers et des répertoires.',
        'file_archive' => 'Permet à l’utilisateur de créer des archives de fichiers et de décompresser les archives existantes.',
        'file_sftp' => 'Permet à l’utilisateur d’effectuer les actions de fichier ci-dessus en utilisant un client SFTP',
        'allocation_read' => 'Permet d’accéder a la page de gestion des allocations du serveur. ',
        'allocation_update' => 'Permet à l’utilisateur d’apporter des modifications aux allocations du serveur.',
        'database_create' => 'Autorise l’utilisateur à créer une nouvelle base de données pour le serveur.',
        'database_read' => 'Permet à l’utilisateur de consulter les bases de données du serveur.',
        'database_update' => 'Permet à un utilisateur d’apporter des modifications à une base de données. Si l’utilisateur n’a pas l’autorisation "Voir le mot de passe" ainsi ils ne seront pas en mesure de modifier le mot de passe.',
        'database_delete' => 'Permet à l’utilisateur de supprimer une base de données.',
        'database_view_password' => 'Permet à l’utilisateur de consulter un mot de passe de base de données dans le système.',
        'schedule_create' => 'Permet à un utilisateur de créer une nouvelle tâche pour le serveur.',
        'schedule_read' => 'Permet à l’utilisateur de consulter les tâche du serveur.',
        'schedule_update' => 'Permet à l’utilisateur d’apporter des modifications à une tâche existante du serveur.',
        'schedule_delete' => 'Permet à un utilisateur de supprimer une tâche sur le serveur.',
    ],
];
