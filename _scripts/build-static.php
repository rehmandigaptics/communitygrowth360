<?php

$root = dirname(__DIR__);
$pages = glob($root . DIRECTORY_SEPARATOR . '*.php');
$renderedPages = [];

if ($pages === false || $pages === []) {
    fwrite(STDERR, "No PHP pages found to export.\n");
    exit(1);
}

foreach ($pages as $page) {
    ob_start();

    try {
        require $page;
        $html = ob_get_clean();
    } catch (Throwable $error) {
        ob_end_clean();
        fwrite(STDERR, sprintf("Failed to render %s: %s\n", basename($page), $error->getMessage()));
        exit(1);
    }

    if (preg_match('/(?:PHP (?:Warning|Notice|Fatal error|Parse error)|Warning:|Notice:|Fatal error:)/', $html)) {
        fwrite(STDERR, sprintf("PHP error output while rendering %s.\n", basename($page)));
        exit(1);
    }

    $html = str_replace('.php', '.html', $html);
    $renderedPages[basename($page, '.php') . '.html'] = $html;
}

foreach ($renderedPages as $filename => $html) {
    $path = $root . DIRECTORY_SEPARATOR . $filename;
    if (file_put_contents($path, $html) === false) {
        fwrite(STDERR, sprintf("Failed to write %s.\n", $filename));
        exit(1);
    }
}

printf("Exported %d pages to static HTML.\n", count($renderedPages));
