<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books  = array(
            array(
                'data' => array('title' => 'Совершенный код'),
                'authors' => array(
                    array('name' => 'Стив Макконнелл' ),
                )
            ),
            array(
                'data' => array('title' => 'PHP глазами хакера'),
                'authors' => array(
                    array('name' => 'Михаил Фленов' ),
                )
            ),
            array(
                'data' => array('title' => 'Laravel. Полное руководство'),
                'authors' => array(
                    array('name' => 'Мэтт Стаффер' ),
                )
            ),
            array(
                'data' => array('title' => 'PHP. Рецепты программирования'),
                'authors' => array(
                    array('name' => 'Дэвид Скляр' ),
                    array('name' => 'Адам Трахтенберг' ),
                )
            ),
            array(
                'data' => array('title' => 'MySQL по максимуму'),
                'authors' => array(
                    array('name' => 'Бэрон Шварц' ),
                    array('name' => 'Вадим Ткаченко' ),
                    array('name' => 'Петр Зайцев' ),
                )
            ),
            array(
                'data' => array('title' => 'Паттерны объектно-ориентированного проектирования'),
                'authors' => array(
                    array('name' => 'Ральф Джонсон' ),
                    array('name' => 'Джон Влиссидес' ),
                    array('name' => 'Ричард Хелм' ),
                    array('name' => 'Эрих Гамма' ),
                )
            ),
         );   

        foreach ($books as $book) {
            Book::create($book['data'])->authors()->createMany($book['authors']);
        }

    }
}
