<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Video de prueba 1',
            'description' => 'Este es un video de prueba',
            'video_path' => 'videos/video1.mp4',
        ]);

        Video::create([
            'title' => 'Video de prueba 2',
            'description' => 'Otro video de prueba',
            'video_path' => 'videos/video2.mp4',
        ]);
    }
}
