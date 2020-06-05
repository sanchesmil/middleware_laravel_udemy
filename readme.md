
## Projeto Middleware em Larvel

Este projeto demonstra o uso de middlewares para interceptação de requisições HTTP em Laravel.

### O que é um Middleware?

O Middleware é um mecanismo de filtragem de requisições HTTP.

Ele permite ou barra determinados fluxos de requisição que entram na sua aplicação, 
baseado em regras pré-definidas.

Por exemplo, o Middleware de autenticação do Laravel verifica se um usuário está autenticado no sistema. Caso não esteja, o sistema barra a requisição antes mesmo de chegar ao Controlador.

No Laravel existem os Middlewares de Rota, os Middlewares Globais e os Grupos de Middlewares.

Middlewares adicionais podem ser escritos para executar uma variedade de tarefas além da autenticação. Um middleware de log pode registrar todas as solicitações recebidas no seu aplicativo. Um middleware também pode validar se o usuário concordou com os termos de uso 
ou se o usuário tem permissão para fazer algo ou verificar se quem está tentando
acessar a rota é um bot. 

Em fim, com Middlewares pode-se fazer qualquer coisa com a requisição antes dela prosseguir.

### Exemplo de uso de middleware para realizar 'LOG'

Neste projeto foram criados 3 middlewares que usam a fachada 'LOG' 
para registrar o acesso às rotas web.

A fachada 'LOG' cria um arquivo de Log na raiz do diretório 'storage'.
Todas as vezes que os middlewares de Log são acionados, armazenam uma 
nova linha de registro neste arquivo.