<!DOCTYPE html>
<html lang="ja">
<?php
include __DIR__ . '/head.phtml';
const RARITYFORIMAGE = ['', 'normal', 'normalplus', 'rare', 'rareplus', 'srare'];
?>


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