<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectPage
 *
 * @property int $id
 * @property string $projectname
 * @property string $projectdescription
 * @property string $projectimage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereProjectdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereProjectimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereProjectname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectPage extends Model
{
    use HasFactory;
    protected $table = "projectpage";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','projectname','projectdescription','projectimage'];
}
