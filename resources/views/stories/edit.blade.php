<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Story</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Form -->
        <form action="{{ route('stories.update', $story->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="story_title" class="form-label">Story Title</label>
                <input type="text" name="story_title" id="story_title" class="form-control" value="{{ old('story_title', $story->story_title) }}" required>
            </div>

            <div class="mb-3">
                <label for="story_writer" class="form-label">Story Writer</label>
                <input type="text" name="story_writer" id="story_writer" class="form-control" value="{{ old('story_writer', $story->story_writer) }}" required>
            </div>

            <div class="mb-3">
                <label for="story_date" class="form-label">Story Date</label>
                <input type="date" name="story_date" id="story_date" class="form-control" value="{{ old('story_date', $story->story_date) }}" required>
            </div>

            <div class="mb-3">
                <label for="story_description" class="form-label">Story Description</label>
                <textarea name="story_description" id="story_description" class="form-control" required>{{ old('story_description', $story->story_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="story_category" class="form-label">Story Category</label>
                <input type="text" name="story_category" id="story_category" class="form-control" value="{{ old('story_category', $story->story_category) }}" required>
            </div>

            <div class="mb-3">
                <label for="story_rating" class="form-label">Story Rating</label>
                <input type="number" name="story_rating" id="story_rating" class="form-control" value="{{ old('story_rating', $story->story_rating) }}" required>
            </div>

            <div class="mb-3">
                <label for="story_details" class="form-label">Story Details</label>
                <textarea name="story_details" id="story_details" class="form-control" required>{{ old('story_details', $story->story_details) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="banner" class="form-label">Banner</label>
                <input type="file" name="banner" id="banner" class="form-control">
                @if ($story->banner)
                    <p>Current Banner:</p>
                    <img src="{{ asset('storage/' . $story->banner) }}" alt="Banner" class="img-fluid" style="max-height: 100px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" name="img" id="img" class="form-control">
                @if ($story->img)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $story->img) }}" alt="Image" class="img-fluid" style="max-height: 100px;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Story</button>

        </form>

        <!-- Delete Form -->
        <form action="{{ route('stories.destroy', $story->id) }}" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to delete this story?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Story</button>
        </form>

        <a href="{{ route('stories.searchResults') }}" class="btn btn-secondary mt-3">Back to Results</a>
    </div>
</body>
</html>
