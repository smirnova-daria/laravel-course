<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories
{
    private static $categories = [
        '1'=>[
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        '2'=>[
            'id' => 2,
            'title' => 'Экономика',
            'slug' => 'economics'
        ],
        '3'=>[
            'id' => 3,
            'title' => 'Политика',
            'slug' => 'politics'
        ]
    ];

    public static function getCategories()
    {
        return static::$categories;
    }
    public static function getCategoryById($id)
    {
        if(array_key_exists($id, static::$categories))
            return static::$categories[$id];
        else return [];
    }

    public static function getCategoryIdBySlug($slug){
        $id = null;
        foreach (static::$categories as $category){
            if($category['slug'] === $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryNameBySlug($slug){
        $id = static::getCategoryIdBySlug($slug);
        $category = static::getCategoryById($id);
        if($category != []) return $category['title'];
        else return '';
    }
}
