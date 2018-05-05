<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mail</title>
</head>
<body>
    <h1>You Got It</h1>
    <h6>{{ $email_content }}</h6>
    <p>{{ $text_area }}</p>
    <img src=" $request->embed($pathToFile) " alt="" style="max-width: 80%;padding-top: 20px;">
    {{-- <div>
    <img src="{{ $message->embed($image_content) }}">
     
    </div>  --}}
    
</body>
</html>