-- Seleciona os campos Nome e Idade da Tabela Pessoa, e os campos Profissão da Tabela Trabalho
-- Organiza as informações de acordo com o id das tabelas
-- Ordena as informações de forma decrescente de acordo com o salário

SELECT Nome, Idade, Profissão, Salário FROM Pessoa, Trabalho
WHERE Pessoa_idPessoa = idPessoa
ORDER BY Salário DESC

-- Troca o nome do campo na hora da exibição

SELECT Profissão AS 'Com o que trabalha', Salário AS 'Quanto ganha' FROM Trabalho