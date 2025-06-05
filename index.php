<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aula com github</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8">
                <form method="POST">
                    <!--Primeira linha-->
                    <div class="form-group row">
                        <div class="col-12 col-sm-6">
                            <label>Data</label>
                            <input type="date" name="data" id="data" class="form-control">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Tarefa</label>
                            <input type="text" name="tarefa" id="tarefa" class="form-control">
                        </div>
                    </div>

                    <!--Segunda linha-->
                    <div class="form-group row">
                        <div class="col-12">
                            <label>Descrição</label>
                            <input type="text" name="descricao" id="descricao" class="form-control">
                        </div>
                    </div>

                    <!--Terceira linha-->
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-3">
                            <button class="btn btn-primary btn-block btn-lg" type="submit">Cadastrar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8">
                <h1 class="text-center">Lista de Tarefas</h1>
                <div class="alert text-center">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_REQUEST['data' && 'tarefa' && 'descricao'])) {
                                    $id = 1;
                                    $data = $_POST['data'];
                                    $tarefa = $_POST['tarefa'];
                                    $descricao = $_POST['descricao'];
                                    $idcerto = $idcerto + $id;
                                    echo '
                                            <tr>
                                                <th scope="row">' . $id . '</th>
                                                <td>' . $data . '</td>
                                                <td>' . $tarefa . '</td>
                                                <td>' . $descricao . '</td>
                                                <td><button class="btn btn-primary btn-block btn-lg" type="submit">Cadastrar</button> </td>
                                            </tr>
                                        ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>