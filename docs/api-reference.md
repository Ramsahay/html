### API Reference

Comprehensive reference for all public APIs, functions, classes, and components.

## Inventory
- **HTTP APIs**: GET `/api/health`
- **Functions/Classes**: None detected
- **Components**: None detected

If you add a public surface, document it using the templates below.

## Endpoints

### GET /api/health
- **Description**: Returns basic service health information.
- **Query Params**: None
- **Auth**: Not required
- **Responses**:
  - 200:

```json
{
  "status": "ok",
  "phpVersion": "8.2.x",
  "uptimeSeconds": 123456
}
```

Notes:
- `uptimeSeconds` is derived from the host OS uptime and may be omitted if unavailable.

- 404: Returned for non-matching routes.

**Examples**

```bash
curl -s http://127.0.0.1:8000/api/health | jq .
```

## Templates

### HTTP Endpoint Template
- **Method**: GET | POST | PUT | PATCH | DELETE
- **Path**: `/your/path`
- **Description**: One-sentence summary
- **Query Params**: List name, type, required, description
- **Body**: JSON schema or fields (if applicable)
- **Responses**:
  - 200: Describe response, include JSON example
  - 4xx/5xx: Common error cases, include examples
- **Auth**: If required, specify scheme and scopes
- **Examples**:
  - cURL
  - Language client(s) as appropriate

Example:

```http
GET /api/health HTTP/1.1
Host: example.com
```

```json
{
  "status": "ok",
  "uptimeSeconds": 12345
}
```

### PHP Function Template
- **Name**: `functionName`
- **Signature**: `function functionName(Type $arg): ReturnType`
- **Description**: What it does and when to use it
- **Parameters**:
  - `$arg` (Type): Description, constraints
- **Returns**: ReturnType, meaning
- **Throws**: Exceptions and when
- **Examples**:

```php
<?php
$result = functionName($input);
```

### Component Template
If UI or library components are added, document them here.
- **Name**: `ComponentName`
- **Props/Options**: Name, type, default, description
- **Description**: Purpose and behavior
- **Examples**: Minimal and full examples

## Change Log
Document notable API changes here with dates and migration notes.

