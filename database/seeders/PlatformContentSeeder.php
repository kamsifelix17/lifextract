<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Episode;
use App\Models\ImpactStory;

class PlatformContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Foundation Humanitarian Programs
        Program::create([
            'title' => 'Support for Vulnerable Elderly Women Traders',
            'slug' => 'support-elderly-women-traders',
            'category' => 'elderly',
            'summary' => 'Providing direct financial grants, food supplies, and regular healthcare checks to elderly women roadside traders in Lagos.',
            'description' => 'Many elderly women in our communities rely on small roadside stalls for their daily survival. This outreach provides direct cash grants, dignified trading equipment, food parcels, and free blood pressure and sugar checkups with qualified healthcare professionals.',
            'target_amount' => 2500000.00,
            'raised_amount' => 1450000.00,
            'is_featured' => true,
        ]);

        Program::create([
            'title' => 'Youth Tech & Vocational Skills Acquisition',
            'slug' => 'youth-skills-acquisition',
            'category' => 'youth',
            'summary' => 'Empowering underprivileged youth with practical digital skills, coding, and craftsmanship for sustainable employment.',
            'description' => 'A 12-week intensive vocational and tech bootcamp designed to take underprivileged youth from zero skills to job-ready professionals with starter toolkits and mentorship.',
            'target_amount' => 5000000.00,
            'raised_amount' => 3200000.00,
            'is_featured' => true,
        ]);

        Program::create([
            'title' => 'Community Health Outreach & Vitals Screening',
            'slug' => 'community-health-outreach',
            'category' => 'health',
            'summary' => 'Free medical checkups, vital screenings, and basic medication for underserved grassroots communities.',
            'description' => 'Partnering with licensed doctors and nurses to provide free health consultations, hypertension screenings, blood sugar tests, and essential drugs in grassroots neighborhoods.',
            'target_amount' => 3000000.00,
            'raised_amount' => 2100000.00,
            'is_featured' => true,
        ]);

        // 2. TalksWithMrDee Podcast Episodes
        Episode::create([
            'episode_number' => 1,
            'title' => 'Talk Am As E Be: Navigating Red Flags & Intentional Dating',
            'slug' => 'navigating-red-flags-intentional-dating',
            'description' => 'A raw, honest conversation exploring the differences between casual dating and dating with purpose. How do you spot red flags early, communicate values clearly, and build a lasting foundation?',
            'youtube_id' => 'M7lc1UVf-VE',
            'guest_name' => 'Mrs. Folake Davies',
            'guest_role' => 'Certified Family Therapist',
            'air_date' => now()->subDays(10),
            'is_published' => true,
        ]);

        Episode::create([
            'episode_number' => 2,
            'title' => 'Healing from Broken Trust: Can a Marriage Truly Recover?',
            'slug' => 'healing-from-broken-trust',
            'description' => 'An insightful episode breaking down the painful reality of betrayal in marriage. We examine practical steps to rebuild trust, the role of professional couples therapy, and how to know when a relationship is worth fighting for.',
            'youtube_id' => 'M7lc1UVf-VE',
            'guest_name' => 'Dr. Emeka Nnamdi',
            'guest_role' => 'Marriage Counselor & Psychologist',
            'air_date' => now()->subDays(3),
            'is_published' => true,
        ]);

        // 3. Real-Life Impact Story
        ImpactStory::create([
            'name' => 'Mama Beatrice (Age 68)',
            'title' => 'From Roadside Hawking to a Stable Kiosk',
            'category' => 'elderly_support',
            'story' => 'With the financial grant and healthcare assistance from LifeExtract Foundation, Mama Beatrice was able to move her small business off the dangerous roadside into a secure kiosk with steady inventory.',
            'is_featured' => true,
        ]);
    }
}