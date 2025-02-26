<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarouselItem;

class CarouselItemsTableSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'title' => 'Fourth Global NCD Alliance Forum to take place in Kigali, Rwanda in October 2024',
                'description' => null,
                'link' => '/ncd_news/network-release-fourth-global-ncd-alliance-forum-to-take-place-in-kigali-rwanda-in-october-2024',
                'image_path' => 'new/img/intro-carousel/header.png',
            ],
            [
                'title' => 'WE STAND UNITED FOR OUR LIVES AND FOR OUR FUTURE GENERATION',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => route('about_us'),
                'image_path' => 'new/img/intro-carousel/1.jpg',
            ],
            [
                'title' => 'CAR FREE DAY INITIATIVE',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => null,
                'image_path' => 'new/img/intro-carousel/2.jpeg',
            ],
            [
                'title' => 'VIRTUAL FITNESS SHOW & HEALTHY LIFE EDUCATION',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => null,
                'image_path' => 'new/img/intro-carousel/2.png',
            ],
            [
                'title' => 'CITY CANCER CHALLENGE',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => null,
                'image_path' => 'new/img/intro-carousel/3.jpg',
            ],
            [
                'title' => 'NCDs STORIES SHARING',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => null,
                'image_path' => 'new/img/intro-carousel/4.png',
            ],
            [
                'title' => 'MEDIA ENGAGEMENT',
                'description' => 'NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..',
                'link' => null,
                'image_path' => 'new/img/intro-carousel/5.jpg',
            ],
        ];

        foreach ($items as $item) {
            CarouselItem::create($item);
        }
    }
}
