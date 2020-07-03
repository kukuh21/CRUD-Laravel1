<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pertanyaan;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primarykey = 'jawaban_id';
    protected $fillable = [
        'pertanyaan_id',
        'jawaban',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
