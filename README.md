<p align="center"><img src="http://site.federalst.com.br/fsmail.jpg"></p>


# Teste prático - Federal Soluções Técnicas

Essa é uma resposta ao teste prático solicitado

# Para funcionar
 - Faça o download dos arquivos
 - Abra o terminal e acesse a parta do projeto e execute o comando #composer update
 - Enquanto a ação acima é realizada crie o banco de dados no Postgresql
   nas minha configurações o nome do banco de dados é teste e a senha e login de acesso é postgres.
 - Faça uma cópia do arquivo .env.example e coloqueo o nome como .env
 - Dentro do arquivo .env colo as configurações abaixo, será necessario colocar um email
   válido para que a solução envie uma notificação, coloque os dados onde houve ******
   Ainda, quanto ao banco de dados, você poderá trocar os nomos conforme desejar ou necessidade.



APP_NAME=Laravel<br>
APP_ENV=local<br>
APP_KEY=<br>
APP_DEBUG=true<br>
APP_URL=http://localhost<br>

LOG_CHANNEL=stack

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=teste
DB_USERNAME=postgres
DB_PASSWORD=postgres

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER******
MAIL_HOST******
MAIL_PORT******
MAIL_USERNAME******
MAIL_PASSWORD******
MAIL_ENCRYPTION******

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

 - Terminado de configurar o arquivo .env 
   Abra o terminal e acesse a parta do projeto e execute o comando #php artisan key:generate
 - Ainda com o terminal aberto execute o comando  #php artisan migrate:refresh --seed
 - Execute o comando #php artisan serve e abra em seu navegador o endereço localhost:8000 ou o endereço que o laravel esteja configurado.

Para utilizar o projeto utilize os seguinte usuários

login admin@teste.com.br
senha 123456


login user@teste.com.br
senha 123456

