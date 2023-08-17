<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class RunNumber extends Model
{
                use SoftDeletes, HasFactory;
            
                public $table = 'run_numbers';
            
                protected $dates = [
                    'created_at',
                    'updated_at',
                    'deleted_at',
                ];
            
                protected $fillable = [
                    'run_name',
                    'asset_id',
                    'created_at',
                    'updated_at',
                    'deleted_at',
                ];
            
                protected function serializeDate(DateTimeInterface $date)
                {
                    return $date->format('m/d/Y H:i:s');
                }
            }
            