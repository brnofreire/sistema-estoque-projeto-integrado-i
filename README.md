Como testar o projeto 

Passo 1: Instalar o WAMP 

Baixe o WAMP: Acesse o site oficial do WAMP (https://www.wampserver.com/) e baixe a versão mais recente. 

Instale o WAMP: Execute o instalador e siga as instruções na tela. Escolha a versão do PHP que você deseja usar e complete a instalação. 

Passo 2: Colocar o Projeto na Pasta Correta 

Localize a pasta do WAMP: Por padrão, o WAMP é instalado em C:\wamp ou C:\wamp64 (para a versão de 64 bits). 

Coloque seu projeto na pasta www: Copie ou mova a pasta do seu projeto PHP para dentro da pasta www (por exemplo, C:\wamp\www\seu_projeto). 

Passo 3: Iniciar o WAMP 

Inicie o WAMP: Clique no ícone do WAMP na área de notificação (canto inferior direito da tela). O ícone deve ficar verde, indicando que o servidor Apache e o MySQL estão funcionando corretamente. 

Verifique o status do WAMP: Se o ícone estiver laranja ou vermelho, pode haver um problema com o Apache ou o MySQL. Você pode tentar reiniciar o WAMP ou verificar se outra aplicação está usando as mesmas portas. 

Passo 4: Acessar o Projeto no Navegador 

Abra o navegador: Abra o seu navegador de internet preferido. 

Digite a URL do seu projeto: No campo de endereço, digite http://localhost/seu_projeto, substituindo seu_projeto pelo nome da pasta que você criou na pasta www. 

Acesse o projeto: Pressione Enter e seu projeto PHP deve ser carregado. 

Passo 5: Configurar o Banco de Dados*** 

Se o seu projeto utiliza um banco de dados: 

Acesse o phpMyAdmin: No navegador, digite http://localhost/phpmyadmin. 

Crie um banco de dados: Use a interface do phpMyAdmin para criar um novo banco de dados e importar dados, se necessário. 

Configure a conexão com o banco de dados: Certifique-se de que as credenciais de acesso ao banco de dados no seu projeto estão corretas. 

No campo/aba (SQL) rode o seguinte comando para criar o banco de dados: 

CREATE TABLE produtos ( 

    id INT AUTO_INCREMENT PRIMARY KEY, 

    nome VARCHAR(100) NOT NULL, 

    categoria VARCHAR(50), 

    quantidade INT DEFAULT 0, 

    preco DECIMAL(10, 2), 

    localizacao VARCHAR(50) 

);
