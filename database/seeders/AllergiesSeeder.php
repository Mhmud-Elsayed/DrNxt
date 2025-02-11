<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AllergiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $allergies = [
            [
                'name'            => 'Balsam of Peru allergy',
                'ar_name'         => 'حساسية بلسم بيرو',
                'description'     => 'An allergic reaction to Balsam of Peru, a resin found in perfumes, cosmetics, and some foods.',
                'ar_description'  => 'رد فعل تحسسي تجاه بلسم بيرو، وهو راتنج موجود في العطور ومستحضرات التجميل وبعض الأطعمة.'
            ],
            [
                'name'            => 'Buckwheat allergy',
                'ar_name'         => 'حساسية الحنطة السوداء',
                'description'     => 'An immune reaction to buckwheat, a common gluten-free grain alternative.',
                'ar_description'  => 'رد فعل مناعي تجاه الحنطة السوداء، وهي بديل شائع خالٍ من الغلوتين.'
            ],
            [
                'name'            => 'Celery allergy',
                'ar_name'         => 'حساسية الكرفس',
                'description'     => 'An allergic response to celery, which can cause severe reactions in some individuals.',
                'ar_description'  => 'استجابة تحسسية للكرفس، وقد تسبب ردود فعل شديدة لدى بعض الأشخاص.'
            ],
            [
                'name'            => 'Egg allergy',
                'ar_name'         => 'حساسية البيض',
                'description'     => 'An immune response to proteins found in eggs, especially in children.',
                'ar_description'  => 'استجابة مناعية لبروتينات موجودة في البيض، خاصة عند الأطفال.'
            ],
            [
                'name'            => 'Fish allergy',
                'ar_name'         => 'حساسية السمك',
                'description'     => 'An allergic reaction to proteins found in fish, which can be life-threatening.',
                'ar_description'  => 'رد فعل تحسسي تجاه البروتينات الموجودة في الأسماك، وقد يكون مهدداً للحياة.'
            ],
            [
                'name'            => 'Fruit allergy',
                'ar_name'         => 'حساسية الفواكه',
                'description'     => 'An allergic reaction to certain fruits, often linked to pollen allergies.',
                'ar_description'  => 'رد فعل تحسسي تجاه بعض الفواكه، ويرتبط غالباً بحساسية حبوب اللقاح.'
            ],
            [
                'name'            => 'Garlic allergy',
                'ar_name'         => 'حساسية الثوم',
                'description'     => 'An immune reaction to garlic, causing skin rashes, digestive issues, or breathing difficulties.',
                'ar_description'  => 'رد فعل مناعي تجاه الثوم، يسبب طفحاً جلدياً أو مشاكل هضمية أو صعوبة في التنفس.'
            ],
            [
                'name'            => 'Oats allergy',
                'ar_name'         => 'حساسية الشوفان',
                'description'     => 'A reaction to oat proteins, sometimes associated with gluten sensitivity.',
                'ar_description'  => 'رد فعل تجاه بروتينات الشوفان، ويرتبط أحياناً بحساسية الغلوتين.'
            ],
            [
                'name'            => 'Maize allergy',
                'ar_name'         => 'حساسية الذرة',
                'description'     => 'An allergic reaction to corn proteins, leading to digestive or respiratory symptoms.',
                'ar_description'  => 'رد فعل تحسسي تجاه بروتينات الذرة، مما يسبب أعراضاً هضمية أو تنفسية.'
            ],
            [
                'name'            => 'Milk allergy',
                'ar_name'         => 'حساسية الحليب',
                'description'     => 'A reaction to milk proteins, different from lactose intolerance.',
                'ar_description'  => 'رد فعل تجاه بروتينات الحليب، وهو يختلف عن عدم تحمل اللاكتوز.'
            ],
            [
                'name'            => 'Mustard allergy',
                'ar_name'         => 'حساسية الخردل',
                'description'     => 'A severe allergy to mustard seeds and products containing mustard.',
                'ar_description'  => 'حساسية شديدة تجاه بذور الخردل والمنتجات التي تحتوي عليه.'
            ],
            [
                'name'            => 'Peanut allergy',
                'ar_name'         => 'حساسية الفول السوداني',
                'description'     => 'A serious, potentially fatal reaction to peanuts.',
                'ar_description'  => 'رد فعل خطير قد يكون مميتاً تجاه الفول السوداني.'
            ],
            [
                'name'            => 'Poultry Meat allergy',
                'ar_name'         => 'حساسية لحوم الدواجن',
                'description'     => 'An allergy to chicken, turkey, or other poultry meats.',
                'ar_description'  => 'حساسية تجاه لحوم الدجاج أو الديك الرومي أو غيرها من لحوم الدواجن.'
            ],
            [
                'name'            => 'Rice allergy',
                'ar_name'         => 'حساسية الأرز',
                'description'     => 'An allergic reaction to rice, more common in Asian populations.',
                'ar_description'  => 'رد فعل تحسسي تجاه الأرز، وهو أكثر شيوعاً في بعض الشعوب الآسيوية.'
            ],
            [
                'name'            => 'Sesame allergy',
                'ar_name'         => 'حساسية السمسم',
                'description'     => 'A severe allergy to sesame seeds and products containing sesame oil.',
                'ar_description'  => 'حساسية شديدة تجاه بذور السمسم والمنتجات التي تحتوي على زيت السمسم.'
            ],
            [
                'name'            => 'Shellfish allergy',
                'ar_name'         => 'حساسية المحار',
                'description'     => 'A potentially life-threatening reaction to shrimp, crab, and other shellfish.',
                'ar_description'  => 'رد فعل قد يكون مميتاً تجاه الروبيان وسرطان البحر وغيرها من المحار.'
            ],
            [
                'name'            => 'Soy allergy',
                'ar_name'         => 'حساسية الصويا',
                'description'     => 'An immune response to soy proteins found in soy-based foods.',
                'ar_description'  => 'استجابة مناعية تجاه بروتينات الصويا الموجودة في الأطعمة المحتوية على الصويا.'
            ],
            [
                'name'            => 'Sulfites allergy',
                'ar_name'         => 'حساسية الكبريتات',
                'description'     => 'A reaction to sulfite preservatives used in foods and beverages.',
                'ar_description'  => 'رد فعل تجاه المواد الحافظة المحتوية على الكبريتات في الأطعمة والمشروبات.'
            ],
            [
                'name'            => 'Tartrazine (E102) allergy',
                'ar_name'         => 'حساسية التارترازين (E102)',
                'description'     => 'An allergy to a synthetic yellow food dye (E102).',
                'ar_description'  => 'حساسية تجاه صبغة طعام صفراء صناعية (E102).'
            ],
            [
                'name'            => 'Tree nut allergy',
                'ar_name'         => 'حساسية مكسرات الأشجار',
                'description'     => 'A severe reaction to nuts such as almonds, walnuts, and cashews.',
                'ar_description'  => 'رد فعل تحسسي شديد تجاه المكسرات مثل اللوز والجوز والكاجو.'
            ],
            [
                'name'            => 'Wheat allergy',
                'ar_name'         => 'حساسية القمح',
                'description'     => 'An immune response to wheat proteins, different from celiac disease.',
                'ar_description'  => 'استجابة مناعية تجاه بروتينات القمح، وهو يختلف عن مرض السيلياك.'
            ],
            [
                'name'            => 'Tetracycline allergy',
                'ar_name'         => 'حساسية التتراسيكلين',
                'description'     => 'An allergic reaction to tetracycline antibiotics.',
                'ar_description'  => 'حساسية تجاه المضادات الحيوية من نوع التتراسيكلين.'
            ],
            [
                'name'            => 'Dilantin allergy',
                'ar_name'         => 'حساسية ديالانتين',
                'description'     => 'An allergic reaction to the anticonvulsant drug Dilantin.',
                'ar_description'  => 'حساسية تجاه دواء ديالانتين المضاد للتشنجات.'
            ],
            [
                'name'            => 'Tegretol allergy',
                'ar_name'         => 'حساسية تيجريتول',
                'description'     => 'An allergy to the epilepsy medication Tegretol.',
                'ar_description'  => 'حساسية تجاه دواء تيجريتول المستخدم لعلاج الصرع.'
            ],
            [
                'name'            => 'Penicillin allergy',
                'ar_name'         => 'حساسية البنسلين',
                'description'     => 'A common drug allergy to penicillin antibiotics.',
                'ar_description'  => 'حساسية شائعة تجاه المضادات الحيوية من نوع البنسلين.'
            ],
            [
                'name'            => 'Cephalosporins allergy',
                'ar_name'         => 'حساسية السيفالوسبورينات',
                'description'     => 'An allergy to cephalosporin antibiotics, related to penicillin.',
                'ar_description'  => 'حساسية تجاه مضادات السيفالوسبورين الحيوية، وهي مرتبطة بالبنسلين.'
            ],
            [
                'name'            => 'Sulfonamides allergy',
                'ar_name'         => 'حساسية السلفوناميدات',
                'description'     => 'A reaction to sulfa drugs, used as antibiotics and diuretics.',
                'ar_description'  => 'رد فعل تحسسي تجاه أدوية السلفا المستخدمة كمضادات حيوية ومدرات للبول.'
            ],
            [
                'name'            => 'Non-steroidal anti-inflammatories allergy',
                'ar_name'         => 'حساسية مضادات الالتهاب غير الستيرويدية',
                'description'     => 'A reaction to pain relievers like ibuprofen and aspirin.',
                'ar_description'  => 'حساسية تجاه مسكنات الألم مثل الإيبوبروفين والأسبرين.'
            ],
            [
                'name'            => 'Intravenous contrast dye allergy',
                'ar_name'         => 'حساسية صبغة التباين الوريدية',
                'description'     => 'A reaction to contrast dyes used in medical imaging.',
                'ar_description'  => 'حساسية تجاه صبغات التباين المستخدمة في التصوير الطبي.'
            ],
            [
                'name'            => 'Local anesthetics allergy',
                'ar_name'         => 'حساسية التخدير الموضعي',
                'description'     => 'An allergy to numbing medications like lidocaine.',
                'ar_description'  => 'حساسية تجاه أدوية التخدير الموضعي مثل الليدوكايين.'
            ],
            [
                'name'            => 'Pollen allergy',
                'ar_name'         => 'حساسية حبوب اللقاح',
                'description'     => 'A common seasonal allergy to pollen from trees and flowers.',
                'ar_description'  => 'حساسية موسمية شائعة تجاه حبوب اللقاح من الأشجار والزهور.'
            ],
            [
                'name'            => 'Cat allergy',
                'ar_name'         => 'حساسية القطط',
                'description'     => 'An immune reaction to cat dander and saliva.',
                'ar_description'  => 'رد فعل مناعي تجاه وبر القطط ولعابها.'
            ],
            [
                'name'            => 'Dog allergy',
                'ar_name'         => 'حساسية الكلاب',
                'description'     => 'A reaction to dog dander and proteins in saliva.',
                'ar_description'  => 'رد فعل تحسسي تجاه وبر الكلاب والبروتينات في لعابها.'
            ],
            [
                'name'            => 'Insect sting allergy',
                'ar_name'         => 'حساسية لدغات الحشرات',
                'description'     => 'A severe allergic reaction to bee or wasp stings.',
                'ar_description'  => 'رد فعل تحسسي شديد تجاه لسعات النحل أو الدبابير.'
            ],
            [
                'name'            => 'Mold allergy',
                'ar_name'         => 'حساسية العفن',
                'description'     => 'An allergy to airborne mold spores.',
                'ar_description'  => 'حساسية تجاه أبواغ العفن المحمولة في الهواء.'
            ],
            [
                'name'            => 'Perfume allergy',
                'ar_name'         => 'حساسية العطور',
                'description'     => 'A reaction to fragrances found in perfumes and scented products.',
                'ar_description'  => 'رد فعل تحسسي تجاه الروائح في العطور والمنتجات المعطرة.'
            ],
            [
                'name'            => 'Cosmetics allergy',
                'ar_name'         => 'حساسية مستحضرات التجميل',
                'description'     => 'An allergy to chemicals in makeup and skincare products.',
                'ar_description'  => 'حساسية تجاه المواد الكيميائية في مستحضرات التجميل والعناية بالبشرة.'
            ],
            [
                'name'            => 'Semen allergy',
                'ar_name'         => 'حساسية السائل المنوي',
                'description'     => 'A rare reaction to proteins in semen.',
                'ar_description'  => 'رد فعل نادر تجاه البروتينات في السائل المنوي.'
            ],
            [
                'name'            => 'Latex allergy',
                'ar_name'         => 'حساسية اللاتكس',
                'description'     => 'An allergy to natural rubber latex, used in gloves and medical devices.',
                'ar_description'  => 'حساسية تجاه اللاتكس المطاطي الطبيعي المستخدم في القفازات والأدوات الطبية.'
            ],
            [
                'name'            => 'Water allergy',
                'ar_name'         => 'حساسية الماء',
                'description'     => 'A rare condition causing skin irritation after contact with water.',
                'ar_description'  => 'حالة نادرة تسبب تهيج الجلد عند ملامسة الماء.'
            ],
            [
                'name'            => 'Cold stimuli allergy',
                'ar_name'         => 'حساسية المحفزات الباردة',
                'description'     => 'A reaction to cold temperatures, causing skin rashes and swelling.',
                'ar_description'  => 'رد فعل تحسسي تجاه البرودة، يسبب طفحاً جلدياً وتورماً.'
            ],
            [
                'name'            => 'House dust mite allergy',
                'ar_name'         => 'حساسية عثة غبار المنزل',
                'description'     => 'An allergy to tiny mites found in household dust.',
                'ar_description'  => 'حساسية تجاه العث الصغير الموجود في غبار المنازل.'
            ],
        ];

        DB::table('Allergies')->insert($allergies);
    }
}
