<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => '5 Essential Tips for Planning Your Home Renovation',
                'slug' => 'tips-for-home-renovation',
                'excerpt' => 'Discover the key factors to consider before starting your home renovation project to ensure a smooth process and successful outcome.',
                'content' => '<p>Planning a home renovation can be exciting yet overwhelming. Whether you\'re updating a single room or undertaking a whole-house remodel, proper planning is crucial for success. Here are five essential tips to help you navigate your renovation journey.</p>

                <h3>1. Set a Realistic Budget</h3>
                <p>Before you start any renovation work, establish a clear budget that includes a 10-20% contingency for unexpected costs. Research material costs, labor rates, and get multiple quotes from contractors. Remember to factor in temporary accommodation costs if needed.</p>

                <h3>2. Define Your Goals and Priorities</h3>
                <p>Create a detailed list of what you want to achieve with your renovation. Prioritize must-haves versus nice-to-haves. This will help you make decisions when budget constraints arise and ensure the most important aspects of your project are completed.</p>

                <h3>3. Hire the Right Professionals</h3>
                <p>Research and interview multiple contractors before making your choice. Check references, verify licenses and insurance, and review their portfolio of completed projects. A good contractor will communicate clearly and provide detailed written estimates.</p>

                <h3>4. Plan for the Unexpected</h3>
                <p>Renovations often uncover hidden issues like water damage, outdated wiring, or structural problems. Build flexibility into your timeline and budget to accommodate these discoveries. Having a contingency plan will reduce stress when surprises arise.</p>

                <h3>5. Consider the Long-Term Value</h3>
                <p>While it\'s important to create a space you love, also think about resale value. Choose timeless designs over trendy ones, invest in quality materials, and focus on improvements that offer the best return on investment like kitchens and bathrooms.</p>

                <p>By following these tips, you\'ll be better prepared to handle the challenges of home renovation and create a space that meets your needs and exceeds your expectations.</p>',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80',
                'category' => 'Tips',
                'author' => 'Sarah Johnson',
                'published_at' => '2026-05-08',
                'is_featured' => true,
                'is_active' => true,
                'view_count' => 245,
                'meta_title' => '5 Essential Tips for Planning Your Home Renovation | WebSIAPOnline',
                'meta_description' => 'Learn the key factors to consider before starting your home renovation project. Expert tips for budget planning, contractor selection, and more.',
            ],
            [
                'title' => 'Construction Safety Standards You Must Know',
                'slug' => 'construction-safety-standards',
                'excerpt' => 'A comprehensive guide to essential safety standards that protect workers and ensure quality construction in every project.',
                'content' => '<p>Construction safety is paramount in every building project. Understanding and implementing proper safety standards not only protects workers but also ensures project quality and compliance with regulations.</p>

                <h3>Personal Protective Equipment (PPE)</h3>
                <p>All workers must wear appropriate PPE including hard hats, safety glasses, steel-toed boots, and high-visibility vests. Depending on the task, additional equipment like gloves, ear protection, and respiratory masks may be required.</p>

                <h3>Fall Protection Systems</h3>
                <p>Falls are the leading cause of construction fatalities. Proper fall protection includes guardrails, safety nets, and personal fall arrest systems. Any work above 6 feet requires fall protection measures.</p>

                <h3>Scaffolding Safety</h3>
                <p>Scaffolds must be erected by qualified personnel and inspected daily before use. Ensure proper planking, guardrails, and access ladders are in place. Never exceed the scaffold\'s load capacity.</p>

                <h3>Electrical Safety</h3>
                <p>All electrical work must be performed by licensed electricians. Use ground fault circuit interrupters (GFCIs) for temporary power. Keep electrical equipment away from water and inspect cords regularly for damage.</p>

                <h3>Equipment Operation</h3>
                <p>Only trained and certified operators should use heavy machinery. Conduct pre-operation inspections, maintain clear communication with ground personnel, and establish exclusion zones around operating equipment.</p>

                <h3>Emergency Preparedness</h3>
                <p>Every site should have a comprehensive emergency action plan including evacuation routes, first aid stations, and emergency contact information. Conduct regular safety drills and training sessions.</p>

                <p>Implementing these safety standards creates a culture of safety that protects everyone on the construction site and contributes to project success.</p>',
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80',
                'category' => 'Safety',
                'author' => 'Michael Chen',
                'published_at' => '2026-05-05',
                'is_featured' => true,
                'is_active' => true,
                'view_count' => 189,
                'meta_title' => 'Construction Safety Standards You Must Know | WebSIAPOnline',
                'meta_description' => 'Essential construction safety standards including PPE requirements, fall protection, scaffolding safety, and emergency preparedness.'
            ],
            [
                'title' => 'Modern Architectural Trends in 2026',
                'slug' => 'modern-architectural-trends',
                'excerpt' => 'Explore the latest architectural trends shaping modern construction and building design this year, from sustainability to smart technology.',
                'content' => '<p>The architectural landscape continues to evolve with new technologies, materials, and design philosophies. Here are the key trends defining modern architecture in 2026.</p>

                <h3>Sustainable and Green Building</h3>
                <p>Sustainability is no longer optional—it\'s essential. Modern buildings incorporate solar panels, green roofs, rainwater harvesting, and energy-efficient systems. Materials are chosen for their environmental impact and recyclability.</p>

                <h3>Biophilic Design</h3>
                <p>Bringing nature indoors through large windows, indoor gardens, natural materials, and organic shapes. This trend recognizes the human need for connection with nature and its positive impact on wellbeing and productivity.</p>

                <h3>Smart Home Integration</h3>
                <p>Buildings are becoming increasingly intelligent with IoT devices, automated climate control, smart lighting, and integrated security systems. These technologies enhance comfort while optimizing energy usage.</p>

                <h3>Flexible and Multifunctional Spaces</h3>
                <p>The rise of remote work has increased demand for adaptable spaces. Modern designs feature movable walls, convertible rooms, and multipurpose areas that can transform based on changing needs.</p>

                <h3>Minimalist Aesthetics</h3>
                <p>Clean lines, open floor plans, and uncluttered spaces continue to dominate. The focus is on quality over quantity, with carefully selected materials and finishes that make a statement through simplicity.</p>

                <h3>Mixed-Use Developments</h3>
                <p>Combining residential, commercial, and recreational spaces in single developments creates vibrant, walkable communities. This trend reduces commute times and fosters social interaction.</p>

                <h3>Adaptive Reuse</h3>
                <p>Transforming old industrial buildings, warehouses, and historic structures into modern spaces preserves architectural heritage while meeting contemporary needs. This approach is both sustainable and culturally significant.</p>

                <p>These trends reflect a shift toward more sustainable, flexible, and human-centered design that will shape the built environment for years to come.</p>',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80',
                'category' => 'Design',
                'author' => 'Amanda Rodriguez',
                'published_at' => '2026-05-01',
      'is_featured' => false,
                'is_active' => true,
                'view_count' => 312,
                'meta_title' => 'Modern Architectural Trends in 2026 | WebSIAPOnline',
                'meta_description' => 'Discover the latest architectural trends including sustainable building, biophilic design, smart home integration, and flexible spaces.',
            ],
            [
                'title' => 'How to Choose the Right Building Materials',
                'slug' => 'choosing-building-materials',
                'excerpt' => 'A practical guide to selecting the best building materials for your construction project based on durability, cost, and sustainability.',
                'content' => '<p>Selecting the right building materials is crucial for the success, longevity, and cost-effectiveness of your construction project. This guide will help you make informed decisions.</p>

                <h3>Consider Your Climate</h3>
                <p>Different materials perform better in different climates. In humid areas, choose materials resistant to moisture and mold. In cold climates, prioritize insulation properties. Coastal areas require corrosion-resistant materials.</p>

                <h3>Evaluate Durability and</h3>
                <p>While some materials may have higher upfront costs, they often require less maintenance and last longer. Consider the total lifecycle cost rather than just initial expenses. Quality materials can save money in the long run.</p>

                <h3>Assess Environmental Impact</h3>
                <p>Choose sustainable materials with low environmental footprints. Look for recycled content, renewable resources, and locally sourced options. Consider the energy required for production and transportation.</p>

                <h3>Balance Cost and Quality</h3>
                <p>Create a budget that allows for quality materials in critical areas like foundations and roofing, while finding cost-effective options for less crucial elements. Don\'t compromise on structural integrity.</p>

                <h3>Check Building Codes and Regulations</h3>
                <p>Ensure all materials meet local building codes and fire safety standards. Some areas have specific requirements for earthquake resistance, wind loads, or energy efficiency.</p>

                <h3>Consider Aesthetics</h3>
                <p>Materials should align with your design vi complement the surrounding environment. Think about texture, color, and how materials will age over time.</p>

                <p>By carefully evaluating these factors, you can select materials that meet your project\'s functional requirements while staying within budget and supporting your sustainability goals.</p>',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&q=80',
                'category' => 'Materials',
                'author' => 'David Thompson',
                'published_at' => '2026-04-28',
                'is_featured' => false,
                'is_active' => true,
                'view_count' => 156,
                'meta_title' => 'How to Choose the Right Building Materials | WebSIAPOnline',
                'meta_description' => 'Learn how to select the best building materials for your project based on climate, durability, sustainability, and budget.',
            ],
            [
                'title' => 'The Importance of Proper Foundation Work',
                'slug' => 'importance-of-foundation-work',
                'excerpt' => 'Understanding why foundation work is the most critical phase of any construction project and what can go wrong if done improperly.',
                'content' => '<p>The foundation is literally the base upon which your entire building rests. Proper foundation work is essential for structural integrity, longevity, and safety of any construction project.</p>

                <h3>Why Foundations Matter</h3>
                <p>A solid foundation distributes the building\'s weight evenly, prevents settling, and protects against moisture damage. It also provides stability against environmental forces like earthquakes and floods.</p>

                <h3>Types of Foundations</h3>
                <p>Different projects require different foundation types: slab-on-grade for simple structures, crawl space foundations for areas with moisture concerns, and deep foundations for tall buildings or unstable soil.</p>

                <h3>Soil Analysis is Critical</h3>
                <p>Before any foundation work begins, conduct thorough soil testing. Soil composition, bearing capacity, and water table levels all affect foundation design. Skipping this step can lead to costly problems.</p>

                <h3>Common Foundation Problems</h3>
                <p>Cracks, settling, water infiltration, and heaving are signs of foundation issues. These probltem from poor drainage, inadequate reinforcement, or improper soil preparation during construction.</p>

                <h3>Waterproofing and Drainage</h3>
                <p>Proper waterproofing membranes and drainage systems protect foundations from water damage. Install perimeter drains, ensure proper grading, and use quality waterproofing materials.</p>

                <h3>Quality Control Measures</h3>
                <p>Regular inspections during foundation work ensure compliance with engineering specifications. Check concrete strength, reinforcement placement, and curing procedures. Document everything.</p>

                <p>Investing in quality foundation work may cost more initially, but it prevents expensive repairs and ensures your building stands strong for decades to come.</p>',
                'image' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=800&q=80',
                'category' => 'Construction',
                'author' => 'Robert Martinez',
                'published_at' => '2026-04-25',
                'is_featured' => false,
                'is_active' => true,
                'view_count' => 203,
                'meta_title' => 'The Importance of Proper Foundation Work | WebSIAPOnline',
                'meta_description' => 'Learn why foundation work is critical for construction projects and how to ensure proper foundation installation.',
            ],
            [
                'title' => 'Smart Home Technology for New Constructions',
                'slug' => 'smart-home-technology',
                'excerpt' => 'Discover the latest smart home technologies that should be integrated into new construction projects for modern living.',
                'content' => '<p>Smart home technology is transforming how we live, offering convenience, security, and energy efficiency. Here\'s what to consider when building a smart home from the ground up.</p>

                <h3>Infrastructure Planning</h3>
                <p>Start with robust networking infrastructure including Cat6 ethernet cables, strong Wi-Fi coverage, and dedicated circuits for smart devices. Plan for future upgrades by installing conduits for easy cable additions.</p>

                <h3>Smart Lighting Systems</h3>
                <p>Automated lighting adjusts based on time of day, occupancy, and natural light levels. Use smart switches, dimmers, and color-changing bulbs to create customizable lightor different activities.</p>

                <h3>Climate Control</h3>
                <p>Smart thermostats learn your preferences and optimize heating and cooling for comfort and efficiency. Zone-based systems allow different temperatures in different areas, reducing energy waste.</p>

                <h3>Security and Access Control</h3>
                <p>Integrate smart locks, video doorbells, security cameras, and alarm systems. Receive real-time alerts and control access remotely. Facial recognition and biometric systems add extra security layers.</p>

                <h3>Energy Management</h3>
                <p>Monitor and control energy usage with smart meters and appliances. Solar panel systems with battery storage can be managed through apps, optimizing energy production and consumption.</p>

                <h3>Entertainment Systems</h3>
                <p>Whole-home audio, automated window treatments, and integrated entertainment systems create immersive experiences. Voice control makes operation seamless and intuitive.</p>

                <h3>Future-Proofing</h3>
                <p>Choose systems with open standards and regular updates. Ensure compatibility between devices and platforms. Plan fodability as technology evolves.</p>

                <p>Integrating smart technology during construction is more cost-effective than retrofitting and ensures seamless integration throughout your home.</p>',
                'image' => 'https://images.unsplash.com/photo-1558002038-1055907df827?w=800&q=80',
                'category' => 'Technology',
                'author' => 'Jennifer Lee',
                'published_at' => '2026-04-20',
                'is_featured' => false,
                'is_active' => true,
                'view_count' => 278,
                'meta_title' => 'Smart Home Technology for New Constructions | WebSIAPOnline',
                'meta_description' => 'Explore smart home technologies to integrate into new construction including lighting, climate control, security, and energy management.',
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
