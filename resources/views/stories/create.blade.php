<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Create a New Story</h1>

        <!-- Display success message if available -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Story Title -->
            <div class="mb-3">
                <label for="story_title" class="form-label">Story Title</label>
                <input type="text" name="story_title" id="story_title" class="form-control" value="{{ old('story_title') }}" required>
            </div>

            <!-- Story Writer -->
            <div class="mb-3">
                <label for="story_writer" class="form-label">Story Writer</label>
                <input type="text" name="story_writer" id="story_writer" class="form-control" value="{{ old('story_writer') }}" required>
            </div>

            <!-- Story Date -->
            <div class="mb-3">
                <label for="story_date" class="form-label">Story Date</label>
                <input type="date" name="story_date" id="story_date" class="form-control" value="{{ old('story_date') }}" required>
            </div>

            <!-- Story Description -->
            <div class="mb-3">
                <label for="story_description" class="form-label">Story Description</label>
                <textarea name="story_description" id="story_description" class="form-control" required>{{ old('story_description') }}</textarea>
            </div>

            <!-- Story Category -->
            <div class="mb-3">
                <label for="story_category" class="form-label">Story Category</label>
                <input type="text" name="story_category" id="story_category" class="form-control" value="{{ old('story_category') }}" required>
            </div>

            <!-- Story Category 1 (Add this field to match controller validation) -->
            <div class="mb-3">
                <label for="story_category1" class="form-label">Story Category 1</label>
                <input type="text" name="story_category1" id="story_category1" class="form-control" value="{{ old('story_category1') }}" required>
            </div>

            <!-- Story Rating -->
            <div class="mb-3">
                <label for="story_rating" class="form-label">Story Rating</label>
                <input type="number" step="0.1" name="story_rating" id="story_rating" class="form-control" value="{{ old('story_rating') }}" required>
            </div>

            <!-- Story Details -->
            <div class="mb-3">
                <label for="story_details" class="form-label">Story Details</label>
                <textarea name="story_details" id="story_details" class="form-control" required>{{ old('story_details') }}</textarea>
            </div>

            <!-- Banner Image -->
            <div class="mb-3">
                <label for="banner" class="form-label">Banner</label>
                <input type="file" name="banner" id="banner" class="form-control">
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" name="img" id="img" class="form-control">
            </div>

            <!-- Additional Image Fields (img1, img2, img3) -->
            <div class="mb-3">
                <label for="img1" class="form-label">Image 1</label>
                <input type="file" name="img1" id="img1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="img2" class="form-label">Image 2</label>
                <input type="file" name="img2" id="img2" class="form-control">
            </div>
            <div class="mb-3">
                <label for="img3" class="form-label">Image 3</label>
                <input type="file" name="img3" id="img3" class="form-control">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('stories.searchResults') }}" class="btn btn-secondary ms-2">Update Content</a>
        </form>
    </div>
</body>
</html>
