# newtralize

## Release notes
- 2024/10/08: v1.0.0
  - Initial release


## デプロイの方針
-   アクセスの流れ: HTTP(80) -> HTTPS(443) -> Docker(8080)
-   Reverse Proxy で
    http://newtralize.com:80 -> 
    https://http://newtralize.com:443 -> 
    http://localhost:8080 
    にリダイレクトする
-   Docker では http://localhost:8080 でアクセスできるものをつくる

## Development notes
```bash
# プロジェクトの作成
curl -s https://laravel.build/newtralize | bash
# sailファイルのパブリッシュ
php artisan sail:publish
```

```bash
composer require laravel/breeze --dev # Install Breeze
php artisan breeze:install # Install Breeze (default stack with Blade)
```

```bash
sail up # Dockerコンテナの起動
sail exec laravel.test php artisan migrate # Dockerコンテナ内でマイグレーションを実行
```

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan cache:clear
```

```bash
php artisan make:component Footer
# Create a new component class and view
# app/View/Components/Footer.php
# resources/views/components/footer.blade.php
```

```bash
npm install p5
npm install tweakpane
```

## Development notes

```bash
ssh -i ~/.ssh/id_rsa_aws ec2-user@18.183.87.224  # Connect to AWS EC2 instance
```

```bash
cd /var/www/html # Apacheのドキュメントルートに移動

sudo chown -R ec2-user:ec2-user /var/www/html # ec2-userのユーザーとグループに変更
sudo chmod -R 755 /var/www/html # パーミッションの変更

# SSH接続が確立されていない場合
ssh-keygen -t rsa -b 4096 -C "nabeyasu581@gmail.com" # SSHキーの生成
cat ~/.ssh/id_rsa.pub # 公開鍵の表示
ssh -T git@github.com # SSH接続の確認

git clone git@github.com:yasuhiro112358/newtralize.git # リポジトリのクローン

cd /var/www/html/newtralize # プロジェクトディレクトリに移動

cp .env.example .env # .envファイルの作成
vi .env # .envファイルの設定
```

```
# .env
APP_ENV=production # 環境の設定
APP_URL=http://localhost # URLの設定

DB_CONNECTION=mysql # データベースの接続
DB_HOST=my-mysql-db.c78aam860x7j.ap-northeast-1.rds.amazonaws.com # ホストの設定
DB_PORT=3306 # ポートの設定
DB_DATABASE=newtralize # データベース名の設定
DB_USERNAME=username # ユーザー名の設定
DB_PASSWORD=password # パスワードの設定
```

```bash
composer install # Composerのインストール

npm install # npmパッケージのインストール
npm run build # npmパッケージのビルド
```

```bash
php artisan key:generate # アプリケーションキーの生成
php artisan migrate # マイグレーションの実行
php artisan db:seed # シーディングの実行
php artisan storage:link # シンボリックリンクの作成
```

```bash
# 【重要】/var/www/html以下をapacheユーザーに変更（これをしないとページが表示されない）
sudo chown -R apache:apache /var/www/html # Apacheのユーザーとグループに変更
sudo chmod -R 775 /var/www/html/newtralize/storage # パーミッションの変更
sudo chmod -R 775 /var/www/html/newtralize/bootstrap/cache # パーミッションの変更
```

```bash
cd /etc/httpd/conf.d # Apacheの設定ファイルのディレクトリに移動
sudo vi newtralize.conf # 設定ファイルを作成
```

```apache
# /etc/httpd/conf.d/newtralize.conf

<VirtualHost *:80>
    DocumentRoot "/var/www/html/newtralize/public"
    ServerName newtralize.com
    ServerAlias www.newtralize.com
    <Directory "/var/www/html/newtralize/public">
        AllowOverride All
        Options All
        Require all granted
    </Directory>
</VirtualHost>
```

```bash
sudo systemctl restart php-fpm # PHP-FPMの再起動
sudo systemctl restart httpd # Apacheの再起動

sudo systemctl status httpd # Apacheの状態確認
httpd -t -D DUMP_INCLUDES # Apacheの設定ファイルの確認
```

### SSL対応
```bash
sudo dnf install -y python3 augeas-libs pip # Python3とpipのインストール
sudo python3 -m venv /opt/certbot/ # Pythonの仮想環境の作成
sudo /opt/certbot/bin/pip install --upgrade pip # pipのアップデート
sudo /opt/certbot/bin/pip install certbot # Certbotのインストール
sudo /opt/certbot/bin/pip install certbot-apache # CertbotのApacheプラグインのインストール
sudo ln -s /opt/certbot/bin/certbot /usr/bin/certbot # シンボリックリンクの作成

sudo yum install -y mod_ssl # mod_sslのインストール
```

```bash
# 先にDNSのAレコードを設定しておく
sudo certbot --apache -d newtralize.com -d www.newtralize.com # SSL証明書の取得
# 設定は自動で行われる
```


## Dockerコンテナのデプロイ手順
本番環境用のDockerfileを作成して行う
（Laravel Sailは開発環境専用・・・コンテナ内へのファイルコピーがスムーズにできないなど調整が非常にしづらい）

### ローカルでの操作
```bash
# Build the image
docker compose -f docker-compose.prod.yml build       
# contextは、./に変更。ソースコードーをコピーするため
# dockerfileは、prod用を指定
# imageは、リポジトリ名/イメージ名:タグ名に変更
# platformは、Amazon Linux 2023の場合はlinux/amd64に
# volumeは、記述を削除する
# 環境変数を.env.prodから読み取るように設定

# Create a repository
aws ecr create-repository --repository-name newtralize-web

# Login to the repository
aws ecr get-login-password --region ap-northeast-1 | docker login --username AWS --password-stdin 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com

# Push the image to the repository
docker push 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com/newtralize-web:latest
```

### EC2 での操作
```bash
# Login to the repository from EC2
aws ecr get-login-password --region ap-northeast-1 | docker login --username AWS --password-stdin 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com

# Pull the image from the repository
docker pull 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com/newtralize-web:latest

# EC2に手動でファイルを設置
# ~/newtralize/docker-compose.prod.yml
# ~/newtralize/.env.prod

# Run the image
docker-compose -f docker-compose.prod.yml up -d --no-build 
# buildをスキップして実行
# image nameをrepository名にしておくと、pullからしてくれる
```

## リバースプロキシの設定
```bash
# リバースプロキシの設定
# newtralize.comにリクエストがあった場合、localhost:8080にリダイレクトさせる
sudo vim /etc/httpd/conf.d/newtralize.conf
```

```
# /etc/httpd/conf.d/reverse-proxy.conf

<VirtualHost *:80>
    ServerName newtralize.com

    ProxyPass "/" "http://localhost:8080/"
    ProxyPassReverse "/" "http://localhost:8080/"

    <Proxy *>
        Require all granted
    </Proxy>
</VirtualHost>
```
