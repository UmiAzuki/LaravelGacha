# LaravelGacha

2023年夏インターンの実装をLaravel10に換装しました。
- シングルガチャと10連ガチャを回せるようにしました。
- todo: 戦闘部分は後程作成する。

## 実行手順
docker compose up -d
docker compose exec app composer install
cd src
cp .env.example .env
docker compose exec app php artisan key:generate
sudo chmod 777 storage -R
docker compose exec app php artisan migrate:fresh --seed
http://localhost:8080/topでガチャ表示画面に移動

※コンテナイメージがphp8.2のものになっていない場合は
docker compose build --no-cache で最新化してください。

