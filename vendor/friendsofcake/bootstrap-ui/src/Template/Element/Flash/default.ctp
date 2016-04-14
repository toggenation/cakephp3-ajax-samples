<?php 

//debug($params);
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

if (in_array('alert-danger', $class)){
    
    $icon_style = "glyphicon-exclamation-sign";
    
}

if (in_array('alert-success', $class)){
    
    $icon_style = "glyphicon-ok-circle";
    
}

if (in_array('alert-info', $class)){
    
    $icon_style = "glyphicon-info-sign";
    
}




$icon = '<span class="glyphicon '. $icon_style .  '" aria-hidden="true"></span> ';

if (in_array('alert-dismissible', $class)) {

$button = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

$message =  $button . $message; 

}

$message = $icon . $message;

echo $this->Html->div($class, $message , $params['attributes']);

?>
