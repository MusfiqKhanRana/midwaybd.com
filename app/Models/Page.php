<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'fn1',
        'ln1',
        'fn2',
        'ln2',
        'adrs',
        'eml1',
        'pcode',
        'mnmbr',
        'ntnlty',
        'simg',
        'NIDimg',
        'DOB',
        'job',
        'fn3',
        'ln3',
        'state',
        'country',
        'eml2',
        'NIDno',
        'psimg',
        'bankname',
        'BAnmbr',
        'Bname',
        'Rnmbr',
        'fn4',
        'ln4',
        'psimg2',
        'rltn',
        'name',
        'phnmbr',
        'deposit',
        'cmnt',
        'ssimg',
       
    ];
    use HasFactory;
}
