<ul>
    <li>
        <a href="{{ route('site.index') }}" title="Principal">Principal</a>
    </li>
    <li>
        <a href="{{ route('site.sobrenos') }}" title="Sobre Nós">Sobre Nós</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}" title="Contato">Contato</a>
    </li>
    <li>
        <a href="{{ route('app.clientes') }}" title="Clientes">Clientes</a>
    </li>
    <li>
        <a href="{{ route('app.fornecedores') }}" title="Fornecedores">Fornecedores</a>
    </li>
    <li>
        <a href="{{ route('app.produtos') }}" title="Produtos">Produtos</a>
    </li>
</ul>

<h3>Fornecedor</h3>

{{-- gerando comentario --}}

@isset($fornecedores)

@forelse (fornecedores as $item)
    
@empty
Não existe cadastros!!!
    
@endforelse

@endisset


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif