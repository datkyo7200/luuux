<?php


function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// function sum_multi_number1()
// {
// echo func_num_args();
// echo "a" . func_get_arg(0) . "---- b:" .
//     func_get_arg(1);
// if (is_array(func_get_args())) {
// $t = 0;
// foreach (func_get_args() as $value) {
//     $t += $value;
// }
// echo $t;
// echo "</br>";
// }
// }

// sum_multi_number1(2, 9, 4);

// function sum_multi_number2($list_number = array())
// {
//     if (is_array($list_number)) {
//         $t = 0;
//         foreach ($list_number as $key => $value) {
//             $t += $value;
//         }
//         echo $t;
//         echo "</br>";
//     }
// }
// $list_number = array(2, 5, 6, 7);
// sum_multi_number2($list_number);

function create_input_text($name, $value, $option = array())
{
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    };
    $input_text_html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
    return $input_text_html;
}

$input_text_html = create_input_text('username', '', $option = array('id' => 'username', 'class' => 'form_input'));
echo $input_text_html . '</br>' . '</br>';
function create_input_number($name, $value, $option = array())
{
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    };
    $input_number_html = "<input type='number' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
    return $input_number_html;
}

$input_number_html = create_input_number(
    'username',
    '',
    $option =
        array(
            'id' => 'username',
            'class' => 'form_input'
        )
);
echo $input_number_html;