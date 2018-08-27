# wrapper-para-a-pdo-inicio
Repositório inicial para o assignement "wrapper-para-a-pdo"

Bom dia, Turma 3!
Um wrapper é uma ou mais classes que encapsulam a funcionalidade de outras classes/bibliotecas/componentes para facilitar o seu uso.
O trabalho consiste na criação de um wrapper para a PDO.
Instruções e dicas para o seu trabalho:
1.OK	Deve possuir uma classe Config que constrói um objeto que possui os atributos: tipo, host, porta, base, usuario, senha e dsn;
2.	Deve possuir uma classe Base que recebe em seu construtor um objeto Config por injeção de dependência. Esta classe deve possuir o atributo: objetoPDO e os métodos conectar, preparar e desconectar. 
1.	O método conectar deve atribuir ao atributo obetoPDO um objeto PDO;
2.	O método preparar deve receber uma string SQL e retornar um objeto PDOStatement; Desconsiderar trabalhar com prepared statements para simplificar as coisas.
3.	O método desconectar deve atribuir NULL para o atributo objetoPDO, causando portanto a desconexão com a base;
3.	Não perca tempo com CSS/JavaScript/etc... Esse trabalho é de backend.
Para realizar o trabalho vocês dvem possuir uma conta no github e "aceitar" o trabalho através desse link: https://classroom.github.com/a/2PeHLsbl

Ao aceitar o trabalho o Github Classroom automaticamente criará um fork do repositório na sua conta, que contém, além dos diretórios,  um pequeno banco de dados MySQL para que vocês possam usar (diagrama e script SQL para criar o banco na máquina de vocês).
O repositório inicial ainda contém um pequeno exemplo de implementação para que vocês entendam o que se espera do funcionamento desse wrapper.

Evidentemente que o trabalho de vocês deve fazer um CRUD (Insert, Select, Update e Delete), comprovando o funcionamento. Podem fazer o CRUD em apenas uma tabela (categoria, por exemplo, a mais simples das duas) para facilitar a vida, sem problema.

A entrega do trabalho é feita através de commits/pushs no fork de cada um de vocês.
O prazo para entrega do trabalho é 27 de Agosto, impreterivelmente (isso é automatizado no Github Classroom: depois do dia 27 o trabalho é automaticamente fechado, ou seja qualquer commit/push após essa data é automaticamente desconsiderado pelo Classroom).

Se precisarem de ajuda me mandem um e-mail com o assunto começando por "Pós Alfa" para que seja fácil de eu detectar os e-mails de vocês. Prometo tentar ajuar co mais rápido possível cada um(a) de vocês.

Boa sorte! 
