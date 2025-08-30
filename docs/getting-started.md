### Getting Started

This project is currently a minimal PHP codebase. Use this guide to set up your environment and create your first public API.

## Prerequisites
- **PHP**: 8.0 or newer

## Repository Layout
- `index.php`: Entry point. No public API is implemented yet.

## Running a Local Server (example)
You can serve the repository root with PHP's built-in server:

```bash
php -S 127.0.0.1:8000 -t /workspace
```

Note: This command assumes your working directory is the repository root. Adjust paths as needed for your environment.

## Create Your First Endpoint (example)
Below is an example of how you might implement a simple JSON endpoint in `index.php`. This is illustrative only and not currently present in the repository.

```php
<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && ($_SERVER['REQUEST_URI'] ?? '/') === '/') {
    echo json_encode(['status' => 'ok', 'message' => 'Hello, world!']);
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not Found']);
```

Test the example with:

```bash
curl -i http://127.0.0.1:8000/
```

When you add real endpoints or public functions, update `docs/api-reference.md` and `docs/usage-examples.md` accordingly.

