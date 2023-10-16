<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>
    <form class="form-inline" method="post" action="gacha/execute">
            <div class="row">
                <div class="col-md-2 form-inline"></div>
                <div class="col-md-4 text-center">
                    <button class="btn" type="submit" name="gacha_type" value="1">単発ガチャを回す</button>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <button class="btn" type="submit" name="gacha_type" value="10">10連ガチャを回す</button>
                </div>
                <div class="col-md-2 mt-5"></div>
            </div>
        </form>
</body>
</html>