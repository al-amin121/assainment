<?php


namespace App\classes;


class Product
{
    public $blogs =[];
    public function __construct()
    {
        $this->blogs=[
            0=>[
                'id'=>1,
                'name'=>'১০০০ গোলের মাইলফলক ছোঁয়ার বাজি রোনালদো',
                'description'=>'রোনালদো বাজিটি ধরেছেন মূলত এফসি পোর্তোর প্রেসিডেন্ট হোর্হে নুনো পিন্তোর সঙ্গে।',
                'image'=> 'assets/img/1.webp'
            ],
            1=>[
                'id'=>2,
                'name'=>'শ্রীলঙ্কার নতুন অধিনায়ক মেন্ডিস',
                'description'=>'অধিনায়কদের জন্য বিশ্বকাপ যেন চোটে পড়ার মঞ্চ হয়ে উঠেছে! ',
                'image'=> 'assets/img/2.webp'
            ],
            2=>[
                'id'=>3,
                'name'=>'ঢাকায় বিজ্ঞান চলচ্চিত্র উৎসব',
                'description'=>'জাতিসংঘের শিক্ষা, বিজ্ঞান ও সংস্কৃতিবিষয়ক সংস্থা ইউনেসকো',
                'image'=> 'assets/img/3.webp'
            ],
            3=>[
                'id'=>4,
                'name'=>'বিশ্বব্যাংক-আইএমএফের এবারের বার্ষিক বৈঠক থেকে কী পাওয়া গেল',
                'description'=>'বার্ষিক বৈঠকের সময় সাধারণ বৈশ্বিক অর্থনৈতিক পূর্বাভাস প্রকাশ করে আইএমএফ',
                'image'=> 'assets/img/4.webp'
            ],
            4=>[
                'id'=>5,
                'name'=>'গাজায় ইসরায়েলি হামলার প্রতিবাদে লন্ডনে বিক্ষোভ',
                'description'=>'এই বিক্ষোভ সমাবেশে বিভিন্ন ধর্ম ও বর্ণের হাজার হাজার নারী–পুরুষ অংশ নেন',
                'image'=>'assets/img/5.webp'
            ],
            5=>[
                'id'=>6,
                'name'=>'১০০০ গোলের মাইলফলক ছোঁয়ার বাজি রোনালদো',
                'description'=>'রোনালদো বাজিটি ধরেছেন মূলত এফসি পোর্তোর প্রেসিডেন্ট হোর্হে নুনো পিন্তোর সঙ্গে।',
                'image'=> 'assets/img/1.webp'
            ],
            6=>[
                'id'=>7,
                'name'=>'শ্রীলঙ্কার নতুন অধিনায়ক মেন্ডিস',
                'description'=>'অধিনায়কদের জন্য বিশ্বকাপ যেন চোটে পড়ার মঞ্চ হয়ে উঠেছে! ',
                'image'=> 'assets/img/2.webp'
            ],
            7=>[
                'id'=>8,
                'name'=>'ঢাকায় বিজ্ঞান চলচ্চিত্র উৎসব',
                'description'=>'জাতিসংঘের শিক্ষা, বিজ্ঞান ও সংস্কৃতিবিষয়ক সংস্থা ইউনেসকো',
                'image'=> 'assets/img/3.webp'
            ],
            8=>[
                'id'=>9,
                'name'=>'বিশ্বব্যাংক-আইএমএফের এবারের বার্ষিক বৈঠক থেকে কী পাওয়া গেল',
                'description'=>'বার্ষিক বৈঠকের সময় সাধারণ বৈশ্বিক অর্থনৈতিক পূর্বাভাস প্রকাশ করে আইএমএফ',
                'image'=> 'assets/img/4.webp'
            ],
            9=>[
                'id'=>10,
                'name'=>'গাজায় ইসরায়েলি হামলার প্রতিবাদে লন্ডনে বিক্ষোভ',
                'description'=>'এই বিক্ষোভ সমাবেশে বিভিন্ন ধর্ম ও বর্ণের হাজার হাজার নারী–পুরুষ অংশ নেন',
                'image'=>'assets/img/5.webp'
            ],
            10=>[
                'id'=>11,
                'name'=>'শ্রীলঙ্কার নতুন অধিনায়ক মেন্ডিস',
                'description'=>'অধিনায়কদের জন্য বিশ্বকাপ যেন চোটে পড়ার মঞ্চ হয়ে উঠেছে! ',
                'image'=> 'assets/img/2.webp'
            ],
            11=>[
                'id'=>12,
                'name'=>'ঢাকায় বিজ্ঞান চলচ্চিত্র উৎসব',
                'description'=>'জাতিসংঘের শিক্ষা, বিজ্ঞান ও সংস্কৃতিবিষয়ক সংস্থা ইউনেসকো',
                'image'=> 'assets/img/3.webp'
            ]

        ];
    }
    public function getAllBlog()
    {
        return $this->blogs;
    }
}