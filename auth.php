<?php

return [
    'sign_in' => 'Ouverture de session',
    'go_to_login' => 'Aller à la page de connection',
    'failed' => 'Aucun compte correspondant à ces identifiants n’a pu être trouvé.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Saisissez votre adresse e-mail de compte pour recevoir des instructions sur la réinitialisation de votre mot de passe.',
        'button' => 'Récupérer compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et ouvrir une session',
    ],

    'two_factor' => [
        'label' => '2FA',
        'label_help' => 'Ce compte nécessite une deuxième couche d’authentification pour pouvoir continuer. Veuillez entrer le code généré par votre appareil pour ouvrir cette session.',
        'checkpoint_failed' => 'Le jeton d’authentification à deux facteurs était invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit compter au moins 10 caractères et doit être unique à ce site.',
    '2fa_must_be_enabled' => 'L’administrateur a demandé que l’authentification à 2 facteurs soit activée pour votre compte.',
];
