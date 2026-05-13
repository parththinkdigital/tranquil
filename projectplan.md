
You are a senior Laravel 13 engineer and MySQL architect. Build a production-ready real estate website with an admin dashboard, agent workflows, and public property browsing.

Tech stack:
- Backend: Laravel 13
- Database: MySQL 8+
- Frontend: Blade templates + Tailwind CSS
- Authentication: Laravel session auth for web, optional Sanctum only if API access is needed
- Roles: Admin, Agent, Buyer/Visitor
- Storage: local in development, S3-compatible storage in production
- Queue: Redis preferred, database queue acceptable for MVP
- Search: MySQL full-text search for MVP, architecture must allow later upgrade to Meilisearch/Algolia
- Maps: latitude/longitude support and nearby property search
- SEO: slug-based URLs and metadata support

Project goal:
Build a real estate platform where:
1. Admin can manage users, agents, property listings, categories, locations, amenities, media, inquiries, and site settings.
2. Agents can create and manage their own listings, upload images, update property status, and respond to inquiries.
3. Buyers/visitors can browse listings, filter/search properties, save favorites, submit inquiries, and request viewings.
4. The site must be fast, secure, scalable, and easy to extend.

Functional requirements:
- Property listing CRUD
- Property gallery with multiple images and primary image
- Property status: draft, pending_review, published, sold, rented, archived
- Search and filters:
  - keyword
  - city
  - locality
  - property type
  - price range
  - bedrooms
  - bathrooms
  - furnished/unfurnished
  - available for sale/rent
  - amenities
  - map radius search
- Favorites / saved properties
- Contact inquiry form
- Schedule a viewing
- Lead tracking for inquiries
- Agent profile pages
- Property slug URLs for SEO
- Admin moderation workflow
- Notifications by email and database
- Audit log for important actions
- Dashboard analytics:
  - views
  - inquiries
  - favorites
  - published properties
- Media optimization for images
- Basic CMS pages:
  - About
  - Contact
  - Privacy Policy
  - Terms
- Multi-language-ready structure
- Rate limiting and spam protection
- Backup-friendly schema and migration strategy

Engineering standards:
- Use Laravel MVC cleanly
- Keep controllers thin
- Put business logic in services/actions, not in controllers
- Use Form Request classes for validation
- Use Policies for authorization
- Use Resources for JSON responses if API endpoints are created
- Use Eloquent relationships properly
- Prevent N+1 queries with eager loading
- Use transactions for multi-step writes
- Queue heavy tasks like image processing, notifications, exports, and indexing
- All admin-only actions must be protected
- All agent actions must be limited to owned records unless admin override exists
- All public queries must be safe, paginated, and indexed
- Never trust client input for sorting or filtering without whitelisting

Folder structure to follow:
app/
  Actions/
  DTOs/
  Enums/
  Events/
  Exceptions/
  Http/
    Controllers/
    Requests/
    Resources/
    Middleware/
  Jobs/
  Models/
  Policies/
  Services/
  Support/
  Traits/

Core database entities:
- users
- roles / permissions or equivalent RBAC tables
- properties
- property_images
- property_features or property_amenities pivot
- categories / property_types
- locations or area data
- favorites
- inquiries
- viewing_requests
- leads
- property_views or analytics table
- notifications
- activity_logs
- settings

Implementation rules:
1. Use UUIDs only if truly needed; otherwise use bigint primary keys for performance and simplicity.
2. Every foreign key must be constrained.
3. Every searchable field must be indexed where appropriate.
4. Add unique indexes for slugs, emails, and any true identity field.
5. Use soft deletes only where business logic requires restore capability.
6. Store money as decimal, never float.
7. Store lat/lng as decimal columns and optionally a spatial column if needed.
8. Use slugs generated from title plus a unique suffix if necessary.
9. Keep listing status and approval status separate.
10. Never store multiple values in one column if normalization is practical.
11. Keep admin filters, public filters, and reporting queries optimized separately.
12. Do not overuse joins in the hot path; use relationships and selective columns.
13. Write migration files that can be rolled back safely.
14. Add factory and seeder coverage for all core tables.
15. Add feature tests for all critical flows.

Authentication and roles:
- Buyers/visitors can browse public content without login.
- Buyers must log in to save favorites, submit protected actions, or manage their profile.
- Agents must log in to create and manage listings.
- Admin must have full access.
- Build role-based access using policies and middleware.
- If permissions are needed, use a mature RBAC pattern and keep it consistent.

