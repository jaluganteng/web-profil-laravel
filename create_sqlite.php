<?php
$file = __DIR__ . '/database/database.sqlite';

if (!file_exists($file)) {
    echo "📂 Membuat database/database.sqlite ...\n";
    file_put_contents($file, '');
} else {
    echo "✅ database.sqlite sudah ada.\n";
}
