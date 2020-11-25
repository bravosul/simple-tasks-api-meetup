# Simple Task API

## Endpoints

- [POST] https://simple-tasks-api.herokuapp.com/api/signup (parametros: name, email, password) - Criar conta
- [POST] https://simple-tasks-api.herokuapp.com/api/login (parametros: email, password) - Fazer Login
- [GET] https://simple-tasks-api.herokuapp.com/api/tasks - Lista de todas tarefas
- [POST] https://simple-tasks-api.herokuapp.com/api/tasks (parametros: name, description (opicional), finished (default false), color (default #fff)) - Criar tarefa
- [GET] https://simple-tasks-api.herokuapp.com/api/tasks (parametros: id (id da tarefa)) Buscar tarefa a partir do ID
- [PUT] https://simple-tasks-api.herokuapp.com/api/tasks (parametros: id (id da tarefa), name, description, finished, color) - Atualizar tarefa
- [DELETE] https://simple-tasks-api.herokuapp.com/api/tasks (parametros: id (id da tarefa)) - Apagar tarefa

### Mesmos endpoints de tasks porém não precisam estar autenticado

- [GET] https://simple-tasks-api.herokuapp.com/api/no-authenticated/tasks - Lista de todas tarefas
- [POST] https://simple-tasks-api.herokuapp.com/api/no-authenticated/tasks (parametros: name, description (opicional), finished (default false), color (default #fff)) - Criar tarefa
- [GET] https://simple-tasks-api.herokuapp.com/api/no-authenticated/tasks (parametros: id (id da tarefa)) Buscar tarefa a partir do ID
- [PUT] https://simple-tasks-api.herokuapp.com/api/no-authenticated/tasks (parametros: id (id da tarefa), name, description, finished, color) - Atualizar tarefa
- [DELETE] https://simple-tasks-api.herokuapp.com/api/no-authenticated/tasks (parametros: id (id da tarefa)) - Apagar tarefa

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
