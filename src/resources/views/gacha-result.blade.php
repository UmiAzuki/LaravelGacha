<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body class="w-100 h-100 text-white bg-dark container">
    <div class="cover-container">
        <?php include __DIR__ . '/layouts/header.phtml' ?>
        <main class="container">
            <div class="row px-3 pb-3">
                <p class="text-lite text-center">獲得したカード</p>
                <div class="d-flex justify-content-center flex-wrap">
                    <?php
                    if ($_POST["gacha_type"] === "1") {
                    ?>
                        <div class="mx-3">
                            <img class="rounded img-thumbnail" src="<?= $urlForIndex ?>/assets/img/card/<?= $response['gachaResult']->fileName ?>" width="270px" height="360px">
                            <?php if ($response['gachaResult']->isNew) { ?>
                                <p class="text-warning text-center">New!</p>
                            <?php } else { ?>
                                <p class="text-warning"> </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($_POST["gacha_type"] === "10") {
                        foreach ($response['gachaResult'] as $i => $card) {
                    ?>
                            <div class="mx-3">
                                <img class="rounded img-thumbnail" src="<?= $urlForIndex ?>/assets/img/card/<?= $card->fileName ?>" width="180px" height="240px">
                                <?php if ($card->isNew) { ?>
                                    <p class="text-warning text-center">New!</p>
                                <?php } else { ?>
                                    <p class="text-warning"> </p>
                                <?php } ?>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center flex-wrap">
                        <form class="form-inline px-5" method="post" action="<?= $urlForIndex ?>/gacha/execute">
                            <button class="btn" type="submit" name="gacha_type" value=<?= $_POST["gacha_type"] ?>><img src="<?= $urlForIndex ?>/assets/img/ui/retry.png" alt="もう一度ガチャを回す" /></button>
                        </form>
                        <div class="form-inline px-5">
                            <button class="btn"><a href="/index"><img src="<?= $urlForIndex ?>/assets/img/ui/gotop.png" alt="トップに戻る" /></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/layouts/footer.phtml' ?>
    </div>
</body>
</html>