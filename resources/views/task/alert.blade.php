<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>OK</title>
</head>
<body>
<h1>할일 정보</h1>
<p>작 업: {{ $task['name'] }}</p>
<p>기 한: {{ $task['due_date'] }}</p>
<p>comment: {{ $task['comment'] }}</p>
</body>
</html>