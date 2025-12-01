<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Projects
        Project::create([
            'title' => ['en' => 'Seu Comportamento', 'pt' => 'Seu Comportamento'],
            'slug' => ['en' => 'seu-comportamento', 'pt' => 'seu-comportamento'],
            'description' => [
                'en' => 'Co-Founder. Integrating AI to generate personalized behavioral reports and improve organizational performance.',
                'pt' => 'Co-Fundador. Integrando IA para gerar relatórios comportamentais personalizados e melhorar a performance organizacional.'
            ],
            'url' => 'https://seucomportamento.com.br',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Project::create([
            'title' => ['en' => 'CinefinderPro', 'pt' => 'CinefinderPro'],
            'slug' => ['en' => 'cinefinderpro', 'pt' => 'cinefinderpro'],
            'description' => [
                'en' => 'A platform for finding cinema professionals.',
                'pt' => 'Uma plataforma para encontrar profissionais de cinema.'
            ],
            'url' => 'https://cinefinderpro.com.br',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Project::create([
            'title' => ['en' => 'BruningLabs', 'pt' => 'BruningLabs'],
            'slug' => ['en' => 'bruninglabs', 'pt' => 'bruninglabs'],
            'description' => [
                'en' => 'Innovation lab. Built chatbots with RAG for courses and agentic WhatsApp bots for video producers.',
                'pt' => 'Laboratório de inovação. Chatbots com RAG para cursos e bots agênticos de WhatsApp para produtoras de vídeo.'
            ],
            'sort_order' => 3,
            'is_active' => true,
        ]);

        // Sample Post
        Post::create([
            'title' => ['en' => 'Welcome to my new portfolio', 'pt' => 'Bem-vindo ao meu novo portfólio'],
            'slug' => ['en' => 'welcome', 'pt' => 'bem-vindo'],
            'excerpt' => [
                'en' => 'This is the first post on my new bilingual portfolio built with Laravel and Filament.',
                'pt' => 'Este é o primeiro post do meu novo portfólio bilíngue construído com Laravel e Filament.'
            ],
            'content' => [
                'en' => '<p>I decided to rebuild my portfolio using <strong>Laravel 11</strong> and <strong>Filament 3</strong>. It features a full bilingual system using Spatie Translatable.</p>',
                'pt' => '<p>Decidi reconstruir meu portfólio usando <strong>Laravel 11</strong> e <strong>Filament 3</strong>. Ele possui um sistema bilíngue completo usando Spatie Translatable.</p>'
            ],
            'published_at' => now(),
            'is_active' => true,
        ]);
    }
}
