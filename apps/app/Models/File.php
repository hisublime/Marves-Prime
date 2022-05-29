<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class File extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = [
        'id_rakor',
        'filename',
        'path'
    ];
  
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filename'] = json_encode($value);
    }
}

