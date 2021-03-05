<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Pelanggan extends Model
{
    use HasFactory;
    
    use LogsActivity;
    protected static $logAttributes = ['id_pelanggan', 'nama','id_paket'];
    protected static $logName = 'system';

    protected $fillable = [
        'id_pelanggan',
        'nik',
        'nama',
        'alamat',
        'id_paket',
    ];    

    public function paket()
    {
        return $this->BelongsTo(Paket::class,'id_paket');
    }

    protected $table = 'pelanggan';
}
