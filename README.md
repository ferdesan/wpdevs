## Dados do WP-Admin

- u:
- p:
- email:

## Dados do MySQL

- u:wordpress
- p:wordpress
- db:wordpress

## Variaveis de ambiente .env

- MYSQL_ROOT_PASSWORD:
- MYSQL_DATABASE:
- MYSQL_USER:
- MYSQL_PASSWORD:
- MYSQL_ROOT_PASSWORD:
- WORDPRESS_DB_HOST: #db
- WORDPRESS_DB_USER:
- WORDPRESS_DB_PASSWORD:
- WORDPRESS_DB_NAME:

## Ajuste de links via banco wp_optiosn, wp_posts e wp_postmeta

- UPDATE wp_posts SET guid = replace(guid, 'http://localhost:8181', 'http://localhost:3000');
- UPDATE wp_posts SET post_content = replace(post_content, 'http://localhost:8181', 'http://localhost:3000');
- UPDATE wp_postmeta SET meta_value = replace(meta_value, 'http://localhost:8181', 'http://localhost:3000');
  - Na tabea tw_optios ajustar o endereço da coluna option_value nas duas linhas que tenha o valor siteurl e home na colona option_name.

## Comando para iniciar e parar um container

- docker-compose up -d
- docker-compose down #mantem os dados na
- docker-compose down --volumes #elimina os dados

## Para parar todos os contêineres Docker em execução, você pode usar o comando

- docker stop $(docker ps -q)

- Remover várias imagens;
  Há uma forma de remover mais de uma imagem por vez quando você quiser remover diversas imagens. Para fazer isso, obtenha os IDs das imagens listando todas elas e execute o comando a seguir.
- docker rmi <id-da-imagem> <id-da-imagem> ...

Escreva os IDs das imagens no comando acima com espaços entre eles.

Remover todas as imagens ao mesmo tempo
Para remover todas as imagens, há um comando que faz isso:

- docker rmi $(docker images -q)
