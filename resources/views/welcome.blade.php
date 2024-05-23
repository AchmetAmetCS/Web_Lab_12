<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    <h1>URL Shortener</h1>
    <form action="{{ route('url.shorten') }}" method="POST">
        @csrf
        <input type="url" name="original_url" placeholder="Enter URL" required>
        <button type="submit">Shorten</button>
    </form>

    @if(session('shortenedUrl'))
        <p>Shortened URL: <a href="{{ session('shortenedUrl') }}">{{ session('shortenedUrl') }}</a></p>
    @endif
</body>
</html>
