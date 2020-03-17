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
<br>
LOG_CHANNEL=stack<br>
<br>
DB_CONNECTION=pgsql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=5432<br>
DB_DATABASE=teste<br>
DB_USERNAME=postgres<br>
DB_PASSWORD=postgres<br>
<br>
BROADCAST_DRIVER=log<br>
CACHE_DRIVER=file<br>
SESSION_DRIVER=file<br>
SESSION_LIFETIME=120<br>
QUEUE_DRIVER=sync<br>
<br>
REDIS_HOST=127.0.0.1<br>
REDIS_PASSWORD=null<br>
REDIS_PORT=6379<br>
<br>
MAIL_DRIVER******<br>
MAIL_HOST******<br>
MAIL_PORT******<br>
MAIL_USERNAME******<br>
MAIL_PASSWORD******<br>
MAIL_ENCRYPTION******<br>
<br>
PUSHER_APP_ID=<br>
PUSHER_APP_KEY=<br>
PUSHER_APP_SECRET=<br>
PUSHER_APP_CLUSTER=mt1<br>
<br>
MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"<br>
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"<br>
<br>
<br>
 - Terminado de configurar o arquivo .env 
   Abra o terminal e acesse a parta do projeto e execute o comando #php artisan key:generate
 - Ainda com o terminal aberto execute o comando  #php artisan migrate:refresh --seed
 - Execute o comando #php artisan serve e abra em seu navegador o endereço localhost:8000 ou o endereço que o laravel esteja configurado.

Para utilizar o projeto utilize os seguinte usuários

login admin@teste.com.br
senha 123456


login user@teste.com.br
senha 123456

