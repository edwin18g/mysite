# Minimal CodeIgniter-style PHP micro-framework

This is a minimal PHP project scaffold providing a CodeIgniter-style routing convention: `/controller/method/params`.

Quick start:

1. From project root run the built-in PHP server:

```bash
php -S localhost:8000
```

2. Open `http://localhost:8000/` or `http://localhost:8000/home/index`

Project structure:

- `public/` - webroot with `index.php` front controller
- `app/controllers/` - controller classes
- `app/core/` - base controller and core helpers
- `app/views/` - view templates

Next steps:

- Add more controllers in `app/controllers/`
- Add models and autoloading as needed
