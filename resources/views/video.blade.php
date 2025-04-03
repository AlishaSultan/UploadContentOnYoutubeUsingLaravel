<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Upload Video</h3>
        <form action="{{ url('video') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Video Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Video Title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Video Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Write a short description" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Video Thumbnail</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Video</label>
                <input type="file" class="form-control" name="video" accept="video/*" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>
