<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'category_id' => 1,
            'album_id' => 1,
            'video_title' => 'Main Is Tarah Say Hoon Ya Rab | Mir Hasan Mir Naat',
            'video_description' => 'New Naat 2019  On the Auspicious Occasion Of Holy Month of Rabiulawal',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=ZfrL9RiLGqI&ab_channel=MirHasanMir', 
            'islamic_month' => 'Thu al-Hijjah', 
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'          
        ]);

        Video::create([
            'category_id' => 1,
            'album_id' => 1,
            'video_title' => 'Naat | Kon Kehta hai Mujhay Shan e Sikandar - Mir Hasan Mir',
            'video_description' => 'Naat | Kon Kehta hai Mujhay Shan e Sikandar -  Mir Hasan Mir',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=7LxQGkwb0m4&ab_channel=ZainabOrganization',
            'islamic_month' => 'Thu al-Hijjah',  
            'poet_name' => 'Mir Hasan Mir',   
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'        
        ]);

        Video::create([
            'category_id' => 1,
            'album_id' => 1,
            'video_title' => 'Ya Muhammad - New Naat / Manqabat By Mir Hasan Mir',
            'video_description' => 'Mir Hasan Mir reciting on 17th Rabi Ul Awwal @ Imambargah Muhammad Shah - Dubai - 04-03-2010',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=VLZTBDzgjSU&ab_channel=razamoosvi',
            'islamic_month' => 'Thu al-Hijjah', 
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'            
        ]);

        //

        Video::create([
            'category_id' => 2,
            'album_id' => 14,
            'video_title' => 'Ali Ali Karna Zaroor Chahiye | Mir Hasan Mir New Manqabat',
            'video_description' => 'Bismillah ..... Salam ..... Ya Ali (as) Madad Ali (as) Ali (as) Karna Zaroor Chahida | Mir Hasan Mir | 13 Rajab | Manqabat 2022 | Manqabat Mola Ali |as|',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=5shZf_st8FA&ab_channel=MirHasanMir',
            'islamic_month' => 'Thu al-Hijjah',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'           
        ]);

        Video::create([
            'category_id' => 2,
            'album_id' => 13,
            'video_title' => 'Wo Mola Raza (as) Hai | Mir Hasan Mir New Manqabat',
            'video_description' => 'Wo Mola Raza (as) Hai | Mir Hasan Mir | New Manqabat 2022 | New Manqabat Mola Imam e Raza 2022',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=hyrNWGY8YFc&ab_channel=MirHasanMir',  
            'islamic_month' => 'Muḥarram',    
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'       
        ]);

        Video::create([
            'category_id' => 2,
            'album_id' => 13,
            'video_title' => 'Fatima (sa) Kon Hai | Mir Hasan Mir New Manqabat',
            'video_description' => 'Fatima (sa) Kon Hai | Mir Hasan Mir New Manqabat 2022 | Manqabat Bibi Fatima Zehra (sa) 2022| Ya Zahra',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=LXPNnKkBe_4&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'     
        ]);

        Video::create([
            'category_id' => 2,
            'album_id' => 12,
            'video_title' => 'Jang e Khandaq | Khandaq Ka Waqiya | Mir Hasan Mir',
            'video_description' => 'Jang e Khandaq | Khandaq Ka Waqiya | Mir Hasan Mir | 13 Rajab | Manqabat 2022 | Manqabat Mola Ali |as|',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=Fjpw54Txhug&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram', 
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'           
        ]);

        Video::create([
            'category_id' => 2,
            'album_id' => 12,
            'video_title' => 'Bismillah Hussain (as) | Mir Hasan Mir',
            'video_description' => 'Hussain (as) Bismillah | Mir Hasan Mir | 3 Shaban | Manqabat 2022 | Manqabat Mola Hussain |as|',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=zpR3Qc-2IiM&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'          
        ]);

        //

        Video::create([
            'category_id' => 3,
            'album_id' => 3,
            'video_title' => 'Tu Na Aya Ghazi (as) | Mir Hasan Mir Nohay',
            'video_description' => 'Tu Na Aya Ghazi (as) | Mir Hasan Mir Nohay 2021 | New Nohay 2021 | Muharram 2021/1443',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=QvhBmw0effA&ab_channel=MirHasanMir',
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'           
        ]);

        Video::create([
            'category_id' => 3,
            'album_id' => 3,
            'video_title' => 'Hussain Ruk Jao | Mir Hasan Mir',
            'video_description' => 'Hussain Ruk Jao | Mir Hasan Mir New Noha 2020 | Nohay 2020 | Noha Imam Hussain | Kaaba Aur Hussain',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=bLnmVja91uA&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'          
        ]);

        Video::create([
            'category_id' => 3,
            'album_id' => 3,
            'video_title' => 'Haye Haye Ali Asghar (as) | Mir Hasan Mir',
            'video_description' => 'Haye Haye Ali Asghar (as) | Mir Hasan Mir Nohay 2021 | New Nohay 2021 | Muharram 2021/1443',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=RNUj0wHPWuk&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'          
        ]);

        Video::create([
            'category_id' => 3,
            'album_id' => 3,
            'video_title' => 'Maawan Karbala Diyan Maawan | Mir Hasan Mir',
            'video_description' => 'Maawan Karbala Diyan Maawan | Mir Hasan Mir Nohay 2020  | New Nohay 2020 | Muharram 2020 | Noha 2020',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=VPS5FV33kSc&ab_channel=MirHasanMir', 
            'islamic_month' => 'Muḥarram',  
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'          
        ]);

        Video::create([
            'category_id' => 3,
            'album_id' => 3,
            'video_title' => 'MUSLIM AKELA HAI | Mir Hasan Mir',
            'video_description' => 'MUSLIM AKELA HAI | Mir Hasan Mir Nohay 2020 | 9 Zilhaj Noha | Shahadat Muslim bin Aqeel Noha 2020',
            'preview_url' => 'video_thumbnails/default.jpg',
            'youtube_url' => 'https://www.youtube.com/watch?v=EgKiFVgrTBc&ab_channel=MirHasanMir',  
            'islamic_month' => 'Muḥarram',   
            'poet_name' => 'Mir Hasan Mir',
            'lyrics' => 'ا منشائے رب جہاں کھینچتے ہیں
            علی ع سرحد کن فیکون کھینچتے ہیں
            
            وہ دیکھو پلٹتا ہے مغرب سے سورج
            علی ع وقت کی ڈوریاں  کھینچتے ہیں
            
            ہے جس ھاتھ میں مرتضی کی سواری
            اسی سے ابوزر جہاں  کھینچتے ہیں
            
            یہ آل محمد ہے آل محمد ص
            جو سجدوں سے حق کا نشاں  کھینچتے ہیں
            
            لکھو نوح تم بانچ اسم الہی
            فرشتے ابھی بادبان  کھینچتے ہیں
            
            پسر مانگ راہب یہ دیتے رہیں گے
            سخی ھاتھ اپنا کہاں  کھینچتے ہیں
            
            قیامت میں دیکھا قیامت کا منظر
            مقصر کی میثم زباں  کھینچتے ہیں
            
            یہ سجدوں میں شیر خدا کی کشش ہے
            مکاں سے سوےئ لا مکاں  کھینچتے ہیں
            
            یہ خاکی بشر فرش عزا بچھا کر
            زمیں کی طرف آسماں  کھینچتے ہیں
            
            نصیری مقصر رہیں اپنی حد میں
            وہ مولا ع کو کیوں درمیاں  کھینچتے ہیں
            
            تکلم خدا سخن کے کلام سے
            شبیہ امام زمن عجل  کھینچتے ہیں'        
        ]);
    }
}
