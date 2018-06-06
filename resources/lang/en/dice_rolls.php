<?php

return [
    'create'        => [
        'description'   => 'Create a new dice roll',
        'success'       => 'Dice Roll \':name\' created.',
        'title'         => 'New Dice Roll',
    ],
    'destroy'       => [
        'success'   => 'Dice Roll \':name\' removed.',
        'dice_roll' => 'Dice roll removed.',
    ],
    'edit'          => [
        'description'   => 'Edit an dice Roll',
        'success'       => 'Dice Roll \':name\' updated.',
        'title'         => 'Edit Dice Roll :name',
    ],
    'fields'        => [
        'parameters'    => 'Parameters',
        'name'          => 'Name',
        'results'       => 'Results',
        'rolls'         => 'Rolls',
        'created_at'    => 'Rolled At',
    ],
    'hints'         => [
        'parameters' => 'What are my dice options?'
    ],
    'index'         => [
        'actions'       => [
            'dice' => 'Dice Rolls',
            'results' => 'Results',
        ],
        'add'           => 'New Dice Roll',
        'description'   => 'Manage the dice Rolls of :name.',
        'header'        => 'Dice Rolls of :name',
        'title'         => 'Dice Rolls',
    ],
    'placeholders'  => [
        'name'  => 'Name of the Dice Roll',
        'parameters' => '4d6+3',
        'dice_roll' => 'Dice Roll',
    ],
    'results' => [
        'success' => 'Dice rolled.',
        'error' => 'Dice roll unsuccessful. Can\'t parse the parameters.',
        'fields' => [
            'creator' => 'Creator',
            'result' => 'Result',
            'date' => 'Date',
        ],
        'hint' => 'All the rolls done for this dice roll template.',
        'actions' => [
            'add' => 'Roll',
        ]
    ],
    'show'          => [
        'description'   => 'A detailed view of a Dice Roll',
        'tabs'          => [
            'results'    => 'Results',
        ],
        'title'         => 'Dice Roll :name',
    ],
];
