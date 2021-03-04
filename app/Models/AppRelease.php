<?php


namespace App\Models;


use App\Models\Concerns\Filterable;
use App\Models\Concerns\Searchable;
use App\Models\Concerns\Sortable;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppRelease
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $excerpt
 * @property string $link
 * @property Carbon $published_at
 * @property int $created_by
 * @property int $category_id
 * @property User $author
 */
class AppRelease extends Model
{
    use Filterable, Sortable, Searchable;

    const CATEGORY_RELEASE = 1;
    const CATEGORY_EVENT = 2;
    const CATEGORY_VOTE = 3;
    const CATEGORY_OTHER = 4;

    public $table = 'releases';

    public $dates = [
        'published_at',
    ];

    public $searchableColumns = ['name'];
    public $sortableColumns = [];
    public $filterableColumns = ['name'];

    public $fillable = [
        'name',
        'link',
        'category_id',
        'excerpt',
        'published_at',
        'created_by',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    /**
     * Release's category
     * @return string
     */
    public function category(): string
    {
        if ($this->category_id == self::CATEGORY_RELEASE) {
            return __('releases.categories.release');
        }
        elseif ($this->category_id == self::CATEGORY_EVENT) {
            return __('releases.categories.event');
        }
        elseif ($this->category_id == self::CATEGORY_VOTE) {
            return __('releases.categories.vote');
        }
        elseif ($this->category_id == self::CATEGORY_OTHER) {
            return __('releases.categories.other');
        }
        return '';
    }

    /**
     * Check if the user has already read this release
     * @return bool
     */
    public function alreadyRead(): bool
    {
        $lastRelease = auth()->user()->settings->get('releases_' . $this->category_id);
        return $lastRelease == $this->id;
    }
}
