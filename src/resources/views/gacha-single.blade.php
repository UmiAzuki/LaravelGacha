<!DOCTYPE html>
<html lang="ja">
<?php
const RARITYFORIMAGE = ['', 'normal', 'normalplus', 'rare', 'rareplus', 'srare'];
?>


<body class="w-100 h-100 text-white bg-dark container">
    <div class="cover-container">
        <?php
        $card = 'gachaResult';
        ?>
        <main class="px-3">
            <canvas id="gachaDisplay"></canvas>
            <script>
                const rarity = '<?= RARITYFORIMAGE[$card->rarityID]; ?>';
                const card = <?= json_encode($card)?>;
            </script>
        </main>
    </div>
</body>
</html>