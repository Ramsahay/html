### Usage Examples

Practical examples of calling APIs and using public functions. Replace placeholders with real names once implemented.

## HTTP APIs

### Health Check (example)
Illustrative only. Implement the endpoint per `docs/getting-started.md` and then update this section with real behavior.

```bash
curl -s http://127.0.0.1:8000/api/health | jq .
```

Expected example response:

```json
{
  "status": "ok",
  "uptimeSeconds": 12345
}
```

## PHP Functions (examples)

### Pure Function
```php
<?php
require_once __DIR__ . '/path/to/your/functions.php';

$sum = add(2, 3); // 5
```

### Function That Throws
```php
<?php
try {
    $user = findUserById($id);
} catch (UserNotFoundException $e) {
    // handle not found
}
```

When you add real functions, replace the examples with concrete calls and link to their entries in `docs/api-reference.md`.

