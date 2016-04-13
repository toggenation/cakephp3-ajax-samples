<?php

namespace App\View\Helper;
use Cake\Utility\Hash;
use Cake\View\Helper;
use Cake\Routing\Router;
use Cake\Log\LogTrait;

class HereHelper extends Helper {
    
    use LogTrait;
    
    public function is_here($here_array = []){
        
       $current_request =  [
            'controller' => $this->request->params['controller'],
            'action' => $this->request->params['action']
            ];
       
       $passed_args = $this->request->params['pass'];
       
       if (!empty($passed_args)){
           $current_request = Hash::merge($current_request, $passed_args);
       }
       
       $this->log(['current_request' => Router::url($current_request),
                    'here_array' => Router::url($here_array)]);
      
        return strtolower(Router::url($current_request)) === strtolower(Router::url($here_array));
    }
    
}