<?php

function element($element, $innerhtml='', $attributes='')
{
    return "<{$element} {$attributes}>{$innerhtml}</{$element}><br><hr>";
}

echo element('p', '');
echo element('p', 'Lorem ipsum');
echo element('p', 'Lorem ipsum', 'class="foo"');


function convertWeight($value, $unit='kg')
{
    if ($unit == 'kg') 
        return $value * 2.20462262;
    elseif ($unit == 'lb') 
        return $value / 2.20462262;
    else 
        return "Unit is not recognized.";
    
}

echo convertWeight(1, 'lb');
echo "<br><hr>";
echo convertWeight(1, 'kg');
echo "<br><hr>";
echo convertWeight(1);

?>