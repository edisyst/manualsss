<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManualsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manuals')->delete();
        
        \DB::table('manuals')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'Progetto Fatturazione Elettronica',
                'content' => '<h1>Nullam dictum felis eu pede mollis pretium. Quisque malesuada placerat nisl.</h1>

<h2>Suspendisse potenti.</h2>

<p>Curabitur vestibulum aliquam leo.</p>

<p>Fusce risus nisl, viverra et, tempor et, pretium in, sapien.</p>

<p>&nbsp;</p>

<p>Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede.</p>

<p><strong>Cras non dolor. Aenean vulputate eleifend tellus.</strong></p>

<p><u>Fusce pharetra convallis urna. Etiam feugiat lorem non metus.</u></p>

<p>Praesent ut ligula non mi varius sagittis. Nullam tincidunt adipiscing enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Etiam ultricies nisi vel augue. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.</p>

<p>Maecenas nec odio et ante tincidunt tempus. Pellentesque dapibus hendrerit tortor. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Pellentesque commodo eros a enim. Suspendisse potenti.</p>

<p>Duis lobortis massa imperdiet quam. Suspendisse eu ligula. Fusce fermentum. Phasellus tempus. Aliquam lobortis.</p>',
                'slug' => 'progetto-fatturazione-elettronica',
                'path' => 'http://127.0.0.1:8000/manuals/7',
                'tags' => 'informatica, fatturazione',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:46:19',
                'lft' => 1,
                'rgt' => 18,
                'lvl' => 0,
                'parent_id' => NULL,
                'tree_id' => 1,
            ),
            1 => 
            array (
                'id' => 8,
                'title' => 'Implementazione pratica',
                'content' => '<p>Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede.</p>

<p>&nbsp;</p>

<h2>Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus.</h2>

<p>Pellentesque dapibus hendrerit tortor.</p>

<p>&nbsp;</p>

<h1>Maecenas malesuada.</h1>

<p>Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Aenean ut eros et nisl sagittis vestibulum.</p>

<p><u><strong>Integer tincidunt. Fusce a quam. Vivamus aliquet elit ac nisl. Cras sagittis.</strong></u></p>

<p>Phasellus consectetuer vestibulum elit. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent adipiscing. Aenean ut eros et nisl sagittis vestibulum.</p>

<p>Etiam vitae tortor. Donec id justo. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Phasellus tempus.</p>',
                'slug' => 'implementazione-pratica',
                'path' => 'http://127.0.0.1:8000/manuals/8',
                'tags' => 'informatica',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:47:21',
                'lft' => 6,
                'rgt' => 17,
                'lvl' => 1,
                'parent_id' => 7,
                'tree_id' => 1,
            ),
            2 => 
            array (
                'id' => 9,
                'title' => 'Analisi e studio delle casistiche',
                'content' => '<h1>Quisque ut nisi. Maecenas vestibulum mollis diam.</h1>

<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede.</p>

<p>&nbsp;</p>

<h1>Aliquam eu nunc.</h1>

<h2>Fusce egestas elit eget lorem.</h2>

<h3><strong>In ac felis quis tortor malesuada pretium. Donec venenatis vulputate lorem. Nunc nulla.</strong></h3>

<p>Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Suspendisse potenti. Nulla porta dolor.</p>

<p>Phasellus magna. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Sed a libero. Ut id nisl quis enim dignissim sagittis.</p>

<p>Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Phasellus ullamcorper ipsum rutrum nunc. Fusce convallis metus id felis luctus adipiscing. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>',
                'slug' => 'analisi-e-studio-delle-casistiche',
                'path' => 'http://127.0.0.1:8000/manuals/9',
                'tags' => 'informatica',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:48:22',
                'lft' => 2,
                'rgt' => 5,
                'lvl' => 1,
                'parent_id' => 7,
                'tree_id' => 1,
            ),
            3 => 
            array (
                'id' => 10,
                'title' => 'Casi particolari',
                'content' => '<p style="text-align:right">Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus.</p>

<h1>Nullam quis ante.</h1>

<h2>Nam commodo suscipit quam. Etiam iaculis nunc ac metus. Ut a nisl id ante tempus hendrerit.</h2>

<p><span style="font-family:Comic Sans MS,cursive"><strong>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Donec sodales sagittis magna. Vivamus elementum semper nisi. Suspendisse potenti. Duis leo.</strong></span></p>

<p>&nbsp;</p>

<p>&nbsp;Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Maecenas nec odio et ante tincidunt tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Fusce neque.</p>

<p>Morbi nec metus. Ut tincidunt tincidunt erat. Vivamus consectetuer hendrerit lacus. Phasellus consectetuer vestibulum elit. Aliquam lobortis.</p>

<p>Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. In consectetuer turpis ut velit. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Maecenas vestibulum mollis diam. Curabitur at lacus ac velit ornare lobortis.</p>',
                'slug' => 'casi-particolari',
                'path' => 'http://127.0.0.1:8000/manuals/10',
                'tags' => 'fatturazione',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:49:27',
                'lft' => 3,
                'rgt' => 4,
                'lvl' => 2,
                'parent_id' => 9,
                'tree_id' => 1,
            ),
            4 => 
            array (
                'id' => 11,
                'title' => 'Creazione delle classi',
                'content' => '<p>Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.</p>

<p>&nbsp;</p>

<h2>Aenean ut eros et nisl sagittis vestibulum.</h2>

<ol>
<li>Nam commodo suscipit quam. Aenean imperdiet.</li>
<li>Etiam iaculis nunc ac metus.</li>
<li>Pellentesque ut neque.</li>
</ol>

<h2>Donec vitae orci sed dolor rutrum auctor.</h2>

<ul>
<li>Etiam vitae tortor.</li>
</ul>

<p>Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Phasellus consectetuer vestibulum elit. Pellentesque dapibus hendrerit tortor.</p>

<p>Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Phasellus dolor. Pellentesque auctor neque nec urna. Ut leo.</p>',
                'slug' => 'creazione-delle-classi',
                'path' => 'http://127.0.0.1:8000/manuals/11',
                'tags' => 'informatica',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:50:48',
                'lft' => 7,
                'rgt' => 16,
                'lvl' => 2,
                'parent_id' => 8,
                'tree_id' => 1,
            ),
            5 => 
            array (
                'id' => 12,
                'title' => 'Classi Astratte',
                'content' => '<h1>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</h1>

<p>In ac dui quis mi consectetuer lacinia. Vivamus in erat ut urna cursus vestibulum. Vivamus quis mi.</p>

<p>Donec sodales sagittis magna. Praesent ac sem eget est egestas volutpat. Praesent nonummy mi in odio.</p>

<p>Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Etiam vitae tortor.</p>

<p>&nbsp;</p>

<h1>Suspendisse potenti. Suspendisse eu ligula. Praesent egestas neque eu enim.</h1>

<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Vivamus in erat ut urna cursus vestibulum. Vivamus quis mi.</p>

<p>Donec sodales sagittis magna. Praesent ac sem eget est egestas volutpat. Praesent nonummy mi in odio.</p>

<p>Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Etiam vitae tortor.</p>

<p>Suspendisse potenti. Suspendisse eu ligula. Praesent egestas neque eu enim.</p>',
                'slug' => 'classi-astratte',
                'path' => 'http://127.0.0.1:8000/manuals/12',
                'tags' => 'informatica',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:51:34',
                'lft' => 8,
                'rgt' => 15,
                'lvl' => 3,
                'parent_id' => 11,
                'tree_id' => 1,
            ),
            6 => 
            array (
                'id' => 13,
                'title' => 'Metodi e Proprietà',
                'content' => '<h1>Nullam tincidunt adipiscing enim. In turpis.</h1>

<p>Aenean ut eros et nisl sagittis vestibulum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<p>&nbsp;</p>

<h1>Duis lobortis massa imperdiet quam.</h1>

<p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Phasellus dolor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>

<p>&nbsp;</p>

<p><u>Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vivamus aliquet elit ac nisl.</u></p>',
                'slug' => 'metodi-e-proprieta',
                'path' => 'http://127.0.0.1:8000/manuals/13',
                'tags' => 'informatica',
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:52:23',
                'lft' => 9,
                'rgt' => 14,
                'lvl' => 4,
                'parent_id' => 12,
                'tree_id' => 1,
            ),
            7 => 
            array (
                'id' => 14,
                'title' => 'Metodi',
                'content' => '<p style="text-align:right"><strong><em>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </em></strong></p>

<h1>Etiam ultricies nisi vel augue.</h1>

<p>Fusce neque.</p>

<p>Pellentesque auctor neque nec urna. Vestibulum fringilla pede sit amet augue.</p>

<p>In ut quam vitae odio lacinia tincidunt. Nunc nulla. Vivamus in erat ut urna cursus vestibulum. Cras varius. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit.</p>

<p>Phasellus tempus. Curabitur vestibulum aliquam leo. Aenean massa. Fusce ac felis sit amet ligula pharetra condimentum. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi.</p>',
                'slug' => 'metodi',
                'path' => 'http://127.0.0.1:8000/manuals/14',
                'tags' => NULL,
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:55:00',
                'lft' => 10,
                'rgt' => 13,
                'lvl' => 5,
                'parent_id' => 13,
                'tree_id' => 1,
            ),
            8 => 
            array (
                'id' => 15,
                'title' => 'Metodi ereditati',
                'content' => '<h1>Nam pretium turpis et arcu.</h1>

<p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.</p>

<ul>
<li>Nam pretium turpis et arcu.</li>
<li>Fusce neque.</li>
<li>Nunc nulla.</li>
<li>Aliquam eu nunc.</li>
</ul>

<p>&nbsp;</p>

<h2>Etiam iaculis nunc ac metus.</h2>

<p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Nam pretium turpis et arcu. Curabitur ullamcorper ultricies nisi.</p>

<p><em><strong>Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Phasellus magna. Curabitur at lacus ac velit ornare lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</strong></em></p>

<p>Quisque malesuada placerat nisl. Praesent adipiscing. Pellentesque posuere. In auctor lobortis lacus. Morbi ac felis.</p>',
                'slug' => 'metodi-ereditati',
                'path' => 'http://127.0.0.1:8000/manuals/15',
                'tags' => NULL,
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:54:40',
                'lft' => 11,
                'rgt' => 12,
                'lvl' => 6,
                'parent_id' => 14,
                'tree_id' => 1,
            ),
            9 => 
            array (
                'id' => 16,
                'title' => 'Progetto Contratti e fatture',
                'content' => '<h1>Phasellus accumsan cursus velit.</h1>

<p>Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede.</p>

<p>&nbsp;</p>

<h2>In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Fusce fermentum odio nec arcu.</h2>

<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Fusce vel dui. Sed hendrerit. Phasellus accumsan cursus velit.</p>

<p>In ut quam vitae odio lacinia tincidunt.</p>

<p>&nbsp;</p>

<h2>Morbi mattis ullamcorper velit.</h2>

<p>Morbi mollis tellus ac sapien. Duis leo.</p>

<p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Vestibulum eu odio. Nulla consequat massa quis enim. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi.</p>',
                'slug' => 'progetto-contratti-e-fatture',
                'path' => 'http://127.0.0.1:8000/manuals/16',
                'tags' => NULL,
                'created_at' => '2022-05-30 12:43:45',
                'updated_at' => '2022-05-30 12:53:11',
                'lft' => 1,
                'rgt' => 2,
                'lvl' => 0,
                'parent_id' => NULL,
                'tree_id' => 2,
            ),
        ));
        
        
    }
}