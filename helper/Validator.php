<?php

class Validator
{
    private $errors = [];


    public function validate($inputs, $rules)
    {
        $this->errors = [];
        foreach($rules as $field => $rule){
            $rules_array = explode('|' , $rule);
            foreach($rules_array as $rule_value){
                if($rule_value == 'required'){
                    $this->validate_require($field , $inputs[$field]);
                }elsif($rule_value == 'min:6'){                 
                        $array_len = explode(':' , $rule_value);
                        if($array_len[0] == 'min' && strlen($array_len[1]) < $min_length){
                            $this->validate_min_length($field , $inputs[$field]);
                        }
                
                }
                
            }
        }
    }

    private function validate_require($field, $value)
    {
        if (empty($value)) {
            $this->errors[$field][] = $field . 'is required';
        }
    }

    private function validate_email($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = $field . "is not valid";
        }
    }

    private function validate_numeric($field, $value)
    {
        if (!is_numeric($value)) {
            $this->errors[$field][] = $field . "must be a number";
        }
    }

    private function validate_min_length($field, $value, $min_length = 6)
    {
        if (strlen($value) < $min_length) {
            $this->errors[$field][] = $field . "must be at least $min_length character";
        }
    }

    private function validate_max_length($field, $value, $max_length = 12)
    {
        if (strlen($value) > $max_length) {
            $this->errors[$field][] = $field . "must be less than  $max_length character";
        }
    }
}