Property workflow:
1. Agent creates property draft.
2. Agent adds details, amenities, location, price, and media.
3. Property can be submitted for review.
4. Admin approves or rejects.
5. Once published, the property appears publicly.
6. Buyers can save, inquire, and request viewing.
7. Admin/agent receives notifications and lead records are created.

Media workflow:
- Upload images safely
- Validate file type and size
- Store originals and optimized variants
- Generate thumbnail, medium, and large versions
- Queue heavy image processing
- Keep one primary image
- Allow reordering gallery images
- Allow delete and replace flows

Search and SEO workflow:
- Search listing pages by keyword and filters
- Use paginated results
- Use canonical URLs
- Generate slugs for all public property pages
- Support meta title, description, and og tags
- Support sitemap generation
- Support structured data for property pages if possible

Admin dashboard:
- Property moderation
- User and agent management
- Inquiry inbox
- Viewing request management
- Featured properties
- CMS page editing
- Activity logs
- Basic reports
- System settings

Lead handling:
- Every inquiry should create a lead record
- Leads should track source, property, assigned agent, status, notes, follow-up dates, and conversion status
- Support statuses like new, contacted, qualified, closed, lost
- Log owner changes and contact actions

Performance requirements:
- Paginate every list endpoint/page
- Use eager loading
- Add database indexes for all frequent filters
- Cache high-traffic sections like featured listings and homepage blocks
- Use route, config, and view caching in production
- Use queues for non-blocking work
- Add rate limiting on login, inquiry forms, and search abuse
- Avoid unnecessary queries in Blade templates

Security requirements:
- Validate all input
- Escape all output in Blade unless explicitly safe
- Use CSRF protection
- Use authorization checks for all restricted actions
- Restrict admin routes by middleware
- Store passwords using Laravel defaults
- Never expose sensitive data in logs or responses
- Use secure upload handling
- Protect against mass assignment
- Whitelist sortable and filterable columns
- Add honeypot or captcha-style defense for spam forms if needed

Testing requirements:
- Feature tests for:
  - public property listing
  - property detail page
  - search/filter
  - favorite flow
  - inquiry submission
  - agent property creation
  - admin approval flow
  - unauthorized access rejection
- Unit tests for:
  - pricing helpers
  - slug generation
  - filtering logic
  - lead status transitions
- Use factories and seeders in tests
- Make tests run in CI

Deployment requirements:
- Production env must have APP_DEBUG=false
- Use optimized caching commands
- Use database migrations on deploy
- Configure queue worker supervision
- Configure storage link
- Add health check endpoint
- Backup database regularly
- Store secrets only in environment variables
- Log to a production-grade log channel

Deliverables:
1. Fully working Laravel application
2. MySQL migrations and seeders
3. Blade UI pages with Tailwind
4. Admin dashboard
5. Agent dashboard
6. Public property browsing pages
7. Search/filter system
8. Favorites and inquiries
9. Lead management
10. Tests
11. Deployment notes

Output format:
- First, create the plan and file structure.
- Then implement migrations and models.
- Then build controllers, requests, policies, services, routes, and Blade pages.
- Then add tests.
- Then document setup and deployment.
- Ensure every file is production-ready and internally consistent.
```

Project plan for the coding agent:

Phase 1: foundation

* Set up Laravel 13 project
* Configure MySQL
* Configure auth scaffolding
* Create role system
* Build base layouts and Tailwind structure
* Add admin/agent/public route groups

Phase 2: database and models

* Create users, roles, permissions
* Create properties, property_images, favorites, inquiries, viewing_requests, leads
* Add categories, amenities, locations, settings, activity logs
* Add factories and seeders

Phase 3: backend workflows

* Property CRUD
* Media upload and optimization
* Inquiry and lead pipeline
* Favorites
* Viewing requests
* Admin approval workflow
* Notification system
* Search/filter service
* SEO slug system

Phase 4: frontend pages

* Home page
* Property listing page
* Property detail page
* Search results
* Agent dashboard
* Admin dashboard
* Login/register/profile
* Static CMS pages

Phase 5: hardening

* Validation
* Policies
* Rate limiting
* Caching
* Queue jobs
* Logging
* Audit trail
* Performance tuning

Phase 6: quality and release

* Feature/unit tests
* Seeded demo data
* Deployment checklist
* Backup and recovery notes
* Final code review



