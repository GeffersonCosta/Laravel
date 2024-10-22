       @extends('layouts.main')
       @section('title', 'Projeto')
       @section('content')
       <h1>Hello World</h1>
        <a id="link" href="/produtos">Pagina produtos</a><br><br>
        <a href="/contato">Pagina contatos</a>
        {{-- Com o blade pode escrever comentarios e não são interpretados pelo navegador e não aparece no inspecionar--}}
       @if($nome == 'Henrique')
        <p>O nome é igual</p>
       @else
        <p>O nome não é igual </p>
       @endif

       @foreach ($arr as $elemento)
        <p>{{$elemento}}</p>
       @endforeach
       <img src="/imagens/foto1.jpg" alt="">
       @endsection

