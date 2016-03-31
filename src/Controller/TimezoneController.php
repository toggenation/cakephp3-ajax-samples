<?php
// src/Controller/TimezoneController.php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use App\Form\TimezoneForm; // specify your form class here otherwise it won't be found
//use Cake\Log\Log;
use Cake\Utility\Hash;

class TimezoneController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        // Change layout for Ajax requests
        if ($this->request->is('ajax')) {
            $this->viewBuilder()->layout('ajax'); // src/Template/Layout/ajax.ctp
        }
        $this->viewBuilder()->layout('timezone'); // src/Template/Layout/timezone.ctp
    }

    public function getTime() {

        // no longer model $useTable = false;
        // model-less forms use src/Form/TimezoneForm.php
        $timezone = new TimezoneForm();
	$city_list = $timezone->get_cities();
	$title = "City Time Retriever";
        $this->set(compact('timezone', 'city_list', 'title'));
    }

    public function ajaxGetTime() {
        $this->request->allowMethod('ajax'); // No direct access via browser URL

        $content = '<div class="alert alert-warning" role="alert">Something unexpected occured</div>';
        $form = new TimezoneForm();
        $this->log($this->request->data);
        if ($this->request->is('post')) {
            if ($form->validate($this->request->data)) {
                $city = $this->request->data['city'];
                $content = $form->return_tz($city);
            } else {
                $errors = $form->errors();

                $flatErrors = Hash::flatten($errors); 
                // flatten the error array so you can loop through it easier
                // 
                // $errors is:
                //                (
                //                [city] => Array
                //                (
                //                [inList] => Not in list
                //                )
                //
                //                )

                // $errors becomes:
                //                (
                //                [city.inList] => Not in list
                //                )


                if (count($errors) > 0) {
                    $content = '<div class="alert alert-danger" role="alert">Could not get timezone. The following errors occurred: ';
                    $content .= '<ul>';
                    foreach ($flatErrors as $key => $value) {
                        $content .= '<li><strong>' . $value . '</strong></li>';
                    }
                    $content .= '</ul>';
                    $content .= '</div>';
                }
            }
        }
        
        $this->set('_serialize', ['content']);

        //set current date as content to show in view
        $this->set(compact('content'));

    }

}
