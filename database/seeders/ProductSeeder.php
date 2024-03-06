<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url1 = Storage::url('gel.jpg');
        $url2 = Storage::url('nanospray.jpg');
        $url3 = Storage::url('mask.jpg');
        $url4 = Storage::url('exscrub.jpg');
        $url5 = Storage::url('faceroller.jpg');
        $url6 = Storage::url('perfume.jpg');
        $url7 = Storage::url('settingspray.jpg');
        $url8 = Storage::url('stickmask.png');
        $url9 = Storage::url('sunblock.jpg');
        $url10 = Storage::url('sunspray.jpg');
        DB::table('products')->insert([

            [
                'name'=>'Aloe Vera Gel',
                "price"=>"4",
                "description"=>"300ml Large-Capacity Moisturizing Hydrating Acne Gel Mild Oil Control Care Aloe Vera Gel",
                "image"=> $url1
            ],
            [
                'name'=>'Nano Spray',
                "price"=>"4",
                "description"=>"Moisturizer Nano Sprayer Convenient Atomization USB Rechargeable Humidifier Face Steame",
                "image"=> $url2
            ],
            [
                'name'=>'Moisturizing Mask',
                "price"=>"1",
                "description"=>"BIOAQUA Moisturizing Mask Skin Care Depth Whitening Face Mask Hydration Oil Control Facial Mask",
                "image"=> $url3
            ],
            [
                'name'=>'Facial Scrub',
                "price"=>"11",
                "description"=>"Images Advanced Fruit Acid Exfoliation Facial Scrub Deep Cleansing Peeling Gel Remove Dead Skin Blackhead",
                "image"=> $url4
            ],
            [
                'name'=>'Face Roller Massage',
                "price"=>"11",
                "description"=>"Pink Scraping Board Roller Set Face Neck Body Facial Scraping Board Massage",
                "image"=> $url5
            ],
            [
                'name'=>'Perfume',
                "price"=>"7",
                "description"=>"PINKPOINT Flower Fragrance Long Lasting Perfume Spray Body Fragrance Perfume",
                "image"=> $url6
            ],
            [
                'name'=>'Setting Spray',
                "price"=>"7",
                "description"=>"Spray Fixing Long lasting Spray Make Up Setting Spray Moisturizer all skin types Make up Finishing Spray",
                "image"=> $url7
            ],
            [
                'name'=>'Stick Mud Mask',
                "price"=>"3",
                "description"=>"Green Tea Stick Cleansing Mud Mask Removal Blackheads Pore Mask Oil Balance Mask",
                "image"=> $url8
            ],
            [
                'name'=>'Sunblock',
                "price"=>"9",
                "description"=>"3W Clinic Intensive UV Sunblock Sun Cream Collagen Sunscreen SPF50 PA+++ 70ml - sunblock",
                "image"=> $url9
            ],
            [
                'name'=>'Sunscreen Spray',
                "price"=>"2",
                "description"=>"LIFUSHA Sunscreen Spray Waterproof Moisturizing Sunscreen Isolation Spray Sunscreen UV Protection Spray Sunblock",
                "image"=> $url10
            ],
        ]);
    }
}
