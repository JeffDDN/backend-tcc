<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href='{{asset("public/assets/css/style2.css")}}''>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div id="logo">
            <img src="{{url('public/assets/images/QRcode.png')}}" width="90px" height="80px">
        </div>
        <div id="titulo">
            <h1>Painel ADM</h1>
        </div>
    </header>
    <div class="conteudo">
        <section id="navArea">
            <nav>
                <ul class="navLinks">
                    <li>
                        <a href="{{route('code')}}">
                            <div id="qrLink">
                                <ion-icon name="qr-code-outline" size="large"></ion-icon>
                                Qr code
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </a>
                    </li>  
                    <li>
                        <a href="{{route('lista_presenca')}}">
                            <div id="presenceLink">
                                <ion-icon name="document-text-outline" size="large"></ion-icon>
                                Lista de <br> presença
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <div id="table-area">
            @yield('content')
            
        </div> 
    </div> 
    <footer>

    </footer>

    <script type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#presenca').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
                }
            });
           
        } );
    </script>

</body>
</html>