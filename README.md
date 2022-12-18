# Desafio aplicação de cadastro de veículos e manutenção
O desafio consiste na construção de uma aplicação para o cadastro de veículos, com a possibilidade do usuário cadastrado agendar 
manutenções para o veículo cadastrado.

## Estrutura de dados

O veículo aceita o nome do proprietário, uma marca, um modelo, o ano do modelo e uma placa[para individualizar para veículo]. A manutenção aceita um veículo cadastrado, uma data[dia e hora], uma descrição
do serviço a ser realizado e o status da manutenção.

## A resolução
Para a criação da aplicação, foram utilizados diversos recursos oferecidos pelo Laravel, como as migrations, as policies,
os form requests validators, para assim, chegar ao resultado esperado.
<br>
Os requests validators foram utilizados para validar os campos de criação e edição de veículos, assim como para
os campos de criação e edição de manutenções.
<br>
Para individualizar o cadastro de cada veículo, utilizado como critério a placa do veículo, que é um campo disponível para o usuário
quando vai criar um novo registro de veículo, para tanto, definido o campo como `unique` na vehicle migration.

## Rotas

### Home rotas

| Método HTTP | Endpoint  | Descrição                                                |
|-------------|-----------|----------------------------------------------------------|
| GET         | `/`       | Retorna as manutenções agendadas para os próximos 7 dias |
| GET         | `/logout` | Desloga o usuário autenticado                            |

### Rotas de veículos

| Method HTTP | Endpoint              | Description                                              |
|-------------|-----------------------|----------------------------------------------------------|
| GET         | `/vehicles`           | Retorna os veículos cadastrados pelo usuário autenticado |
| GET         | `/vehicles/{id}`      | Retorna os dados de determinado veículo                  |
| GET         | `/vehicles/create`    | Retorna a view de cadastro de veículos                   |
| POST        | `/vehicles/`          | Cadastra um novo veículo                                 |
| POST        | `/vehicles/{id}/edit` | Retorna a view de edição de determinado veículo          |
| PATCH       | `/vehicles/{id}`      | Edita um determinado veículo                             |
| DELETE      | `/vehicles/{id}`      | Deleta um determinado veículo                            |

### Rotas de manutenções

| Method HTTP | Endpoint                  | Description                                                 |
|-------------|---------------------------|-------------------------------------------------------------|
| GET         | `/maintenances`           | Retorna as manutenções cadastradas pelo usuário autenticado |
| GET         | `/maintenances/{id}`      | Retorna os dados de uma determinada manutenção              |
| GET         | `/maintenances/create`    | Retorna a view para a criação de uma manutenção             |
| POST        | `/maintenances/`          | Cadastra uma nova manutenção                                |
| POST        | `/maintenances/{id}/edit` | Retorna a view de edição de determinada manutenção          |
| PATCH       | `/maintenances/{id}`      | Edita uma determinada manutenção                            |
| DELETE      | `/maintenances/{id}`      | Deleta uma determinada manutenção                           |



## Rodando o projeto
```
# clone o repositório
$ git clone git@github.com:thalesmengue/supera-inovacao.git

# instale as dependências do projeto
$ composer install

# copie o arquivo .env do projeto
$ cp .env.example .env

# configure o arquivo .env com as credenciais do seu banco de dados

# gere a chave da aplicação
$ php artisan key:generate

# rode as migrations
$ php artisan migrate

# popule os dados iniciais
$ php artisan db:seed --class=StatusSeeder
$ php artisan db:seed --class=UserSeeder
$ php artisan db:seed --class=VehicleSeeder
$ php artisan db:seed --class=MaintenanceSeeder

# instale os pacotes do node
$ npm install

# compile os assets
$ npm run build

# inicie o servidor
$ php artisan serve
```

Com todos os comandos anteriores realizados, o projeto deve estar pronto para utilização, e um
usuário com e-mail `admin@test.com` e senha `password` foi criado para o teste do sistema.
<br>
A atualização do status da manutenção deve ser feita de forma manual, por meio da edição, ou por meio da execução do
comando `php artisan update:maintenance-status`, que verifica se a data da atualização é igual a data da execução do comando
ou se é anterior a execução do comando e altera o status da manutenção para `Completed`.
<br>
A execução do comando poderia ser configurado na schedule do Laravel, para que seja executado diariamente, por exemplo, mas
para tanto, é necessário a configuração de um cron job no servidor, que não foi feita para o teste do sistema. Caso desejem, podem realizar,
visto que deixei pronto o comando para a execução no schedule.

## Technologies

- [PHP 8.0.2](https://www.php.net/docs.php)
- [Laravel 9.19](https://laravel.com/docs/9.x/installation)
- [TailwindCSS 3.1.0](https://tailwindcss.com/docs/installation)
