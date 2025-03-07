<?php 
namespace App;

use Zizaco\Entrust\EntrustRole;
use App\Permission;
class Role extends EntrustRole
{
    protected $fillable = [ 'name', 'display_name', 'description'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
