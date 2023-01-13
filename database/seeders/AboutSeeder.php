<?php

namespace Database\Seeders;
use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = "We specialise in providing a wide range of services to students aspiring to study in Australia from counselling them in choosing the right institution and helping with their visa application to welcoming them in Australia and helping them settle with the Australian life.
                        Since 2003, our team of registered migration agents, qualified education counsellors, career counsellors, solicitors and taxation experts have provided end-to-end services to more than 40,000 and counting international students and helped them materialise their Australian dreams. We don’t sell dreams, we help students in making better choices and guide them towards materialising their goals by offering viable study and career counselling.";

        $about = About::create([
            'site_name' => 'mpower',
            'meta_title' => 'mpower Consultancy',
            'meta_description' => 'mpower Consultancy Description',
            'meta_tags' => 'mpower, Manpower, Education, Consultancy, Description',
            'opening_hours' => 'Mon - Sat 8.00 - 18.00. Sunday CLOSED',
            'site_logo' => '',
            'address' => 'Kathmandu Nepal',
            'address_one' => 'London UK',
            'email_one' => 'mpower@hotmail.com',
            'email_two' => 'mpower@gmail.com',
            'contact_number_one' => '0987654321',
            'contact_number_two' => '0987654321',
            'contact_number_three' => '0987654321',
            'facebook' => 'fb.com/mpower',
            'twitter' => 'twitter.com/mpower',
            'instagram' => 'instagram.com/mpower',
            'site_description' => $description,
            'site_mission' => 'Every international student is entitled to genuine advice for pursuing higher studies and stay in Australia. Our mission is to provide honest information and support in areas beyond education enabling them to make better decisions to achieve their academic and professional goals.',
            'site_vision' => 'Our vision is creating a transparent and trustworthy environment wherein our clients will let us guide them through their journey to and in Australia.',
            'site_why_us' => 'Why us content goes here..',
            'site_policy' => 'Site Policy goes here..',
            'site_image' => ''
        ]);
    }
}
