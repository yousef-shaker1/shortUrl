<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #007bff;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>URL Shortener</h1>
        @if (session('short_url'))
            <p>Your shortened URL is: <a href="{{ url('/' . session('short_url')) }}">{{ url('/' . session('short_url')) }}</a></p>
        @endif
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <label for="original_url">Original URL:</label>
            <input type="text" id="original_url" name="original_url" required>
            <button type="submit">Shorten</button>
        </form>
    </div>
</body>
</html>
