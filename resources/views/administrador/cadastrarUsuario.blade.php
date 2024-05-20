<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

</head>

<body class="d-flex flex-row align-items-center py-4 h-100 text-center form-bodyy text-dark">
    <main class="w-100 m-auto form-container-cadastro   border border-secondary rounded-4">
        <form class="">
            <img src="/img/ifnmg.png" alt="" srcset="" class="mb-4 " width="100">
            <hr>
            <p class="fw-lighter">Cadastrar</p>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black">Nome e Sobrenome</span>
                <input type="text" aria-label="nome" class="form-control bg-transparent text-black">
                <input type="text" aria-label="sobrenome" class="form-control bg-transparent text-black">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black" id="basic-addon2">CPF</span>
                <input type="text" class="form-control bg-transparent text-black" aria-label="senha">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black" id="basic-addon2">Telefone</span>
                <input type="text" class="form-control bg-transparent text-black" aria-label="senha">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black" id="basic-addon2">Email</span>
                <input type="text" class="form-control bg-transparent text-black" aria-label="senha">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black" id="basic-addon1">Usuario</span>
                <input type="text" class="form-control bg-transparent text-black" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text bg-transparent text-black" id="basic-addon2">Senha</span>
                <input type="text" class="form-control bg-transparent text-black" aria-label="senha">
            </div>

            <div class="input-group mb-3 d-flex justify-content-between">
                <select class="rounded-2 bg-light text-dark" aria-label="Large select example">
                    <option selected>Tipo</option>
                    <option value="ADM">Administrador</option>
                    <option value="ALN">Aluno</option>
                    <option value="NTC">Nutricionisa</option>
                    <option value="ASS">Assistente Social</option>
                </select>
            </div>
            <div>
                <button class="btn btn-success w-100 py-2">Salvar</button>

            </div>
        </form>
        <div class="lign-items-center py-2 mt-4">
            <p class="mb-3 mb-md-0 text-dark">Importar Arquivo CSV</p>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
        </div>
        <div class="lign-items-center py-2 mt-4">
            <p class="mb-3 mb-md-0 text-dark">© 2024 Gabriel de Sousa e Victor Dias</p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
