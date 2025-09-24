<?php
/** ***********************************************************
 *  Display an error
 *  @param string $message
 *  @return void
 * ***********************************************************/ 
function showError($message = 'Unknown Error') {
  echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
  echo '  <strong class="font-bold">' . $message . '</strong>';
  //echo '  <span class="block sm:inline">Bitte überprüfe deine Eingaben.</span>';
  echo '</div>';
}

/** ***********************************************************
 *  Display a warning
 *  @param string $message
 *  @return void
 * ***********************************************************/ 
function showWarning($message = "Unknown Error") {
  echo '<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">';
  echo '  <strong class="font-bold">' . $message . '</strong>';
  //echo '  <span class="block sm:inline">Bitte überprüfe deine Eingaben.</span>';
  echo '</div>';
}

/** ***********************************************************
 *  Get the base path
 *  @param string $path
 *  @return string
 * ***********************************************************/ 
function basePath($path = '') {
  return __DIR__ . '/' . $path;
} 

/** ***********************************************************
 *  Load a view
 *  @param string $name
 *  @return void
 * ***********************************************************/ 
function loadView($name =' -- unknown -- ') {
  $viewPath = basePath("views/{$name}.view.php");
  if(file_exists($viewPath)) {
    require $viewPath;
  } else {
    showError ("View '{$viewPath} not found!'");
  }
}

/** ***********************************************************
 *  Load a partial view
 *  @param string $name
 *  @return void
 * ***********************************************************/ 
function loadPartial($name =' -- unknown -- ') {
  $partialPath = basePath("views/partials/{$name}.php");
  if(file_exists($partialPath)) {
    require $partialPath;
  } else {
    showError ("Partial View '{$partialPath} not found!'");
  }  
}

/** ***********************************************************
 *  Inspact a value(s)
 *  @param mixed $value
 *  @return void
 * ***********************************************************/ 
function inspect($value = 'value not set') {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

/** ***********************************************************
 *  Inspact a value(s) and die
 *  @param mixed $value
 *  @return void
 * ***********************************************************/ 
function inspectAndDie($value = 'value not set') {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

