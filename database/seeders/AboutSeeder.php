<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title'=>'   شركة رائدة في مجال الإنتاج الإعلامي والفني',
            'sub_title'=>' تأسست شركة أباريس للإنتاج لتكون شريكًا موثوقًا في رحلتك الإبداعية.
              نقدم حلولاً متكاملة في مجال الإنتاج التلفزيوني، السينمائي،
              والإعلاني بجودة عالية وإبداع لا حدود له.فريقنا من المحترفين يمتلك خبرة واسعة في تحويل الرؤى إلى منتجات
              إعلامية مؤثرة تلامس قلوب الجمهور وتحقق أهداف عملائنا.',
              'description'=>'  شركة ابرسي للإنتاج لتكون شريكًا موثوقًا في رحلتك الإبداعية.
              نقدم حلولاً متكاملة في مجال الإنتاج التلفزيوني، السينمائي،
              والإعلاني بجودة عالية وإبداع لا حدود له.فريقنا من المحترفين يمتلك خبرة واسعة في تحويل الرؤى إلى منتجات
              إعلامية مؤثرة تلامس قلوب الجمهور وتحقق أهداف عملائنا.',
            'image'=>'website/image/abarce/about.jpg'
        ]);
    }
}
