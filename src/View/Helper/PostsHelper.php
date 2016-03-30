<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Hash;

class PostsHelper extends Helper {

    
    public function fix_array($posts){
        return Hash::map($posts, '{n}', [$this, 'change_id'] );
    }
    
    public function change_id($past) {

        $id = $past['id'];

        unset($past['id']);

        $past['@id'] = $id;

        return $past;
        
    }

}
