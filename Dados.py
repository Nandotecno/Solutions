Hello World
>>> nome='Fernando Cruz'
>>> idade=39
>>> tipo_nome=type(nome)
>>> tipo_idade=type(idade)
>>> print(nome)
Fernando Cruz
>>> print(idade)
39
>>> print(tipo_nome)
<class 'str'>
>>> print(tipo_idade)
<class 'int'>
>>> altura=1.72
>>> type_altura=type(altura)
>>> print(altura)
1.72
>>> print(type_altura)
<class 'float'>
>>> print(nome,'tem',idade,'anos e ',altura,' de altura')
Felipe Maestrello tem 39 anos e  1.72  de altura
>>> str(idade)
'39'
>>> str(altura)
'1.72'
>>> print(nome+' tem'+str(idade)+' anos'+str(altura)+' de altura')
Fernando Cruz tem 39 anos 1.72 de altura
>>> frase=(nome+' tem'+str(idade)+' anos'+str(altura)+' de altura')
>>> print(frase)
Fernando Cruz tem 39 anos 1.72 de altura
