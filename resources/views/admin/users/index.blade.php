@extends('admin.layouts.admin')

@section('title', __('views.admin.users.index.title'))

@section('content')



<div class="row table-responsive">
    @if (Session::has('confirmed'))
        <div class="alert alert-success">{{ Session::get('confirmed') }}</div>
    @endif  
    
    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>@sortablelink('email', __('views.admin.users.index.table_header_0'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('name',  __('views.admin.users.index.table_header_1'),['page' => $users->currentPage()])</th>
                <th>{{ __('views.admin.users.index.table_header_2') }}</th>
                <th>@sortablelink('active', __('views.admin.users.index.table_header_3'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('confirmed', __('views.admin.users.index.table_header_4'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.users.index.table_header_5'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.users.index.table_header_6'),['page' => $users->currentPage()])</th>
                <th>@sortablelink('last_login', __('views.admin.users.index.table_header_7'),['page' => $users->currentPage()])</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->roles->pluck('name')->implode(',') }}</td>
                    <td>
                        @if($user->active)
                            <span class="label label-primary">{{ __('views.admin.users.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.index.inactive') }}</span>
                        @endif
                    </td>
                    <td>
                        @if($user->confirmed)
                            <span class="label label-success">{{ __('views.admin.users.index.confirmed') }}</span>
                        @else
                            <span class="label label-warning">{{ __('views.admin.users.index.not_confirmed') }}</span>
                        @endif</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->last_login }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show',  [$hash->encode($user->id)]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>

                        @if(!$user->hasRole('administrator'))
                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal{{ $user->id }}">
                            <i class="fa fa-check"></i></button>

                            <!-- Modal -->
                            <div id="myModal{{ $user->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Confirmar a Usuario {{ $user->name }}</h4>
                                        </div>
                                        <div class="modal-body" style="text-align: center;">
                                            <form action="{{route( 'admin.users.confirmedUsuario', $user->id )}}"
                                                method="POST" style="margin-block-end:-1em !important;">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <input type="hidden" name="confirmed" value="1">
                                                <h4> ¿SE CONFIRMA LA SOLICITUD DE INGRESO AL SISTEMA A: ? </h4>
                                                <h4>{{ $user->name }}</h4>

                                                <div class="row" style="display: block;">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                            <i class="fa fa-close"></i>&nbsp; No</button>

                                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>
                                                            &nbsp; Si</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('admin.users.destroy', [$user->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-right">
        {{ $users->links() }}
    </div>
</div>
@endsection
