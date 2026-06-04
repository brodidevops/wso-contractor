<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'General Construction',
                'description' => 'Complete building construction services for residential, commercial, and industrial projects. From foundation to finishing touches, we deliver quality craftsmanship.',
                'content' => '<h3>Our Construction Services Include:</h3>
                    <ul>
                        <li>Residential Building Construction</li>
                        <li>Commercial Office Buildings</li>
                        <li>Industrial Facilities & Warehouses</li>
                        <li>Retail Spaces & Showrooms</li>
                        <li>Foundation & Structural Work</li>
                        <li>Roofing & Waterproofing</li>
                        <li>Doors & Windows Installation</li>
                        <li>Flooring & Ceiling Systems</li>
                    </ul>
                    <p>We use premium materials and modern construction techniques to ensure durability and aesthetic appeal. Our team of experienced engineers and workers ensures every project meets international quality standards.</p>',
                'icon' => 'fa-building',
                'is_active' => true,
                'sort_order' => 1,
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80',
            ],
            [
                'title' => 'Renovation & Remodeling',
                'description' => 'Transform your existing space with our expert renovation services. We handle partial and full home remodels with minimal disruption to your daily life.',
                'content' => '<h3>Renovation Services:</h3>
                    <ul>
                        <li>Kitchen Remodeling</li>
                        <li>Bathroom Renovation</li>
                        <li>Room Additions & Extensions</li>
                        <li>Structural Modifications</li>
                        <li>Facade Upgrades</li>
                        <li>Floor Replacement</li>
                        <li>Paint & Wall Treatments</li>
                        <li>Outdoor & Landscape Renovation</li>
                    </ul>
                    <p>Our renovation experts conduct thorough assessments to understand your needs and provide solutions that maximize space and value while working within your budget.</p>',
                'icon' => 'fa-hammer',
                'is_active' => true,
                'sort_order' => 2,
                'image' => 'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=800&q=80',
            ],
            [
                'title' => 'Interior Design',
                'description' => 'Create stunning, functional spaces with our professional interior design services. From concept development to execution, we bring your vision to life.',
                'content' => '<h3>Interior Design Services:</h3>
                    <ul>
                        <li>Space Planning & Layout</li>
                        <li>Custom Furniture Design</li>
                        <li>Color & Material Consultation</li>
                        <li>Lighting Design & Installation</li>
                        <li>Window Treatment Solutions</li>
                        <li>Artwork & Decor Selection</li>
                        <li>Acoustic Treatment Design</li>
                        <li>Green & Sustainable Interiors</li>
                    </ul>
                    <p>We combine aesthetics with functionality to create spaces that reflect your personality while optimizing comfort and efficiency. Our designers stay updated with the latest trends.</p>',
                'icon' => 'fa-couch',
                'is_active' => true,
                'sort_order' => 3,
                'image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=800&q=80',
            ],
            [
                'title' => 'Electrical Works',
                'description' => 'Professional electrical installation and repair services for residential and commercial properties. Safety and compliance are our top priorities.',
                'content' => '<h3>Electrical Services:</h3>
                    <ul>
                        <li>Complete Wiring Installation</li>
                        <li>Electrical Panel Upgrades</li>
                        <li>Lighting Installation (Indoor & Outdoor)</li>
                        <li>Smart Home Electrical Systems</li>
                        <li>Safety Inspection & Certification</li>
                        <li>Emergency Backup Systems</li>
                        <li>Solar Panel Installation</li>
                        <li>Troubleshooting & Repairs</li>
                    </ul>
                    <p>All our electricians are certified and follow strict safety protocols. We use quality materials and provide warranties on all electrical work.</p>',
                'icon' => 'fa-bolt',
                'is_active' => true,
                'sort_order' => 4,
                'image' => 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800&q=80',
            ],
            [
                'title' => 'Plumbing Services',
                'description' => 'Complete plumbing solutions including installation, repair, and maintenance services. We ensure efficient water systems for your comfort.',
                'content' => '<h3>Plumbing Services:</h3>
                    <ul>
                        <li>Pipe Installation & Replacement</li>
                        <li>Leak Detection & Repair</li>
                        <li>Water Heater Installation</li>
                        <li>Drainage System Setup</li>
                        <li>Sewage System Services</li>
                        <li>Bathroom Fixture Installation</li>
                        <li>Kitchen Plumbing</li>
                        <li>Water Filtration Systems</li>
                    </ul>
                    <p>We use modern equipment for accurate leak detection and efficient repairs. Our plumbing work comes with comprehensive warranties for your peace of mind.</p>',
                'icon' => 'fa-faucet',
                'is_active' => true,
                'sort_order' => 5,
                'image' => 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?w=800&q=80',
            ],
            [
                'title' => 'Painting & Coating',
                'description' => 'Professional interior and exterior painting services with premium materials and expert techniques. Transform your space with our quality finishing.',
                'content' => '<h3>Painting Services:</h3>
                    <ul>
                        <li>Interior Painting</li>
                        <li>Exterior Coating & Waterproofing</li>
                        <li>Wallpaper Installation</li>
                        <li>Texture & Decorative Finishes</li>
                        <li>Wood Staining & Varnishing</li>
                        <li>Metal Surface Coating</li>
                        <li>Graffiti Removal & Treatment</li>
                        <li>Color Consultation Services</li>
                    </ul>
                    <p>We use premium paints from trusted brands and professional techniques to ensure flawless results. Our team handles everything from surface preparation to final touches.</p>',
                'icon' => 'fa-paint-roller',
                'is_active' => true,
                'sort_order' => 6,
                'image' => 'https://images.unsplash.com/photo-1562259949-e8e2049d8d74?w=800&q=80',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}