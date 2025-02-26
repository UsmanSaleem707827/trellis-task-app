<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);

        // \App\Models\Category::create([
        //     "title" => "Uncategorized",
        //     "slug" => "uncategorized",
        // ]);

        \App\Models\SiteSetting::create([
            "site_title" => "Oredoo",
            "tagline" => "Laravel Blog Project",
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro tenetur non laudantium! Autem, similique. Error quidem sequi adipisci, voluptatem sunt possimus cum. Nisi, nobis quia! Odio, vel similique. Corrupti, a!",
            "logo_dark" => "logo_dark.png",
            "logo_light" => "logo_light.png",
            "copyright_text" => "©". date('Y').", Oredoo Rights Reserved.",
            "enable_registration" => "1",
        ]);
        \App\Models\Menu::create([
            "header_menu" => json_encode([
            ["href" => url("/"), "icon" => "", "text" => "Home", "tooltip" => "", "children" => []],
            ["href" => route('frontend.post.index'), "icon" => "", "text" => "Blog", "tooltip" => "", "children" => []],
            ]),
            "footer_menu" => json_encode([
            ["href" => "http://127.0.0.1:8000/", "icon" => "", "text" => "Home", "tooltip" => "", "children" => []],
            ["href" => "#", "icon" => "", "text" => "AboutUs", "tooltip" => "", "children" => []],
            ["href" => "#", "icon" => "", "text" => "ContactUs", "tooltip" => "", "children" => []],
            ["href" => "#", "icon" => "", "text" => "PrivacyPolicy", "tooltip" => "", "children" => []]
            ]),
        ]);

        \App\Models\Post::factory(50)->create();
    }
}
