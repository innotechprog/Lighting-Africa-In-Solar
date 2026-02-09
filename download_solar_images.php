<?php
/**
 * Simple one-time script to download 5 solar installation images
 * into the local "images" folder as PNG files.
 *
 * Usage (XAMPP):
 * 1. Start Apache in XAMPP.
 * 2. Visit in your browser:
 *    http://localhost/Lighting%20africa%20in%20solar/download_solar_images.php
 * 3. After it finishes, check the "images" folder for:
 *    - solar-install-1.png
 *    - solar-install-2.png
 *    - solar-install-3.png
 *    - solar-install-4.png
 *    - solar-install-5.png
 */

// Folder where images will be saved (relative to this script)
$imagesDir = __DIR__ . DIRECTORY_SEPARATOR . 'images';

if (!is_dir($imagesDir)) {
    if (!mkdir($imagesDir, 0775, true) && !is_dir($imagesDir)) {
        die('Failed to create images directory: ' . htmlspecialchars($imagesDir));
    }
}

// 5 solar installation image URLs (royalty-free from Pexels) – same style as image 3 (rooftop/technician)
$urls = [
    'https://images.pexels.com/photos/8853502/pexels-photo-8853502.jpeg',  // technician installing solar panel
    'https://images.pexels.com/photos/9875415/pexels-photo-9875415.jpeg',  // technician photovoltaic rooftop
    'https://images.pexels.com/photos/4254168/pexels-photo-4254168.jpeg',  // KEPT – the one you wanted
    'https://images.pexels.com/photos/987544/pexels-photo-987544.jpeg',    // solar installation
    'https://images.pexels.com/photos/885350/pexels-photo-885350.jpeg',    // solar panels roof
];

function downloadImage(string $url, string $destination): bool
{
    $context = stream_context_create([
        'http' => [
            'timeout' => 30,
        ],
        'ssl' => [
            'verify_peer'      => true,
            'verify_peer_name' => true,
        ],
    ]);

    $data = @file_get_contents($url, false, $context);
    if ($data === false) {
        return false;
    }

    return file_put_contents($destination, $data) !== false;
}

$results = [];
$i = 1;
foreach ($urls as $url) {
    $filename   = "solar-install-$i.png";
    $outputPath = $imagesDir . DIRECTORY_SEPARATOR . $filename;

    $ok = downloadImage($url, $outputPath);
    $results[] = [
        'url'      => $url,
        'file'     => $filename,
        'success'  => $ok,
    ];

    $i++;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solar Image Downloader</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #0b1120;
            color: #e5e7eb;
            padding: 2rem;
        }
        h1 {
            margin-bottom: 1rem;
        }
        .card {
            background: #020617;
            border-radius: 0.75rem;
            padding: 1.5rem;
            border: 1px solid #1f2937;
            max-width: 720px;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 0.5rem;
        }
        .ok {
            color: #4ade80;
        }
        .fail {
            color: #f97373;
        }
        code {
            background: #111827;
            padding: 0.15rem 0.35rem;
            border-radius: 0.35rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <h1>Solar Installation Images Download</h1>
    <div class="card">
        <p>Download target directory:</p>
        <p><code><?php echo htmlspecialchars($imagesDir, ENT_QUOTES, 'UTF-8'); ?></code></p>

        <h2>Results</h2>
        <ul>
            <?php foreach ($results as $r): ?>
                <li>
                    <span class="<?php echo $r['success'] ? 'ok' : 'fail'; ?>">
                        <?php echo $r['success'] ? '✔' : '✖'; ?>
                    </span>
                    Saved <code><?php echo htmlspecialchars($r['file'], ENT_QUOTES, 'UTF-8'); ?></code>
                    from <code><?php echo htmlspecialchars($r['url'], ENT_QUOTES, 'UTF-8'); ?></code>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>If all show a green check, you can now use the images in your site, for example:</p>
        <p><code>&lt;img src="images/solar-install-1.png" alt="Residential solar installation"&gt;</code></p>
    </div>
</body>
</html>

