---
name: database-mysql
description: Use this skill whenever the user needs to design, optimize, normalize, query, secure, migrate, or manage MySQL databases for web applications, APIs, SaaS platforms, dashboards, admin panels, or backend systems. Trigger this skill for schema design, indexing, relationships, performance optimization, query writing, migrations, backups, and production database workflows.
compatibility:
  - MySQL 8+
  - MariaDB
  - Laravel
  - PHP Applications
---

# Database MySQL Pro Max Skill

## Purpose

This skill helps design elite, scalable, and high-performance MySQL databases. It focuses on modern MySQL 8+ features like JSON documents, CTEs (Common Table Expressions), and advanced indexing strategies to support complex dynamic UIs and high-traffic systems.

---

# Core Principles

- **Data Integrity Over Speed**: Use foreign keys and constraints unless performance absolutely forbids it.
- **Query Optimization First**: Analyze execution plans early with `EXPLAIN ANALYZE`.
- **Flexible Schemas**: Leverage JSON columns for semi-structured data.
- **Consistent Precision**: Use `DECIMAL` for currency and `BIGINT` for primary keys.
- **Security by Default**: Principle of least privilege for database users.

---

# 1. Advanced Data Types (MySQL 8+)

### JSON Document Storage
Use for flexible attributes that don't need strict relational mapping (e.g., UI preferences, custom fields).

```sql
CREATE TABLE users (
    settings JSON,
    INDEX ((CAST(settings->>"$.theme" AS CHAR(10))))
);
```

### Spatial Data (Geographical)
Use for maps and location-based services.

```sql
CREATE TABLE stores (
    location POINT SRID 4326 NOT NULL,
    SPATIAL INDEX(location)
);
```

---

# 2. Modern Identifier Strategies

### UUID vs ULID
- **UUID (v7)**: Lexicographically sortable and globally unique. Ideal for distributed systems.
- **ULID**: Similar to UUID but more compact and human-readable.
- **Why?**: Prevents ID enumeration and makes database merges easier.

### Primary Key Standard
Use `BIGINT UNSIGNED` or `UUID` (v7) for all primary keys.

---

# 3. Naming & Structure Conventions

### Tables
- Use plural `snake_case` (e.g., `audit_logs`, `project_members`).
- Pivot tables: alphabetically sorted singular names (e.g., `category_post`).

### Essential Columns for Master Tables
- `id` (Primary Key)
- `uuid` (Optional, for public API exposure)
- `created_at` / `updated_at` (Timestamps)
- `deleted_at` (For soft deletes)
- `created_by` / `updated_by` (For audit trails)

---

# 4. High-Performance Indexing

### Composite Indexes
Order matters! `INDEX(last_name, first_name)` is different from `INDEX(first_name, last_name)`.

### Covering Indexes
Ensure the index contains all columns requested by the `SELECT` to avoid "jumping" to the data table (Bookmark lookup).

### Functional Indexes
Index based on an expression:
`INDEX ((LOWER(email)))`

---

# 5. Query Optimization & Analysis

### The "Explain" Workflow
1. Use `EXPLAIN ANALYZE SELECT ...` to see the actual execution path.
2. Look for `Full Table Scan` (Bad) vs `Index Scan` (Good).
3. Check `rows` examined vs `rows` returned.

### Common Table Expressions (CTEs)
Use for complex, readable queries instead of nested subqueries.

```sql
WITH regional_sales AS (
    SELECT region, SUM(amount) as total FROM sales GROUP BY region
)
SELECT * FROM regional_sales WHERE total > 10000;
```

---

# 6. Advanced Scaling Patterns

### Read/Write Splitting
- **Primary Node**: Handles all `INSERT`, `UPDATE`, `DELETE`.
- **Replica Nodes**: Handles all `SELECT` queries.

### Multi-Tenancy Patterns
1. **Database-per-tenant**: Best isolation, highest overhead.
2. **Schema-per-tenant**: Good isolation, complex migrations.
3. **Column-based (tenant_id)**: Most common, easiest to scale, requires strict scoping.

---

# 7. Security Best Practices

- **Encryption at Rest**: Ensure the underlying storage is encrypted.
- **TLS/SSL**: Enforce encrypted connections between App and DB.
- **Audit Logging**: Use triggers or application-level logs (e.g., Spatie ActivityLog) to track data changes.
- **Least Privilege**: Application user should only have `SELECT, INSERT, UPDATE, DELETE` (No `DROP` or `TRUNCATE`).

---

# 8. Maintenance & Production Checklist

- [ ] **Slow Query Log**: Enabled with a threshold (e.g., 500ms).
- [ ] **Backups**: Daily snapshots + Continuous Point-in-Time Recovery (PITR).
- [ ] **Connection Pooling**: Use tools like `ProxySQL` if handling 10k+ concurrent connections.
- [ ] **Character Set**: Use `utf8mb4` for full emoji support.

---

# Goal

To design and manage industrial-grade MySQL databases that are robust, highly performant, and capable of scaling to millions of records while supporting innovative frontend features.