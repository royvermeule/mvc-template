<?php

declare(strict_types=1);

namespace Libraries;

use Filters\RegistryFilter;

class BaseController
{
  /**
   * Checking if the file exists.
   * Then getting the file contents and filtering it.
   */
  public function view($view, $data = [])
  {
    if (file_exists('../app/views/' . $view . '.php')) {
      ob_start();
      require_once '../app/views/' . $view . '.php';
      $html = ob_get_clean();
      ob_end_clean();

      $registryFilter = new RegistryFilter($html, $data);
      $html = $registryFilter->filter();

      //title element
      $titleElPattern = '/<title (.*?)>/';
      $titleElReplacement = '<title>$1</title>';
      $html = preg_replace($titleElPattern, $titleElReplacement, $html);

      //htmlHiddenComment
      $hiddenCommentPattern = '/!(.*?)!/';
      $hiddenCommentReplacement = '';
      $html = preg_replace($hiddenCommentPattern, $hiddenCommentReplacement, $html);

      echo $html;
    } else {
      die("View does not exists.");
    }
  }
}
