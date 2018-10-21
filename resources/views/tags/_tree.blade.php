@inject ('datagrid', 'App\Renderers\DatagridRenderer')

{!! $datagrid->render(
    $filterService,
    // Columns
    [
        // Avatar
        [
            'type' => 'avatar'
        ],
        // Name
        'name',
        'type',
        [
            'label' => trans('tags.fields.tags'),
            'render' => function($model) {
                return $model->tags()->count();
            },
            'disableSort' => true,
        ],
        [
            'label' => trans('tags.fields.tag'),
            'render' => function($model) {
                if ($model->tag) {
                    return '<a href="' . route('tags.show', $model->tag->id) . '">' . $model->tag->name . '</a>';
                }
            },
            'field' => 'tag.name',
        ],
        [
            'type' => 'is_private',
        ]
    ],
    // Data
    $models,
    // Options
    [
        'route' => 'tags.tree',
        'baseRoute' => 'tags',
        'trans' => 'tags.fields.',
        'row' => [
            'data' => [
                'data-children' => function($model) {
                    return $model->tags()->count();
                }
            ]
        ]
    ]
) !!}