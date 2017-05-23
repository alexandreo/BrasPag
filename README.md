# BrasPag
 
Projeto para integração com o modo pagador da BrasPag.

## Instalação
### Composer
Se você já conhece o **Composer**, adicione a dependência abaixo à diretiva *"require"* no seu **composer.json**:
```
"alexandreo/bras-pag": "^1.0"
```

##Documentação da BrasPag
http://www.braspag.com.br/site/wp-content/uploads/manuais/pagador-transaction-autorizacao-captura-cancelamento-e-estorno-v1.15.2.pdf

##Funcionalidades Pagador Transaction.
Autorização, Captura, Cancelamento e Estorno

## Como Usar
Para utilizar ambiente de homologação basta passar como exemplo abaixo.
```php
$brasPag = new BrasPag(false);
```
Para utilizar ambiente de produção basta passar como exemplo abaixo.
```php
$brasPag = new BrasPag(true);
```

##Link de Exemplos
https://github.com/alexandreo/BrasPag/tree/master/examples

