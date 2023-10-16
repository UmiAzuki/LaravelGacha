<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body class="w-100 h-100 text-white bg-dark container">
    <div class="cover-container">
        <?php
        include __DIR__ . '/layouts/header.phtml';
        $card = $response['gachaResult'];
        ?>
        <main class="px-3">
            <canvas id="gachaDisplay"></canvas>
            <script>
                const rarity = '<?= RARITYFORIMAGE[$card->rarityID]; ?>';
                const card = <?= json_encode($card)?>;
            </script>
            <script type="text/javascript" src="<?= $urlForIndex ?>/assets/js/gacha-single.js"></script>
        </main>
        <?php include __DIR__ . '/layouts/footer.phtml' ?>
    </div>
</body>
</html>