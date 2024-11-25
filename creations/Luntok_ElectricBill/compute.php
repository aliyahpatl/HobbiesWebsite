<?php
// Check if form fields are empty
$previous_error = $current_error = $unit_error = '';

//prints an error message to ask user inputs
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_POST['previous_reading'])) {
    $previous_error = 'Please input the previous reading.';
  } elseif (!is_numeric($_POST['previous_reading'])) {
    $previous_error = 'Input a number.';
  }

  if (empty($_POST['current_reading'])) {
    $current_error = 'Please input the current reading.';
  } elseif (!is_numeric($_POST['current_reading'])) {
    $current_error = 'Input a number.';
  }

  if (empty($_POST['unit'])) {
    $unit_error = 'Please input the unit.';
  } elseif (!is_numeric($_POST['unit'])) {
    $unit_error = 'Input a number.';
  }
}
?>
