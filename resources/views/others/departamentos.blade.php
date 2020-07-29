@extends('layouts.principal')
@section('titulo','Departamentos')
@section('conteudo')
    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletrônicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>
    @component('components.alerta',['titulo'=>'Error Fatal', 'tipo'=>'error'])
        <p><strong>Erro inesperado</strong></p>
    @endcomponent

    @component('components.alerta',['titulo'=>'success', 'tipo'=>'success'])
    <p><strong>Erro inesperado</strong></p>
    @endcomponent

    @component('components.alerta',['titulo'=>'info', 'tipo'=>'info'])
    <p><strong>Erro inesperado</strong></p>
    @endcomponent

    @component('components.alerta',['titulo'=>'warning' , 'tipo'=>'warning'])
    <p><strong>Erro inesperado</strong></p>
    @endcomponent
    
@endsection