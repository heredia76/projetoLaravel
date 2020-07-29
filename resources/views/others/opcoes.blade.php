@extends('layouts.principal')

@section('titulo','Opcoes')

@section('conteudo')


<div class="options">
    <ul>
        <li><a class="warning" href="{{ route('opcoes',1) }}">warning</a></li>
        <li><a class="info"    href="{{ route('opcoes',2) }}">info</a></li>
        <li><a class="success" href="{{ route('opcoes',3) }}">success</a></li>
        <li><a class="error"   href="{{ route('opcoes',4) }}">error</a></li>
    </ul>
</div>

@if(isset($opcao))
    @switch($opcao)
        @case(1)
            @component('components.alerta',['titulo'=>'warning' , 'tipo'=>'warning'])
            <p><strong>Warning</strong></p>
            @endcomponent
            @break

        @case(2)
            @component('components.alerta',['titulo'=>'info', 'tipo'=>'info'])
            <p><strong>INFO</strong></p>
            @endcomponent            
            @break

        @case(3)
            @component('components.alerta',['titulo'=>'success', 'tipo'=>'success'])
            <p><strong>Sucesso</strong></p>
            @endcomponent            
            @break

        @case(4)
            @component('components.alerta',['titulo'=>'Error Fatal', 'tipo'=>'error'])
            <p><strong>Erro</strong></p>
            @endcomponent            
            @break
        @default
            
    @endswitch
@endif
@endsection







