Considere uma lista ligada simples com três nós:

```rust
1 -> 2 -> 3
```

**A seta -> representa a ligação entre os nós. Inicialmente, temos:**

```bash
$previous = $next = null;
$current = $head; // assumindo que $head seja o primeiro nó (1)
```

**Estado Inicial:**
```php
$previous = null
$current = 1 -> 2 -> 3
$next = null
```

**Agora, vamos entrar no ciclo while para inverter a lista. Vou descrever cada passo com um diagrama:**

**Passo 1:**
```php
$next = $current->next;         // $next = 2
$current->next = $previous;     // inverte a seta, $current = 1 <- null
$previous = $current;           // $previous = 1
$current = $next;               // $current = 2
```

**Estado após Passo 1:**
```bash
$previous = 1
$current = 2 -> 1 -> 3
$next = 2
```

**Passo 2:**

```php
$next = $current->next;         // $next = 3
$current->next = $previous;     // inverte a seta, $current = 2 <- 1
$previous = $current;           // $previous = 2
$current = $next;               // $current = 3
```

**Estado após Passo 2:**
```bash
$previous = 2
$current = 3 -> 2 -> 1
$next = 3
```

**Passo 3:**
```php
$next = $current->next;     // $next = null (fim da lista)
$current->next = $previous; // inverte a seta, $current = 3 <- 2
$previous = $current;       // $previous = 3
$current = $next;           // $current = null (fim da lista)
```

**Estado após Passo 3:**
```php
$previous = 3
$current = null
$next = null
```