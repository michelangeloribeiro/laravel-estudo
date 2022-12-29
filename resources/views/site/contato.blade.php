@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>
    
    <div class="informacao-pagina">
        <div class="contato-principal">
           @component('site.layouts._componets.form_contato', ['classe' => 'borda-preta'])
           <p>A Nossa equipe analisará sua mensagem e retornaremos em breve.</p>
           @endcomponent
        </div>
    </div>  
</div>


@endsection