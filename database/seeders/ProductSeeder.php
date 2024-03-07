<?php

namespace Database\Seeders;

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
                'product_name' => 'Aloe Vera Gel',
                "product_description" => "300ml Large-Capacity Moisturizing Hydrating Acne Gel Mild Oil Control Care Aloe Vera Gel",
                "photo" => $url1,
                "price" => "4",
            ],
            [
                'product_name' => 'Nano Spray',
                "price" => "4",
                "product_description" => "Moisturizer Nano Sprayer Convenient Atomization USB Rechargeable Humidifier Face Steame",
                "photo" => $url2
            ],
            [
                'product_name' => 'Moisturizing Mask',
                "price" => "1",
                "product_description" => "BIOAQUA Moisturizing Mask Skin Care Depth Whitening Face Mask Hydration Oil Control Facial Mask",
                "photo" => $url3
            ],
            [
                'product_name' => 'Facial Scrub',
                "price" => "11",
                "product_description" => "photos Advanced Fruit Acid Exfoliation Facial Scrub Deep Cleansing Peeling Gel Remove Dead Skin Blackhead",
                "photo" => $url4
            ],
            [
                'product_name' => 'Face Roller Massage',
                "price" => "11",
                "product_description" => "Pink Scraping Board Roller Set Face Neck Body Facial Scraping Board Massage",
                "photo" => $url5
            ],
            [
                'product_name' => 'Perfume',
                "price" => "7",
                "product_description" => "PINKPOINT Flower Fragrance Long Lasting Perfume Spray Body Fragrance Perfume",
                "photo" => $url6
            ],
            [
                'product_name' => 'Setting Spray',
                "price" => "7",
                "product_description" => "Spray Fixing Long lasting Spray Make Up Setting Spray Moisturizer all skin types Make up Finishing Spray",
                "photo" => $url7
            ],
            [
                'product_name' => 'Stick Mud Mask',
                "price" => "3",
                "product_description" => "Green Tea Stick Cleansing Mud Mask Removal Blackheads Pore Mask Oil Balance Mask",
                "photo" => $url8
            ],
            [
                'product_name' => 'Sunblock',
                "price" => "9",
                "product_description" => "3W Clinic Intensive UV Sunblock Sun Cream Collagen Sunscreen SPF50 PA+++ 70ml - sunblock",
                "photo" => $url9
            ],
            [
                'product_name' => 'Sunscreen Spray',
                "price" => "2",
                "product_description" => "LIFUSHA Sunscreen Spray Waterproof Moisturizing Sunscreen Isolation Spray Sunscreen UV Protection Spray Sunblock",
                "photo" => $url10
            ],
        ]);
    }
}
