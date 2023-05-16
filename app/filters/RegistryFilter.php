<?php

declare(strict_types=1);

namespace Filters;

class RegistryFilter
{
  private $html;
  private $data;

  public function __construct($html, $data)
  {
    $this->html = $html;
    $this->data = $data;
  }

  public function filter(): string
  {
    $headRegistry = $this->headRegistry();

    $errors = array();

    $html = $this->html;

    $html = preg_replace_callback(
      '/<head\s+(\w+)>/',
      function ($match) use ($headRegistry, &$errors) {
        if (array_key_exists($match[1], $headRegistry)) {
          return $headRegistry[$match[1]];
        } else {
          $errors[] = '"' . $match[1] . '" is not included in the headRegistry().'; // Append the error message to the $errors array
          return '';
        }
      },
      $html
    );

    $includeRegistry = $this->includeRegistry();

    $html = preg_replace_callback(
      '/<include\s+(\w+)>/',
      function ($match) use ($includeRegistry, &$errors) {
        if (array_key_exists($match[1], $includeRegistry)) {
          return $includeRegistry[$match[1]];
        } else {
          $errors[] = '"' . $match[1] . '" is not included in the includeRegistry().';
          return '';
        }
      },
      $html
    );

    $dataRegistry = $this->dataRegistry($this->data);

    $html = preg_replace_callback(
      '/{(\w+)}/',
      function ($match) use ($dataRegistry, &$errors) {
        if (array_key_exists($match[1], $dataRegistry)) {
          return $dataRegistry[$match[1]];
        } else {
          $errors[] = '"' . $match[1] . '" is not included in the dataRegistry().';
          return '';
        }
      },
      $html
    );

    $typeRegistry = $this->typeRegistry();

    $html = preg_replace_callback(
      '/<type\s+(\w+)>/',
      function ($match) use ($typeRegistry, &$errors) {
        if (array_key_exists($match[1], $typeRegistry)) {
          return $typeRegistry[$match[1]];
        } else {
          $errors[] = '"' . $match[1] . '" is not included in the typeRegistry().';
          return '';
        }
      },
      $html
    );

    if (!empty($errors)) {
      $errorMessage = '<p>' . implode('</p><p>', $errors) . '</p>';
      echo $errorMessage;
    }

    return $html;
  }

  private function headRegistry(): mixed
  {
    $headRegistry = [
      'html5' => '<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">',

      'html5WithTitle' => '<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title {title}>'
    ];

    return $headRegistry;
  }

  private function includeRegistry(): mixed
  {
    $includeRegistry = [];

    return $includeRegistry;
  }

  private function dataRegistry($data): mixed
  {
    $data = array_merge($data, [
      'urlroot' => URLROOT,
      'dtz' => DTZ
    ]);

    return $data;
  }

  private function typeRegistry(): mixed
  {
    $typeRegistry = [
      'html_english' => '<!DOCTYPE html>
      <html lang="en">'
    ];

    return $typeRegistry;
  }
}
