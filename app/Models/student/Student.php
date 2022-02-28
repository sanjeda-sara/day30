<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public static $name = 'Santo';
    public static $name1 = 'Maruf';
    public static $name2 = 'Mamun';
    public static $name3 = 'Nitu';
    public static $name4 = 'Fariya';

    public static function index() //method
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Arif',
                'phone' => 005010,
                'image' => asset('assets/img/a1.jpg')
            ],
            1 => [
                'id' => 2,
                'name' => self::$name1,
                'phone' => 7777,
                'image' => asset('assets/img/a1.jpg')
            ],
            2 => [
                'id' => 3,
                'name' => self::$name2,
                'phone' => 010101,
                'image' => asset('assets/img/a3.jpg')
            ],
            3 => [
                'id' => 4,
                'name' => self::$name3,
                'phone' => 0050011,
                'image' => asset('assets/img/a2.jpg')
            ],
            4 => [
                'id' => 5,
                'name' => self::$name4,
                'phone' => 000011,
                'image' => asset('assets/img/a2.jpg')
            ],
            5 => [
                'id' => 6,
                'name' => self::$name4,
                'phone' => 000011,
                'image' => asset('assets/img/a2.jpg')
            ]
        ];
    }
}
