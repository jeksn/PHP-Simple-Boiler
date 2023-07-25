<!DOCTYPE html>
<html lang="en" x-data="{ isDarkMode: false }" x-init="isDarkMode = localStorage.getItem('darkMode') === 'true'" x-bind:class="{ 'dark': isDarkMode }">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Simple Boiler</title>
   <link href="../../dist/output.css" rel="stylesheet">
   <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="relative bg-white dark:bg-slate-800">
   
   <?php require('components/darkmodeButton.php'); ?>
   
   <main class="max-w-screen-xl mx-auto">


