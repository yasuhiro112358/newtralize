# newtralize

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


# 試行錯誤中
### Docker imageでのデプロイ
### ローカルでの操作
```bash
# Build the image
sail -f docker-compose.prod.yml build
# contextは、./に変更
# dockerfileは、docker/8.3/Dockerfile.prodに変更
# imageは、リポジトリ名/イメージ名:タグ名に変更
# platformは、Amazon Linux 2023の場合はlinux/amd64に
# volumeは、記述を削除する
# アプリのファイルをコピーするために、COPY ../../ /var/www/htmlを追加
# 環境変数を.env.productionから読み取るように設定

# Create a repository
aws ecr create-repository --repository-name newtralize 

# Login to the repository
aws ecr get-login-password --region ap-northeast-1 | docker login --username AWS --password-stdin 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com

# Push the image to the repository
docker push 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com/newtralize:latest
```

### EC2での操作
```bash
# Login to the repository from EC2
aws ecr get-login-password --region ap-northeast-1 | docker login --username AWS --password-stdin 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com

# Pull the image from the repository
docker pull 767397934648.dkr.ecr.ap-northeast-1.amazonaws.com/newtralize:latest

# EC2に手動でファイルを設置
# ~/newtralize/docker-compose.prod.yml
# ~/newtralize/.env.prod
# 必要に応じてportを変更

# Run the image
docker-compose -f docker-compose.prod.yml up -d --no-build # buildをスキップして実行
```


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
