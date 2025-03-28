<?php

namespace templates\html\view;

class htmlview
{
  
}

$title = $this->model->getTitle();
// print_r($title);
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
