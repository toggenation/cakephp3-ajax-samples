<?php

// src/Form/TimezoneForm.php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Utility\Hash;
use Cake\Log\LogTrait;
use Cake\Utility\Inflector;

class TimezoneForm extends Form {

    use LogTrait;

    protected $cities = [
        [
            'city' => 'London',
            'tz' => 'Europe/London'
        ],
        [
            'city' => 'Montreal',
            'tz' => 'America/Toronto'
        ],
        [
            'city' => 'Mumbai',
            'tz' => 'Asia/Calcutta'
        ],
        [
            'city' => 'New York',
            'tz' => 'America/New_York'
        ],
        [
            'city' => 'Paris',
            'tz' => 'Europe/Paris'
        ],
//        [
//            'city' => 'Sydney',
//             'tz' => 'Australia/Sydney'
//            ],
        [
            'city' => 'Toronto',
            'tz' => 'America/Toronto'
        ],
        [
            'city' => 'Melbourne',
            'tz' => 'Australia/Melbourne'
        ]
    ];

    protected function _buildSchema(Schema $schema) {
        return $schema->addField('city', 'string');
//            ->addField('email', ['type' => 'string'])
//            ->addField('body', ['type' => 'text']);
    }

    public function get_cities() {
        $this->log($this->cities);
        return Hash::extract($this->cities, '{n}.city');
    }

    public function test_func() {

        return "my jimmy";
    }

    public function return_tz($city) {

        foreach ($this->cities as $k => $v) {
            if (strcasecmp($city, $v['city']) == 0) {
                date_default_timezone_set($v['tz']);
                $content = '<div class="alert alert-success" role="alert">The time in ' . $v['city'] . ' is : <strong>' . date('D M d Y - H:i:s ', time()) . '</strong></div>';
                return $content;
            }
        }

        $ret = $form->test_func();
        $content = '<div class="alert alert-danger" role="alert">An Unexpected ' . $ret . ' Error Occured </div>';

        return $content;
    }

    protected function _buildValidator(Validator $validator) {

        return $validator->add('city', 'inList', [
                    'rule' => ['inList', $this->get_cities(), true],
                    'message' => 'Not in list'
        ]);
    }

    protected function _execute(array $data) {
        // Send an email.
        return true;
    }

}
