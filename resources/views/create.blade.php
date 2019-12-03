<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>

    <style>
        body{
            background: #7159C1;
        }
        .form{
            text-align: center;
            background: #23212B;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        input{
            padding: 10px;
            margin: 10px;
            background: none;
            border: 1px solid #66C2DA;
            border-radius: 5px;
            color: white;
        }
        label{
            color: #44be5a;
            font-size: 20px;
        }
        input[type=submit]{
            padding: 10px;
            margin: 10px;
            width: 50%;
            background: #DF6DA7;
            border: 1px solid #44be5a;
            border-radius: 5px;
            font-size: 20px;
            color: white;
        }
    </style>

</head>
    <body>
        <div class="container">
            <div class="form">
                @if(session('success'))
                <p class="alert-success">
                    {{ session('success') }}
                </p>
                @endif

                <form action="{{ url('/create_client') }}" method="post">
                
                    {{ csrf_field() }}

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="name">Digite o nome</label>
                            <input type="text" name="name" placeholder="Ex: Juliana" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Digite o Email</label>
                            <input type="text" name="email" placeholder="Ex: ju@gmail.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Digite o Telefone</label>
                            <input type="text" name="tel" placeholder="Ex: 13982003622" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Digite o tipo</label>
                            <input type="text" name="social" placeholder="Ex: Profissional" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>