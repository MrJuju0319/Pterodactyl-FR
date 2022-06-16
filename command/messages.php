<?php

return [
    'location' => [
        'no_location_found' => 'Impossible de localiser un enregistrement correspondant au code court fourni.',
        'ask_short' => 'Code abrégé de l’emplacement',
        'ask_long' => 'Description de l’emplacement',
        'created' => 'Création réussie d’un nouvel emplacement (:name) avec un ID :id.',
        'deleted' => 'Suppression réussie de l’emplacement.',
    ],
    'user' => [
        'search_users' => 'Entrez un nom d’utilisateur, un ID utilisateur ou une adresse courriel',
        'select_search_user' => 'ID de l’utilisateur à supprimer (Saisir \'0\' pour rechercher)',
        'deleted' => 'Utilisateur supprimé avec succès.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet utilisateur?',
        'no_users_found' => 'Aucun utilisateur n’a été trouvé pour le terme de recherche fourni.',
        'multiple_found' => 'Plusieurs comptes ont été trouvés pour l’utilisateur fourni, impossible de supprimer un utilisateur en raison de l’indicateur --no-interaction.',
        'ask_admin' => 'Cet utilisateur est-il un administrateur?',
        'ask_email' => 'Adresse e-mail',
        'ask_username' => 'Pseudo',
        'ask_name_first' => 'Prénom',
        'ask_name_last' => 'Nom',
        'ask_password' => 'Mot de passe',
        'ask_password_tip' => 'Si vous souhaitez créer un compte avec un mot de passe aléatoire envoyé par courriel à l’utilisateur, exécutez à nouveau cette commande (CTRL+C) et passez l’indicateur `-no-password',
        'ask_password_help' => 'Les mots de passe doivent comporter au moins 8 caractères et au moins une lettre majuscule et un numéro.',
        '2fa_help_text' => [
            'Cette commande désactive l’authentification à 2 facteurs pour le compte d’un utilisateur s’il est activé. Ceci ne doit être utilisé comme commande de récupération de compte que si l’utilisateur est verrouillé hors de son compte.',
            'Si ce n’est pas ce que vous vouliez faire, appuyez sur CTRL+C pour quitter ce processus.',
        ],
        '2fa_disabled' => 'L’authentification à 2 facteurs a été désactivée pour :email.',
    ],
    'schedule' => [
        'output_line' => 'Répartition de la tâche pour la première tâche dans `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Suppression du fichier de sauvegarde du service :file.',
    ],
    'server' => [
        'rebuild_failed' => 'La demande de reconstruction pour ":name" (#:id) sur le noeud ":node" a échoué avec l’erreur: :message',
        'reinstall' => [
            'failed' => 'La réinstallation de ":name" (#:id) sur le noeud ":node" a échoué avec l’erreur: :message',
            'confirm' => 'Vous êtes sur le point de réinstaller un groupe de serveurs. Souhaitez-vous continuer?',
        ],
        'power' => [
            'confirm' => 'Vous êtes sur le point d’effectuer :action sur :count serveurs. Souhaitez-vous continuer ?',
            'action_failed' => 'La demande d’allumage de ":name" (#:id) sur le noeud ":node" a échoué avec l’erreur: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Hôte SMTP (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'Nom d’utilisateur SMTP',
            'ask_smtp_password' => 'Mot de passe SMTP',
            'ask_mailgun_domain' => 'Domaine Mailgun',
            'ask_mailgun_endpoint' => 'Mailgun Endpoint',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Clé d’API Postmark',
            'ask_driver' => 'Quel pilote doit être utilisé pour envoyer des emails ?',
            'ask_mail_from' => 'L’adresse e-mail doit provenir de',
            'ask_mail_name' => 'Nom d’où les e-mails doivent apparaître',
            'ask_encryption' => 'Méthode de chiffrement à utiliser',
        ],
    ],
];
