# cake4_cms
シンプルなCMS画面をCakePHP4で作成<br>
基本的なCRUD（検索、登録、編集、削除）機能

## 準備
.envを作成し以下を書く。XXXXは自身の環境に合わせて設定する。
```
#!/usr/bin/env bash
export DEBUG="true"
export DATABASE_PASSWORD="XXXX"
export DATABASE_NAME="XXXX"
export DATABASE_USER="XXXX"
export DATABASE_PORT="XXXX"
```

## Docker
初回
```
docker-compose up -d --build
```

２回目以降
```
docker-compose up -d
```

環境停止
```
docker-compose down
```

コンテナへ入る
```
docker-compose exec app sh
```
