<?php

return [
    'actions'       => [
        'add'       => 'New Entity Note',
        'add_user'  => 'Add user',
    ],
    'create'        => [
        'description'   => 'Create a new Entity Note',
        'success'       => 'Entity Note \':name\' added to :entity.',
        'title'         => 'New Entity Note for :name',
    ],
    'destroy'       => [
        'success'   => 'Entity Note \':name\' for :entity removed.',
    ],
    'edit'          => [
        'description'   => 'Update an existing entity note',
        'success'       => 'Entity Note \':name\' for :entity updated.',
        'title'         => 'Update entity note for :name',
    ],
    'fields'        => [
        'collapsed' => 'Close pinned entity note by default',
        'creator'   => 'Creator',
        'entry'     => 'Entry',
        'is_pinned' => 'Pinned',
        'name'      => 'Name',
        'position'  => 'Pinned position',
    ],
    'hint'          => 'Information that doesn\'t quite fit in the standard fields of an entity or that should be kept private can be added as Entity Notes.',
    'hints'         => [
        'is_pinned' => 'Pinned entity notes are displayed below the entity\'s text on the primary entity view. Combine with the position field to control in which order pinned entity notes appear.',
    ],
    'index'         => [
        'title' => 'Entity Notes for :name',
    ],
    'placeholders'  => [
        'name'  => 'Name of the entity note, observation or remark',
    ],
    'show'          => [
        'advanced'  => 'Advanced Permissions',
        'title'     => 'Entity Note :name for :entity',
    ],
];
