# commands

- création des tables

```bash
php artisan make:migration products
php artisan make:migration orders
```

- création des modals

```bash
php artisan make:modal Product
php artisan make:modal Order
```

## MLD 

- Product (id, nom, description, prix, created_at, updated_at)
- Order (id, nom, description, quantity, productId, created_at, updated_at)