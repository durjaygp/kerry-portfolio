<?php

namespace Database\Seeders;

use App\Models\Service;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $fake_images = [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
        ];

        $services = [
            [
                'icon' => 'mbri-growing-chart',
                'title' => 'Graphic Design',
                'description' => 'Create stunning and professional graphics tailored to your brand needs.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
            [
                'icon' => 'mbri-hot-cup',
                'title' => 'Unlimited Color',
                'description' => 'Customize your design with an unlimited range of colors to match your style.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
            [
                'icon' => 'mbri-upload',
                'title' => 'Media Marketing',
                'description' => 'Boost your brand visibility through strategic media marketing solutions.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
            [
                'icon' => 'mbri-layers',
                'title' => 'Unlimited Wifi',
                'description' => 'Enjoy seamless connectivity with high-speed unlimited Wi-Fi solutions.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
            [
                'icon' => 'mbri-website-theme',
                'title' => 'Responsive Design',
                'description' => 'Develop websites that look great and function flawlessly on all devices.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
            [
                'icon' => 'mbri-edit',
                'title' => 'Easy to Customize',
                'description' => 'Easily modify and personalize your website to suit your business needs.',
                'slug' => Str::slug($faker->unique()->sentence),
                'image' => 'uploads/images/' . $faker->randomElement($fake_images),
                'main_content' => $faker->paragraph,
                'user_id' => 1, // Assuming there are 10 users
                'status' => 1,
                'seo_description' => $faker->sentence,
                'seo_tags' => implode(', ', $faker->words(5)),
                'seo_keywords' => implode(', ', $faker->words(5)),
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
