<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

foreach (\App\Models\Blog::all() as $blog) {
    if (empty($blog->slug)) {
        $blog->slug = \Illuminate\Support\Str::slug($blog->title);
        $blog->save();
        echo "Updated blog: " . $blog->title . "\n";
    }
}
echo "Done.\n";
