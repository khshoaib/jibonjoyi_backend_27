<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Stories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Search for Stories</h1>

        <!-- Search Form -->
        <form action="{{ route('stories.searchResults') }}" method="GET">
            @csrf
            <div class="mb-3">
                <label for="story_title" class="form-label">Story Title</label>
                <input type="text" name="story_title" id="story_title" class="form-control" value="{{ old('story_title') }}" placeholder="Enter story title">
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <!-- Display any validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
