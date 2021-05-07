# docker-wordpress-template

## Docker + Nginx + PHP 8.0 + MariaDB 10.5

## ENV
```
touch .env
```

### .env sample
```
MYSQL_DATABASE='sample'
MYSQL_USER='sample'
MYSQL_PASSWORD='sample'
MYSQL_ROOT_PASSWORD='password'
```

### WordPress インストール
#### 上記、環境変数の場合（テーブル接頭辞は任意）
| 項目 | 入力値 |
| ---- | ---- |
| データベース名 | sample |
| ユーザー名 | sample |
| パスワード | sample |
| データベースのホスト名 | mysql |
| テーブル接頭辞 | wp_ |
