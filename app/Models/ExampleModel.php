<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleModel extends Model
{
    use HasFactory; //a treat

    protected $name = 'Sudipto';

    public function returnName()
    {
        echo $this->name;
    }

    public function index()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'arif'
            ],
            1 => [
                'id' => 2,
                'name' => 'jennifer'
            ],
            2 => [
                'id' => 3,
                'name' => 'shanto'
            ],
            3 => [
                'id' => 4,
                'name' => 'maruf'
            ],
        ];
    }
}
