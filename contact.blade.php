<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <h2>Contact Us</h2>

    <!-- Flash Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form method="POST" action="/submit-form">
        @csrf

        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="message">Message:</label>
            <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>