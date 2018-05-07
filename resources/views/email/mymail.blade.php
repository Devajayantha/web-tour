<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mail</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="box-form">
                <div class="form-signin">
                    <div>
                        <img  class="form-logo" src="{{asset('img/penida-hill.png')}}" alt="">
                    </div>
                    <span class="judul modal-header">
                        {{ $email_content }}
                    </span>
                    <p id="textspan">
                        {{ $text_area }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>
<style>

@font-face {
    font-family: "Quantify";
    src: url('Quantify Bold v2.6.ttf');
}
    
    *{
        padding: 0;
    }

    body{
        background-color: #e0e0e0;
        margin:0;
    }
.form-logo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
    padding-bottom: 20px;
}
    .judul{
    font-family: "Quantify";
    font-size: 35px;
    color :#757575;
    text-align: center;
    padding-top: 5px;         
    }

.form-signin{
    box-shadow: 0 4px 8px 0 #0064b7;
    max-width: 380px;
    padding: 15px 35px 15px;
    margin: 0 auto;
    background-color: rgba(255,255,255,0.6);
    border: 1px solid rgba(0,0,0,0.1);
}

.box-form{
    padding-top: 15%;
}
#textspan{
    padding-top: 20px;
    font-family: "arial";
    text-align: justify;
    text-justify: inter-word;
}
               
</style>
    
</body>
</html>