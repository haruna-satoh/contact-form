# プロジェクト名

contact-form

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

個人のリモートリポジトリの変更後、ローカルリポジトリから紐付け先を変更
```bash
git remote set-url origin 作成したリポジトリのurl
```

ローカルリポジトリのデータをリモートリポジトリに反映
```bash
git add .
git commit -m "リモートリポジトリの変更"
git push origin main
```

2. Dockerを起動
```bash
docker-compose up -d --build
```

3. Composer install(未実行の場合)
phpコンテナにログイン
```bash
docker-compose exec php bash
```

ログイン後、以下のコマンドでインストール
```bash
composer install
```

4. .envファイルがなければ作成
```bash
cp .env.example .env
```

Laravelアプリケーションキーを生成
```bash
docker-compose exec php bash
php artisan key:generate
```

5. アプリにアクセス

・ [http://localhost](http://localhost)
    →フォームの入力ページが表示されます
・ [http://localhost:8080/](http://localhost:8080/)
    →phpMyAdminが開きます(DB確認用)