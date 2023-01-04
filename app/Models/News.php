<?php

namespace App\Models;

class News
{
    private static $news = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Текст новости 1'
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Текст новости 2'
        ]
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsById($id)
    {
        foreach (static::$news as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return [];
    }
}