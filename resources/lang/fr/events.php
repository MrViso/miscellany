<?php

return [
    'create'        => [
        'description'   => 'Créer un nouvel événement',
        'success'       => 'Événement \':name\' créé.',
        'title'         => 'Nouvel Evénement',
    ],
    'destroy'       => [
        'success'   => 'Événement \':name\' supprimé.',
    ],
    'edit'          => [
        'success'   => 'Événement \':name\' modifié.',
        'title'     => 'Modifier l\'événement :name',
    ],
    'events'        => [
        'title' => 'Événements de l\'événement :name',
    ],
    'fields'        => [
        'date'      => 'Date',
        'event'     => 'Événement parent',
        'events'    => 'Événements',
        'image'     => 'Image',
        'location'  => 'Lieu',
        'name'      => 'Nom',
        'type'      => 'Type',
    ],
    'helpers'       => [
        'date'      => 'Ce champ peut contenir n\'importe quelle valeur et n\'est pas lié aux calendriers de la campagne. Pour lier cet événement à un calendrier, il faut se rendre sur l\'onglet rappels de cet événement.',
        'nested'    => 'Affichage des événements sans parent par défaut. Cliquer sur la rangée d\'un événement pour voir ses descendants.',
    ],
    'index'         => [
        'add'           => 'Nouvel Événement',
        'description'   => 'Gestion des événements de :name.',
        'header'        => 'Événements de :name',
        'title'         => 'Événements',
    ],
    'placeholders'  => [
        'date'      => 'La date de l\'événement',
        'location'  => 'Choix d\'un lieu',
        'name'      => 'Nom de l\'événement',
        'type'      => 'Cérémonie, Festival, Désastre, Bataille, Naissance',
    ],
    'show'          => [
        'description'   => 'Détail d\'un événement',
        'tabs'          => [
            'information'   => 'Information',
        ],
        'title'         => 'Événement :name',
    ],
    'tabs'          => [
        'calendars' => 'Entrées calendrier',
    ],
];
