<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Video extends Model {
    use HasFactory;

    protected $fillable = ['name','slug','thumbnail','url','length','description'];

    public function getLengthAttribute($value){
        return gmdate("H:i:s",$value);
    }
    public function getCreatedAtAttribute($value){
        return (new Verta($value))->formatDifference(\verta());
    }
}
