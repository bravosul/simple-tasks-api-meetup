# Simple Task API

## Endpoints

- [POST] $HOST/api/signup (parametros: name, email, password) - Criar conta
- [POST] $HOST/api/login (parametros: email, password) - Fazer Login
- [GET] $HOST/api/tasks - Lista de todas tarefas
- [POST] $HOST/api/tasks (parametros: name, description (opicional), finished (default false), color (default #fff)) - Criar tarefa
- [GET] $HOST/api/tasks (parametros: id (id da tarefa)) Buscar tarefa a partir do ID
- [PUT] $HOST/api/tasks (parametros: id (id da tarefa), name, description, finished, color) - Atualizar tarefa
- [DELETE] $HOST/api/tasks (parametros: id (id da tarefa)) - Apagar tarefa

### Mesmos endpoints de tasks porém não precisam estar autenticado

- [GET] $HOST/api/no-authenticated/tasks - Lista de todas tarefas
- [POST] $HOST/api/no-authenticated/tasks (parametros: name, description (opicional), finished (default false), color (default #fff)) - Criar tarefa
- [GET] $HOST/api/no-authenticated/tasks (parametros: id (id da tarefa)) Buscar tarefa a partir do ID
- [PUT] $HOST/api/no-authenticated/tasks (parametros: id (id da tarefa), name, description, finished, color) - Atualizar tarefa
- [DELETE] $HOST/api/no-authenticated/tasks (parametros: id (id da tarefa)) - Apagar tarefa

## Headers 

Para mandar as requisições quando estiver autenticado é preciso passar como Header os seguintes parâmetros
```json
{
    "Content-Type": "application/json",
    "X-Requested-With": "XMLHttpRequest",
    "Authorization": "Bearer token_retornado"
}
```

## Ideias para implementar

- Usuario ser dono de uma task
- Ter subtasks
- Anexar imagem a task
