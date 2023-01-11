<?php

namespace App\Models;

use App\Models\Categories\Categories;

class News
{
    private static $news = [
        '1' => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Текст новости 1',
            'isPrivate' => true,
            'category_id' => 1
        ],
        '2' => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Текст новости 2',
            'isPrivate' => false,
            'category_id' => 2
        ],
        '3' => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Текст новости 3',
            'isPrivate' => false,
            'category_id' => 1
        ],
        '4' => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Текст новости 4',
            'isPrivate' => false,
            'category_id' => 3
        ],
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsById($id)
    {
        if(array_key_exists($id, static::$news))
            return static::$news[$id];
        else return [];
    }

    public static function getNewsByCategorySlug($slug){
        $id = Categories::getCategoryIdBySlug($slug);
        $news = [];
        foreach (static::$news as $item) {
            if($item['category_id'] == $id){
                $news[] = $item;
            }
        }
        return $news;
    }
}
