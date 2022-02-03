# Генераторы в примерах

## Что такое генераторы

Генераторы предоставляют лёгкий способ реализации простых итераторов
без использования дополнительных ресурсов или сложностей, связанных 
с реализацией класса, реализующего интерфейс Iterator.

**Iterator** - Интерфейс для внешних итераторов или объектов, 
которые могут повторять себя изнутри.

```php
interface Iterator {
    public current(): mixed
    public key(): mixed
    public next(): void
    ...
}
```

```php
final class Generator implements Iterator {
    public current(): mixed
    public getReturn(): mixed
    public key(): mixed
    public next(): void
    public send(mixed $value): mixed
    ...
}
```