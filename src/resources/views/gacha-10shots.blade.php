<!DOCTYPE html>
<html lang="ja">
<?php
const RARITYFORIMAGE = ['', 'normal', 'normalplus', 'rare', 'rareplus', 'srare'];
?>
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body class="w-100 h-100 text-white bg-dark container">
    <div class="cover-container">
        <?php
        $maxRarityNum = 1;
        ?>
        <main class="px-3">
            <canvas id="gachaDisplay"></canvas>
            <script>
                const cards = [];
                const rarity = [];
                <?php foreach ($response['gachaResult'] as $card) { ?>
                    cards.push(<?= json_encode($card) ?>);
                    rarity.push('<?= RARITYFORIMAGE[$card->rarityID]; ?>');
                    <?php if ($maxRarityNum < $card->rarityID) {
                        $maxRarityNum = $card->rarityID;
                    } ?>
                <?php } ?>
                const maxRarity = '<?= RARITYFORIMAGE[$maxRarityNum]; ?>';
            </script>
        </main>
    </div>
</body>
</html>