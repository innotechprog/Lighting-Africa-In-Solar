<?php
/**
 * Download one image per product category into assets/images.
 * Run once in browser: http://localhost/Lighting%20africa%20in%20solar/download_category_images.php
 *
 * Saves: category-panels.jpg, category-inverters.jpg, category-batteries.jpg,
 *       category-systems.jpg, category-accessories.jpg, category-pumps.jpg
 */

$imagesDir = __DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images';

if (!is_dir($imagesDir)) {
    if (!mkdir($imagesDir, 0775, true) && !is_dir($imagesDir)) {
        die('Failed to create images directory: ' . htmlspecialchars($imagesDir));
    }
}

// One Pexels image per category (royalty-free). Format: id => [url, filename]
$categories = [
    'panels'      => ['https://images.pexels.com/photos/356049/pexels-photo-356049.jpeg', 'category-panels.jpg'],
    'inverters'   => ['https://images.pexels.com/photos/4047881/pexels-photo-4047881.jpeg', 'category-inverters.jpg'],
    'batteries'   => ['https://images.pexels.com/photos/5088772/pexels-photo-5088772.jpeg', 'category-batteries.jpg'],
    'systems'     => ['https://images.pexels.com/photos/4254168/pexels-photo-4254168.jpeg', 'category-systems.jpg'],
    'accessories' => ['https://images.pexels.com/photos/159304/pexels-photo-159304.jpeg', 'category-accessories.jpg'],
    'pumps'       => ['https://images.pexels.com/photos/2692655/pexels-photo-2692655.jpeg', 'category-pumps.jpg'],
];

function downloadImage(string $url, string $destination): bool
{
    $context = stream_context_create([
        'http' => ['timeout' => 30, 'user_agent' => 'Mozilla/5.0 (compatible; SolarSite/1.0)'],
        'ssl'  => ['verify_peer' => true, 'verify_peer_name' => true],
    ]);
    $data = @file_get_contents($url, false, $context);
    if ($data === false) {
        return false;
    }
    return file_put_contents($destination, $data) !== false;
}

$results = [];
foreach ($categories as $slug => $info) {
    list($url, $filename) = $info;
    $path = $imagesDir . DIRECTORY_SEPARATOR . $filename;
    $ok   = downloadImage($url, $path);
    $results[] = ['slug' => $slug, 'file' => $filename, 'success' => $ok];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Images Download</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #0b1120; color: #e5e7eb; padding: 2rem; }
        .card { background: #020617; border-radius: 0.75rem; padding: 1.5rem; border: 1px solid #1f2937; max-width: 640px; }
        .ok { color: #4ade80; }
        .fail { color: #f97373; }
        code { background: #111827; padding: 0.15rem 0.35rem; border-radius: 0.35rem; }
    </style>
</head>
<body>
    <h1>Category Images Download</h1>
    <div class="card">
        <p>Saved to: <code><?php echo htmlspecialchars($imagesDir, ENT_QUOTES, 'UTF-8'); ?></code></p>
        <ul>
            <?php foreach ($results as $r): ?>
                <li class="<?php echo $r['success'] ? 'ok' : 'fail'; ?>">
                    <?php echo $r['success'] ? '✔' : '✖'; ?>
                    <code><?php echo htmlspecialchars($r['file'], ENT_QUOTES, 'UTF-8'); ?></code> (<?php echo $r['slug']; ?>)
                </li>
            <?php endforeach; ?>
        </ul>
        <p>Use these filenames in <code>products.php</code> for each category <code>image</code> key.</p>
    </div>
</body>
</html>
