#Projeto Simplex

Projeto Simplex e Mochila- Algoritimo


#Integrantes

1. Murilo Martins - 541168
2. Mighuel Lucas Rodrigues - 54293
3. Robson Kumagai - 538371


#Ferramentas

- Wamp Server
- Sublime

#Linguaguem

- PHP

#Conteudo do sistema

- Variaveis Ilimitadas
- Maximizar
- Minimizar
- Analise de Sensibilidade
- Mochila

## Introdução
Este documento provê uma visão geral da versão do aplicativo Simplex que está sendo liberada.
Aqui será descrito as funcionalidades do aplicativo, bem como seus problemas e limitações conhecidos.
Por último são descritas as demandas e os problemas que foram resolvidos para liberação da versão atual.

O Método Simplex é um procedimento matricial usado para resolver os modelos de
programação linear, visando buscar a solução ótima para o problema.

Além disso, há a liberação do aplicativo da Mochila, onde há um problema de otimização combinatória, que leva o mesmo nome. Possui como objetivo a mochila ter o maior valor possível, não ultrapassando o peso máximo dela.

## Nota de release

### Simplex

* Entradas personalizadas para maximização e minimização;
* Quantidade ilimitada de restrições e variáveis;
* Quantidade especifica de iterações;
* Tabela de sensibilidade;
* Possibilidade de mostrar passo a passo ou somente o resultado final;
* Tratamento de erros quanto à expressões erradas ou loop infinito.

### Mochila

* Quantidade de itens ilimitada;
* Tratamento de erros;
* Apreentação da solução, dos itens a serem considerados e a tabela de cálculo.

## Problemas conhecidos e limitações

### Simplex

* As restrições só aceitam "<=" como operador;
* É necessário separar os sinais matemáticos das variáveis com um espaço para não causar erro de interpretação (`e.g.: 3x1 + 2x2`).

### Mochila

* Não pode-se utilizar itens com pesos iguais;
* Somente valores inteiros são permitidos

## Datas importantes

### Simplex

| Data          |  Evento            |
|:-------------:|--------------------|
| 10/03/2016    | Início do projeto.   |
| 14/03/2016    | Análise de tecnologias.   |
| 25/03/2016    | Início do desenvolvimento da aplicação.   |
| 29/03/2016    | Realização dos primeiros testes.  |
| 04/04/2016    | Continuação dos testes (ref. geração das matrizes)    |
| 17/04/2016    | Estrutura da aplicação criada.    |
| 17/04/2016    | Primeiros tratamentos de erros criados.   |
| 23/03/2016    | Finalização da primeira versão.   |
| 24/04/2016    | Criada opção de exibir passo a passo ou somente resultado final.  |
| 24/04/2016    | Variáveis básicas e não básicas incluídas.    |
| 28/04/2016    | Entrega da versão final do projeto(apenas o metedo simplex).   |
| 28/04/2016    | Projeto disponibilizado no github para download (localhost) apenas.  |
|


### Mochila

| Data  | Evento    |
|:-----:|-----------|
| 29/05/2016    | Início do projeto.   |
| 29/05/2016    | Estrutura da aplicação reutilizada do Simplex.   |
| 30/05/2016    | Aplicação base criada.   |
| 30/05/2016    | Layout simples criado.   |

## Compatibilidade

| Requisitos    | Ferramentas   |
|---------------|---------------|
| Navegadores   | Google Chrome, Mozilla Firefox, Opera, Safari, Microsoft Edge e Internet Explorer 9+.     |
| Sistemas Operacionais     | Windows.    |

| Tecnologias   | Descrição |
|:-------------:|-----------|
| Front-end | HTML, Javascript |
| Back-end  | PHP  |
| Frameworks    | Lavarel     |
| Design Pattern    | MVC   |
| Servidor  | LocalHost |


## Atividades realizadas no período

### Simplex

| Código    | Título    | Tarefa    | Situação  |
|:---------:|-----------|-----------|:---------:|
| 1 | Gerar matrizes    | Permitir a criação da primeira matriz.    | Concluído |
| 2 | Interpretar expressões como `3x1 + 2x2`   | Realizar a leitura de valores e variáveis da expressão.   | Concluído |
| 3 | Definir tratamento de erros   | Verificar se o cálculo está correto.  | Concluído |

## Guia de uso do Simplex

### Expressão
Exemplo de expressão:

* Max Z = 3x1 + 5x2
* Min Z = -3x1 - 5x2

### Restrições
Utilize os botões de `+` e `-` para adicionar ou remover as restrições.

Exemplos de restrições:

* x1 <= 4
* x2 <= 6
* 3x1 + 2x2 <= 18

### Apresentação do Resultado
Selecione a forma de apresentação do resultado, todas as iterações ou somente a tabela com o resultado final.

### Maximizar / Minimizar
O resultado é apresentado após o calculo a solução ótima do problema de PL proposto.
Se ao final do processo a solução não for ótima, é porque um dos pontos adjacentes fornece um valor
maior que o inicial.

### Análise de Sensibilidade
 Em desenvolvimento

## Guia de uso da Mochila

### Capacidade
Informe como capacidade o número **4**.

### Itens (pesos e valores)
Utilize os botões de `+` e `-` para adicionar ou remover os itens.

* Coloque **1** no primeiro campo de peso e **31** no campo de valor em frente;
* Clique no botão verde com o ícone de "+";
* Coloque **2** no segundo campo de peso e **47** no campo de valor em frente;
* Clique no botão verde com o ícone de "+";
* Coloque **3** no terceiro campo de peso e **14** no campo de valor em frente.

Deverá ficar desta forma:

| Peso  | Valor |
|:-----:|:-----:|
| 1 | 31    |
| 2 | 47    |
| 3 | 14    |

### Resultado
Após clicar em `Calcular`, serão apresentados os itens escolhidos pelo algoritmo, o resultado da solução ótima e a tabela.
