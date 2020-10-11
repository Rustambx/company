<?php

namespace App\Modules\RBAC\Models;

use App\Modules\RBAC\Contracts\RoleInterface;
use App\Modules\RBAC\Traits\RoleTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Role model.
 *
 * @package App\Modules\RBAC\Models
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\RBAC\Models\Permission[] $perms
 * @property-read int|null $perms_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model implements RoleInterface
{
    use RoleTrait;

    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'roles';
}
