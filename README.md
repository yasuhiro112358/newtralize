# newtralize

## Development notes
```bash
curl -s https://laravel.build/newtralize | bash
php artisan sail:publish
```

```bash
composer require laravel/breeze --dev # Install Breeze
php artisan breeze:install # Install Breeze (default stack with Blade)
```


```bash
sail up
sail exec laravel.test php artisan migrate
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

/var/www/newtralize
にインストールしたい

```bash
cd /var/www/html # Apacheのドキュメントルートに移動
sudo chown -R ec2-user:ec2-user /var/www/html # ec2-userのユーザーとグループに変更
sudo chmod -R 755 /var/www/html # パーミッションの変更

# SSH接続が確立されていない場合
ssh-keygen -t rsa -b 4096 -C "nabeyasu581@gmail.com" # SSHキーの生成
cat ~/.ssh/id_rsa.pub # 公開鍵の表示
ssh -T git@github.com # SSH接続の確認

git clone git@github.com:yasuhiro112358/omotenaship.git # リポジトリのクローン

cd /var/www/html/omotenaship # プロジェクトディレクトリに移動

cp .env.example .env # .envファイルの作成
vi .env # .envファイルの設定
```




