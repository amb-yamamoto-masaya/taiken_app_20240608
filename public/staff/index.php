<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員管理一覧</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div style="margin: 25px;">
    <h4>社員一覧・検索</h4>
    <div style="margin-bottom: 25px;">
      <form action="">
        <label class="form-label">社員名</label>
        <input type="text" class="form-control">
        <label class="form-label">電話番号</label>
        <input type="text" class="form-control">
        <div class="mb-3">
          <label class="form-label">メールアドレス</label>
          <input type="email" class="form-control" placeholder="name@example.com">
        </div>
        <label class="form-label">住所</label>
        <input type="text" class="form-control">
        <label class="form-label">登録日</label>
        <input type="text" class="form-control">
        <div style="margin-top: 20px">
          <input type="submit" class="btn btn-secondary" value="検索">
        </div>
      </form>
    </div>
    <div style="text-align: right;">
      <button type="button" class="btn btn-success">新規作成</button>
    </div>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>社員名</th>
        <th>所属</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
      <tr>
        <td>1</td>
        <td>山本将哉</td>
        <td>営業部</td>
        <td>000000000</td>
        <td>test@example.com</td>
        <td>2024年06月8日</td>
        <td>2024年06月8日</td>
      </tr>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>