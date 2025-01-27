<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Results</h1>

        @if ($stories->isEmpty())
            <p>No stories found matching your search criteria.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Writer</th>
                        <th>Date</th>
                        <th>Banner</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stories as $story)
                        <tr>
                            <td>{{ $story->id }}</td>
                            <td>{{ $story->story_title }}</td>
                            <td>{{ $story->story_writer }}</td>
                            <td>{{ $story->story_date }}</td>
                            
                            <!-- Display Banner Image -->
                            <td>
                                @if($story->banner)
                                    <img src="{{ asset('storage/' . $story->banner) }}" alt="Banner" class="img-fluid" style="max-height: 100px;">
                                @else
                                    <span>No banner available</span>
                                @endif
                            </td>

                            <!-- Display Story Image -->
                            <td>
                                @if($story->img)
                                    <img src="{{ asset('storage/' . $story->img) }}" alt="Image" class="img-fluid" style="max-height: 100px;">
                                @else
                                    <span>No image available</span>
                                @endif
                            </td>

                            <!-- Edit Button -->
                            <td>
                                <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('stories.searchForm') }}" class="btn btn-secondary mt-3">Back to Search</a>
    </div>
</body>
</html>
