<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    const publicado = 1;
    const borrador = 2;

    protected $guarded = ['id','created_at','updated_at'];
    protected $withCount = ['reviews'];




    public function getRatingAtribute()
    {

        if ($this->reviews_count) {
            return round($this->reviews->avg('valor'),1);
        }else{
            return 5;
        }

        
    }
    // relacion uno a muchos
    public function reviews()
   {
       return $this->hasMany(reviews::class);
   }

    // relacion uno a muchos inversa
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(SubCategoria::class);
    }

   // relacion uno a muchos polimorfica
   public function imagen()
   {
       return $this->morphMany(Imagen::class,'imageable');
   }
   public function comentarios()
   {
       return $this->morphMany(comentario::class,'comentable');
   }

   public function calificaciones()
   {
       return $this->morphMany(calificacion::class,'calificacionable');
   }



 
}
