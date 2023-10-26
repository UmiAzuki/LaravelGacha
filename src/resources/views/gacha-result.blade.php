<!DOCTYPE html>
<html lang="ja">

<body class="w-100 h-100 text-white bg-dark container">
@csrf
    <div class="cover-container">
        <main class="container">
            <div class="row px-3 pb-3">
                <p class="text-lite text-center">獲得したカード</p>
                <div class="d-flex justify-content-center flex-wrap">
                    <?php
                    if ($_POST["gacha_type"] === "1") {
                    ?>
                        <div class="mx-3">
                                <p class="text-warning text-center"><?= $response['gachaResult']->fileName ?></p>
                        </div>
                    <?php } ?>
                    <?php if ($_POST["gacha_type"] === "10") {
                        foreach ($response['gachaResult'] as $i => $card) {
                    ?>
                            <div class="mx-3">
                                    <p class="text-warning text-center"><?= $response['gachaResult']->fileName ?></p>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center flex-wrap">
                        <form class="form-inline px-5" method="post" action="gacha/execute">
                            <button class="btn" type="submit" name="gacha_type" value=<?= $_POST["gacha_type"] ?>>
                        </form>
                        <div class="form-inline px-5">
                            <button class="btn"><a href="/index"></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>