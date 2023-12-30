<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];

            $sql = "INSERT INTO produtos (nome, codigo, descricao, preco) VALUES (
                '{$nome}', '{$codigo}', '{$descricao}', '{$preco}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Produto cadastrado com sucesso!');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";}
            else{
                print "<script>alert('Não foi possivel cadastrar');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];

            $sql = "UPDATE produtos SET 
                        nome='{$nome}',
                        codigo='{$codigo}',
                        descricao='{$descricao}',
                        preco='{$preco}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Produto editado com sucesso!');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";}
            else{
                print "<script>alert('Não foi possivel editar');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";
            }

            break;

        case 'excluir':
            
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Produto excluido com sucesso!');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";}
            else{
                print "<script>alert('Não foi possivel excluir');
                </script>";
                print "<script>location.href='?page=produtos';
                </script>";
            }
            break;
    }