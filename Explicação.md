# Demonstração - Guia básico

Notei que alguns colegas estavam com dificuldades para entender o professor então resolvi explicar por aqui

## 📝 Requerimentos (caso queira rodar as aplicações na sua máquina)

XAMPP :), não terá slides demonstrando como instalarkkkkkkk

## 🧑‍🏫 Explicação

***Função MÉDIA***

![image](https://github.com/user-attachments/assets/a8028ad7-42f6-4236-953a-c60e5643bd97)

Primeiramente, deve-se criar um formulário HTML para inserção dos dados

![image](https://github.com/user-attachments/assets/d7d03d6a-9efb-4ffe-b9c0-da84e315b6a3)

Note que 'action', responsável por direcionar os dados do formulário, encontra-se vazio pois não há necessidade de direcionamento quando o script em PHP está rodando no mesmo ARQUIVO.

Em seguida, definimos uma função para cálculo da média.

![image](https://github.com/user-attachments/assets/38e4fa80-03c6-48a6-9ea9-c901834437e6)

Após isso, temos uma condição para caso o método HTTP não seja 'POST', o restante do código será executado; seguido de funções nativas 'isset' para determinarem que os campos devem ser declarados; Caso estejam, será atribuído o valor do 'name' do campo HTML, senão, receberam string vazia.

![image](https://github.com/user-attachments/assets/4fd15ef0-9fbd-4a28-9400-e321b81ba229)

Por fim, após utilizar operador lógico '!' com função nativa 'empty' para conferir se o campo nome foi preenchido e operador lógico AND (&&) junto da função nativa 'is_numeric' em '$nota' (assegurar que é um número; Condição 'Else' será ativada caso as condições não sejam atendidas), chamamos a função para cálculo da média e finalizamos com mais uma condição para enviar os dados apenas se o resultado da média não for nulo.

![image](https://github.com/user-attachments/assets/6308a20e-560a-487e-8eb6-6a8aa4ecb819)




### 📚 Observações
  
- não 👍
