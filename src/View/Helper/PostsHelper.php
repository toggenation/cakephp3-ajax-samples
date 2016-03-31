<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Hash;

class PostsHelper extends Helper {

    
    public function fix_array($posts, $fields){
        
        $this->fix_fields = $fields;
        return Hash::map($posts, '{n}', [$this, 'change_id'] );
    }
    
    public function change_id($past) {
        $ffa = $this->fix_fields;
        if ( ! is_array($ffa)){
            $ffa = [ $ffa ];
        }
            
        foreach ($ffa as $ff){
            
            $fld = $past[$ff];

            unset($past[$ff]);

            $past['@' . $ff] = $fld;
        }
        

        return $past;
        
    }

}
