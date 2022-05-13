<?php

namespace App\Models;

use Fureev\Trees\{NestedSetTrait,Contracts\TreeConfigurable};
use Fureev\Trees\Config\Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model implements TreeConfigurable
{
    use HasFactory, NestedSetTrait;

    protected $guarded = [];


    protected $keyType = 'integer';

    protected static function buildTreeConfig(): Base
    {

    $config= new Base(true);
    $config->parent()->setType('int'); // `parent type` set up automatically from `$model->keyType`
    return $config;

//         return Base(TreeAttribute::make('parent_id')->setAutoGenerate(false));

/*
        return Base::make()
//             ->setAttributeTree(TreeAttribute::make()->setName('big_tree_id'))
            ->setAttribute('parent', ParentAttribute::make()->setName('parent_id'))
            ->setAttribute('left', LeftAttribute::make()->setName('left_offset'))
            ->setAttribute('right', RightAttribute::make()->setName('right_offset'))
//             ->setAttribute('level', LevelAttribute::make()->setName('deeeeep'));
*/
    }
}
