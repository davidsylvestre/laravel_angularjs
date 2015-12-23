## Curso Laravel + Angularjs

### Fase 1

#### Clients

Nessa fase do projeto, você deverá apresentar um CRUD completo de nosso model Client.
Sempre lembrando que toda a informação resultante deverá ser exibida para o usuário final como um json.
Não se esqueça de utilizar corretamente os verbos HTTP.

### Fase 2

#### Repositores / Services

Agora que já falamos sobre os conceitos de Services e Repositories:

1. Faça o CRUD completo de nossa Entidade Client

2. Crie uma nova entidade chamada Project, onde sua tabela do banco de dados terá:

- id
- owner_id (chave estrangeira para users)
- client_id (chave estrangeira para clients)
- name
- description
- progress
- status
- due_date
- created_at
- updated_at

3. Crie o Repository e Service referente a entidade Project, bem como suas validações, gerando um CRUD completo

4. Na listagem dos dados, traga também as informações sobre o owner_id e client_id (dica: utilize o método do repository: "with")

