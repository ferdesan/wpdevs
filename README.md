## Dados do WP-Admin
u:  
p:  
email:  

## Dados do MySQL 
u:wordpress
p:wordpress
db:wordpress

## Comando para iniciar e parar um container
- docker-compose up -d
- docker-compose down #mantem os dados
- docker-compose down --volumes #elimina os dados

## Para parar todos os contêineres Docker em execução, você pode usar o comando 
- docker stop $(docker ps -q)

Remover várias imagens
Há uma forma de remover mais de uma imagem por vez quando você quiser remover diversas imagens. Para fazer isso, obtenha os IDs das imagens listando todas elas e execute o comando a seguir.
- docker rmi <id-da-imagem> <id-da-imagem> ...

Escreva os IDs das imagens no comando acima com espaços entre eles.

Remover todas as imagens ao mesmo tempo
Para remover todas as imagens, há um comando que faz isso: 
- docker rmi $(docker images -q)

