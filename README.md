# プロジェクト名

contact-form

# 概要
お問い合わせフォーム

## 環境
- PHP バージョン: 7.4.33
- Laravel バージョン: 8.83.8
- データベース: MySQL(Docker使用)

## セットアップ手順

1. このリポジトリをクローン
```bash
git clone git@github.com:haruna-satoh/contact-form.git
cd contact-form
```

2. Dockerを起動
```bash
docker compose up -d --build
```

3. .envファイルがなければ作成
```bash
cp src/.env.example src/.env
```

4. Laravelアプリケーションのセットアップ
phpコンテナ内で実行
```bash
docker-compose exec php bash
composer install
php artisan key:generate
php artisan migrate
```


5. アプリにアクセス

・ [http://localhost](http://localhost)
    →フォームの入力ページが表示されます
・ [http://localhost:8080/](http://localhost:8080/)
    →phpMyAdminが開きます(DB確認用)