<!Doctype html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title> Email Sigma ELearning  |  D. Ell Bouss </title>
    </head>

    <body>

        <strong>Hello, </strong> <br> <br>

        You have received a new message from Sigma ELearning Application. <br> <br>

        <strong>From: </strong> {{$email}} <br> <br>

        <strong>Subject: </strong> {{$subject}} <br> <br>

        <strong>Name: </strong> {{$firstname}} {{$lastname}} <br> <br>

        Saying:  <br>

        <strong> {{$content}} </strong> <br> <br>

        <img src="{{ $message->embed( public_path() . '/visitor/images/logo-1.png' ) }}" alt="logo" style="width: 100px">

    </body>

</html>
