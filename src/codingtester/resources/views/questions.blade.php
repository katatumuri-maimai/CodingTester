<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
    @include("include.layout")
    <div class="questions_blade">
        @foreach ($questions as $question)
            @include("include.question",['question' => $question])
        @endforeach
    </div>
</body>
</html>