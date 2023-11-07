<!DOCTYPE html>
<html lang="ja">
<?php
const RARITYFORIMAGE = ['', 'normal', 'normalplus', 'rare', 'rareplus', 'srare'];
?>


<body class="w-100 h-100 text-white bg-dark container">
@csrf
    <div class="cover-container">
        <?php
        $card = $gachaResult;
        ?>
        <main class="px-3">
            <canvas id="gachaDisplay"></canvas>
            <script>
                const rarity = '<?= RARITYFORIMAGE[$card->rarityID]; ?>';
                const card = <?= json_encode($card)?>;
                document.write("ガチャの抽選結果");
                document.write('<br>');
                document.write('<br>');
                    document.write("レアリティ: " + rarity + "\n" +  "カードナンバー: " + card.rarityID);
                    document.write('<img src="http://localhost:8080/img/'+ card.fileName +'" >');
                    document.write('<br>');
            </script>
            <form class="form-inline" method="post" action="/gacha-result">
                @csrf
            <button class="btn" type="submit" name="gacha_type" value="1">単発ガチャを回す</button>
            </form>
        </main>
    </div>
</body>
</html>