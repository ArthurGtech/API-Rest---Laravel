


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('web.products')}}">Produtos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{route('web.clients')}}">Clientes<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{route('web.newClient')}}">Cadastrar Cliente</a>
        <a class="nav-item nav-link" href="{{route('web.newProducts')}}">Cadastrar Produto</a>
        </div>
    </div>
    </nav>