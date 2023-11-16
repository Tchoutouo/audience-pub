<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AudiencesPub</title>
    </head>

    <body>
        <div style="background-color:white;max-width: 500px; min-height: 300px; border: solid 1px #E3242B;">
            <div style="background-color: #E3242B; max-width: 500px; min-height: 40px;margin: auto; text-align: center">
                <img src="" alt="Image" width="150">
            </div>
            <div style="max-width: 500px; min-height: 230px; margin: auto;">
                <div style="padding-top: 10px; text-align: left; padding-left: 10px; padding-right: 10px;">
                    <h3>Message de {{ $data['name'] }} depuis le site web www.audiencespub.com</h3>
                    <br>
                    <p>{{ $data['message'] }}</p>
                </div>
                <div style="padding-left: 20px; margin-top:20px;">
                    <p>Email: <strong>{{ $data['email'] }}</strong></p>
                    <p>Téléphone: <strong>{{ $data['phone'] }}</strong></p>
                </div>

                <div style="padding-left: 20px; margin-bottom: 20px; text-align: center;">
                    <a href="#" style="color: #007E94;">https://www.audiencespub.com</a>
                </div>
            </div>
        </div>
            
    </body>

</html>
