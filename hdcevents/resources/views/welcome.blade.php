       @extends('layouts.main')
       @section('title', 'Projeto')
       @section('content')
        {{-- Com o blade pode escrever comentarios e não são interpretados pelo navegador e não aparece no inspecionar--}}
       <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
       </div>
       <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
          @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/imagens/foto1.jpg" alt="{{$event['title']}}">
                <div class="card-body">
                    <p class="card-date">10/09/2024</p>
                    <h5 class="card-title">{{$event['title']}}</h5>
                    <p class="card-participants">{{$participante++}}-Participantes</p>
                    <p class="card-participants">{{$event['description']}}</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
          @endforeach
        </div>
       </div>






       @endsection


