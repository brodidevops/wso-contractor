<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Sudirman Office Tower',
                'slug' => 'sudirman-office-tower',
                'description' => 'A 15-story commercial office building featuring modern architecture, sustainable design, and premium finishing. The project showcases our expertise in large-scale commercial construction with attention to detail and quality craftsmanship.',
                'category' => 'Construction',
                'client' => 'PT Sudirman Towers Indonesia',
                'completed_date' => '2024-03-15',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 1,
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80',
            ],
            [
                'title' => 'Kemang Luxury Villa',
                'slug' => 'kemang-villa-remodel',
                'description' => 'Complete renovation and interior design of a luxury villa in Kemang. The project included structural upgrades, modern kitchen design, spa-like bathrooms, and smart home integration while preserving the classic charm.',
                'category' => 'Renovation',
                'client' => 'Private Residence - Mr. Wijaya',
                'completed_date' => '2024-01-20',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 2,
                'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80',
            ],
            [
                'title' => 'SCBD Restaurant Complex',
                'slug' => 'scbd-restaurant',
                'description' => 'Modern restaurant interior design for a multi-unit food court in SCBD area. Features include custom lighting design, acoustic treatment, modern furniture, and brand-consistent aesthetics.',
                'category' => 'Interior',
                'client' => 'PT Kuliner Nusantara',
                'completed_date' => '2024-02-10',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 3,
                'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80',
            ],
            [
                'title' => 'Thamrin Office Renovation',
                'slug' => 'thamrin-office-renovation',
                'description' => 'Complete office refurbishment including electrical rewiring, AC system upgrade, partition walls, and modern meeting rooms. The renovation was completed while maintaining business operations.',
                'category' => 'Renovation',
                'client' => 'CV Teknologi Indonesia',
                'completed_date' => '2023-11-25',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 4,
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
            ],
            [
                'title' => 'Menteng Classic Residence',
                'slug' => 'menteng-classic-residence',
                'description' => 'A perfect blend of traditional Indonesian aesthetics with modern comfort. This project showcases how we preserve heritage elements while incorporating contemporary amenities and smart home technology.',
                'category' => 'Interior',
                'client' => 'Private Residence - Mrs. Santoso',
                'completed_date' => '2023-10-15',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 5,
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80',
            ],
            [
                'title' => 'Cikarang Industrial Warehouse',
                'slug' => 'cikarang-warehouse',
                'description' => 'Construction of a 5,000 m² logistics facility including office space, loading docks, fire suppression system, and sustainable drainage. Built to meet modern logistics standards.',
                'category' => 'Construction',
                'client' => 'PT Logistik Express Indonesia',
                'completed_date' => '2023-09-30',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 6,
                'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80',
            ],
            [
                'title' => 'Bali Resort Spa',
                'slug' => 'bali-resort-spa',
                'description' => 'Luxury spa and wellness center featuring traditional Balinese design elements, natural materials, infinity pool, and meditation gardens. A tranquil retreat built with sustainable materials.',
                'category' => 'Interior',
                'client' => 'PT Bali Serenity Resorts',
                'completed_date' => '2023-08-20',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 7,
                'image' => 'https://images.unsplash.com/photo-1540541406296-279079cfa3fc?w=800&q=80',
            ],
            [
                'title' => 'BSD Smart Home Residence',
                'slug' => 'bsd-smart-home',
                'description' => 'Modern smart home construction featuring home automation, solar panels, rainwater harvesting, and energy-efficient systems. A showcase of sustainable and technological innovation.',
                'category' => 'Construction',
                'client' => 'Private Residence - Mr. Hartono',
                'completed_date' => '2023-07-15',
                'url' => '#',
                'is_active' => true,
                'sort_order' => 8,
                'image' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=800&q=80',
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}