<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EntityMention
 * @package App\Models
 *
 * @property integer $entity_id
 * @property integer $campaign_id
 * @property integer $created_by
 * @property integer $action
 * @property Entity $entity
 * @property User $user
 * @property Campaign $campaign
 */
class EntityLog extends Model
{
    const ACTION_CREATE = 1;
    const ACTION_UPDATE = 2;
    const ACTION_DELETE = 3;

    public $fillable = [
        'entity_id',
        'created_by',
        'action',
        'campaign_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity()
    {
        return $this->belongsTo('App\Models\Entity', 'entity_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign', 'campaign_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    /**
     * @return string
     */
    public function actionCode()
    {
        if ($this->action == self::ACTION_CREATE) {
            return 'create';
        } elseif ($this->action == self::ACTION_UPDATE) {
            return 'update';
        } elseif ($this->action == self::ACTION_DELETE) {
            return 'delete';
        }
        return 'unknown';
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }
}