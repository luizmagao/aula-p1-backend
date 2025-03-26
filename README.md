# Instalar bootstrap5 - frontend no laravel


### 1. Acessar o bootstrap5.
https://getbootstrap.com/docs/5.3/getting-started/vite/

### 2. Instalar o popper no projeto laravel
```bash
npm i --save bootstrap @popperjs/core
```

### 3. Instalar SASS
```bash
npm i --save-dev sass
```

### 4. Crie um arquivo
```bash
touch resourses/scss/app.scss
```

### 4. Conteúdo do arquivo `app.scss`
```scss
// Import all of Bootstrap's CSS
@import "bootstrap/scss/bootstrap";
```

### 5. Criaremos o layout
```bash
touch resourses/views/layouts/app.blade.php
```
Usar a `tag` para estender o layout para outras `actions`:
```php
@yield('content')
```

### 6. Verificar arquivo vite:
```bash
 vite.config.js
```
Usar a `tag` para estender o layout para outras `actions` adicionando após o arquivo css: `resources/sass/app.scss`:
```js
input: ['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'],
```

### 7. Para finalizarmos o processo:
- Devemos abrir uma visão e estender essa visão para o layout que desejamos que a mesma tenha referencia usando as tags: `extends` e a `content`