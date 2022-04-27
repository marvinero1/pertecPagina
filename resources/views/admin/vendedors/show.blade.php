@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3>Vendedor </h3>
        </div><br>        
    </div>
    
    <div class=" widget widget_tally_box">
        <div class="x_panel fixed_height_390">
          <div class="x_content">
              <div>
                <img src="/{{ $vendedor->imagen }}" class="img-circle " id='listimages'
                alt="{{ $vendedor->nombre_vendedor }}" style="display: block;margin: auto; width: 38%;">
              </div>      

            <h3 class="name">
                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{ strtoupper($vendedor->nombre_vendedor) }} {{ strtoupper($vendedor->apellido) }}</h3>

            <div class="flex" style="padding: 32px;">
                <ul class="list-inline count2">
                    <div class="row">
                        <div class="col-md-4">
                            <h3><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; {{ $vendedor->celular }} </h3>
                            <span>Celular</span>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp; {{ $vendedor->whatsapp }}</h3>
                            <span>Whatsapp</span>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; {{ $vendedor->ciudad }}</h3>
                            <span>Ciudad</span>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-4">
                            <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; {{ $vendedor->correo_electronico }}</h3>
                            <span> Correo Electronico</span>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{ $vendedor->created_at->format('M d Y'); }}</h3>
                            <span> Agregado</span>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{ $vendedor->updated_at->format('M d Y'); }}</h3>
                            <span> Actualizado</span>
                        </div>
                      </div>
                </ul>
            </div>
            <a href="{{ route('admin.vendedor.index') }}" style="color: black">
                <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>
            {{-- <p>
              If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
            </p> --}}
          </div>
        </div>
    </div>
</div>
@endsection