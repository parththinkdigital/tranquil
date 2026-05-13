---
name: laravel-13-backend
description: Use this skill whenever the user wants to build, structure, optimize, secure, or scale a Laravel 13 backend project, REST API, admin panel backend, authentication system, queue system, or database-driven web application. Trigger this skill for API architecture, controllers, services, Eloquent ORM, authentication, authorization, queues, caching, deployment, validation, testing, and production backend workflows.
compatibility:
  - PHP 8.3+
  - Laravel 13
  - Composer
  - MySQL/PostgreSQL
---

# Laravel 13 Pro Max Backend Skill

## Purpose

This skill helps build elite, production-ready backend systems using Laravel 13. It emphasizes clean architecture (DDD-lite), high-performance real-time capabilities, and industry-standard security patterns to support premium frontend experiences.

---

# Core Principles

- **Thin Controllers, Rich Logic**: Keep controllers limited to request/response handling.
- **Action-Oriented Architecture**: Use Single Action Controllers or Services for business logic.
- **Strict Typing**: Leverage PHP 8.3+ features (readonly, union types, intersection types).
- **Graceful Failure**: Standardized error responses with unique error codes.
- **Optimistic UI Support**: Design APIs that return enough metadata for instant frontend updates.
- **Performance First**: N+1 prevention, horizontal scaling readiness, and Redis-first caching.

---

# Pro Max Folder Structure

```txt
app/
├── Actions/            # Single-purpose business logic classes
├── Contracts/          # Interfaces for swapping implementations
├── DTOs/               # Data Transfer Objects for strict typing
├── Enums/              # PHP Enums for status, roles, types
├── Exceptions/         # Custom Business/API exceptions
├── Http/
│   ├── Controllers/    # Thin entry points
│   ├── Requests/       # Form Requests with complex validation
│   └── Resources/      # API Resources (JSON transformation)
├── Jobs/               # Background processing
├── Models/             # Eloquent models with casting and scopes
├── Notifications/      # Multi-channel notifications (Database, Mail, SMS)
├── Policies/           # Granular authorization logic
├── Providers/          # Service registration and boot logic
├── Services/           # Complex domain logic or external integrations
└── Support/            # Cross-cutting helpers and utilities
```

---

# 1. Advanced Architecture — The Action Pattern

Instead of bloated services, use **Actions** for specific business tasks.

```php
// app/Actions/Orders/CreateOrderAction.php
public function execute(OrderData $data): Order
{
    return DB::transaction(function () use ($data) {
        $order = Order::create($data->toArray());
        
        // Trigger background tasks
        ProcessPayment::dispatch($order);
        NotifyAdmin::dispatch($order);
        
        return $order;
    });
}
```

**Benefits:**
- Better testability
- Reusable across Controllers, Jobs, and CLI commands
- Follows Single Responsibility Principle (SRP)

---

# 2. Real-Time Capabilities (Laravel Reverb)

Laravel 13 leverages **Reverb** for high-speed, first-party WebSocket support.

- **Use Cases**: Real-time notifications, live dashboards, collaborative editing.
- **Implementation**:
    1. Define Broadcast events.
    2. Use `InteractsWithSockets` trait.
    3. Listen on the frontend using Laravel Echo.

```php
// Broadcast Event
class OrderStatusUpdated implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    public function broadcastOn(): Channel {
        return new PrivateChannel('orders.' . $this->order->id);
    }
}
```

---

# 3. Premium API Standards

### JSON Response Standard (The "Pro" Wrap)

Always return a consistent structure that includes metadata for UI states.

```json
{
  "success": true,
  "status_code": 200,
  "message": "Resource retrieved successfully",
  "data": { ... },
  "meta": {
    "execution_time": "120ms",
    "version": "v1.2.0"
  },
  "links": {
    "self": "https://api.app.com/v1/posts/1"
  }
}
```

### Supporting Skeleton Loaders
- Return minimal "shell" data (IDs, types) quickly for initial render.
- Use **Partial Responses** (`?fields=id,title`) to reduce payload size.

### Optimistic UI Updates
- API should return the **newly created/updated object** immediately.
- Ensure unique IDs (UUID/ULID) are generated or accepted from the client to prevent race conditions.

---

# 4. Performance Optimization

### Redis-First Strategy
- Use Redis for **Caching**, **Sessions**, and **Queues**.
- **Tagged Caching**: `Cache::tags(['users', 'permissions'])->remember(...)` for easy invalidation.

### Query Optimization
- **Eager Loading**: Always use `with()` or `load()`.
- **Query Caching**: Persistent caching for expensive dashboard statistics.
- **Indexes**: Ensure search/filter columns are indexed in MySQL/PostgreSQL.

---

# 5. Security & Scaling

### Authentication & Authorization
- **Sanctum**: SPA and Mobile API authentication.
- **Passport**: Full OAuth2 server if building a public API.
- **Granular Policies**: Every model action should have a corresponding Policy check.

### Rate Limiting
Apply per-user or per-IP rate limits to prevent API abuse.

```php
RateLimiter::for('api', function (Request $request) {
    return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
});
```

---

# 6. Recommended "Pro" Packages

| Category | Package | Purpose |
|----------|---------|---------|
| **Admin Panel** | [Filament](https://filamentphp.com/) | TALL-stack based beautiful admin panels. |
| **Monitoring** | [Laravel Pulse](https://laravel.com/docs/pulse) | Real-time health and performance metrics. |
| **Permissions** | [Spatie Permissions](https://github.com/spatie/laravel-permission) | Comprehensive RBAC system. |
| **Media** | [Spatie MediaLibrary](https://github.com/spatie/laravel-medialibrary) | Pro-level file handling and conversions. |
| **Search** | [Laravel Scout](https://laravel.com/docs/scout) | Algolia / Meilisearch integration. |
| **Documentation**| [Scribe](https://scribe.knuckles.wtf/) | Generate API docs automatically. |

---

# 7. Testing & Quality Assurance

- **Pest PHP**: Prefer Pest for readable, modern testing.
- **Static Analysis**: Use **PHPStan** (Level 8+) or **Larastan**.
- **Code Styling**: Use **Laravel Pint** for consistent formatting.

---

# Goal

To build elite, "Pro Max" backend systems that provide the performance, security, and real-time responsiveness required for world-class user experiences.
 maintainable, secure Laravel 13 backend systems with clean architecture and production-ready engineering standards.