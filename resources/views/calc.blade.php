<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>OK</title>
</head>
<body>

@if($num >5)
<p>{{ $num }} 는 5보다 큽니다.</p>
@else
<p>{{ $num }} 는 5보다 작습니다.</p>
@endif

</body>
</html>