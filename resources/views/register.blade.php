<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            margin: 40px;
        }

        .title {
            font-size: 44px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="title m-b-md">
            Buat Account Baru!
        </div>

        <h4>Sign Up Form</h4>
        <form method="POST" action="/wellcome">
            @csrf
            <label>First name:</label><br>
            <input type="text" name="firstname"><br>
            <label>Last name:</label><br>
            <input type="text" name="lastname"><br><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male">
            <label>Male</label><br>
            <input type="radio" name="gender" value="female">
            <label>Female</label><br>
            <input type="radio" name="gender" value="other">
            <label for="other">Other</label><br><br>


            <label>Nationality:</label><br>

            <select name="negara">
                <option value="indonesia">indonesia</option>
                <option value="malaysia">malaysia</option>
                <option value="thailand">thailand</option>
                <option value="australia">australia</option>
            </select>
            <br><br>

            <label>Language Spoken:</label><br>
            <input type="checkbox" name="bahasa" value="indonesia"><label>Bahasa Indonesia</label><br>
            <input type="checkbox" name="bahasa" value="english"><label>English</label><br>
            <input type="checkbox" name="bahasa" value="english"><label>other</label><br>
            <br><br>
            <label>Bio:</label><br>
            <textarea name="bio"></textarea>
            <br><br>
            <input type="submit" value="Sign Up">
        </form>



    </div>
</body>

</html>
