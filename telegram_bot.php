<?php

require_once __DIR__ . '/vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$translator = new GoogleTranslate();

// Установка исходного и целевого языка (если не указать, библиотека использует автоопределение)
$translator->setSource('en');
$translator->setTarget('ru');

$textToTranslate = 'Hello, how are you?';
$translation = $translator->translate($textToTranslate);

echo 'Original: ' . $textToTranslate . PHP_EOL;
echo 'Translation: ' . $translation . PHP_EOL;
