<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'L’adresse FQDN ou IP fournie ne résout pas une adresse IP valide.',
        'fqdn_required_for_ssl' => 'Un nom de domaine entièrement qualifié qui résout une adresse IP publique est nécessaire pour utiliser SSL pour ce noeud.',
    ],
    'notices' => [
        'allocations_added' => 'Les allocations ont bien été ajoutées à ce nœud.',
        'node_deleted' => 'Le nœud a bien été supprimé.',
        'location_required' => 'Vous devez avoir au moins un emplacement configuré avant de pouvoir ajouter un nœud.',
        'node_created' => 'Création réussie d’un nouveau noeud. Vous pouvez configurer automatiquement le démon sur cette machine en visitant l’onglet \'Configuration\' tab. <strong>Avant de pouvoir ajouter des serveurs, vous devez d’abord allouer au moins une adresse IP et un port.</strong>',
        'node_updated' => 'Les informations du nœud ont été mises à jour. Si des paramètres du démon ont été modifiés, il faudra le redémarrer pour que ces modifications prennent effet.',
        'unallocated_deleted' => 'Suppression de tous les ports non affectés pour <code>:ip</code>.',
    ],
];
