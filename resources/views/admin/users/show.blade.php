@extends('admin.layouts.admin')

{{-- @section('title', __('views.admin.users.show.title', ['name' => $user->name])) --}}

@section('content')
    <div class="row">
        @foreach ($user as $users)
            <table class="table table-striped table-hover">
                <tbody>
                    @if(is_null($users->imagen))
                    <tr>
                        <th>{{ __('views.admin.users.show.table_header_0') }}</th>
                        <td><img src="{{ $users->avatar }}" class="user-profile-image" alt="imagen_perfil"></td>
                    </tr>
                    @else
                    <tr>
                        <th>{{ __('views.admin.users.show.table_header_0') }}</th>
                        <td><img src="{{ $users->imagen }}" class="user-profile-image" alt="imagen_perfil"></td>
                    </tr>
                    @endif
                

                <tr>
                    <th>{{ __('views.admin.users.show.table_header_1') }}</th>
                    <td>{{ $users->name }}</td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_2') }}</th>
                    <td>{{ $users->apellido }}</td>
                </tr>

                
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_3') }}</th>
                    <td>
                        {{ $users->ciudad }}
                    </td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_4') }}</th>
                    <td>
                        {{ $users->celular }}
                    </td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_5') }}</th>
                    <td>
                        {{ $users->nit }}
                    </td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_6') }}</th>
                    <td>
                        <a href="mailto:{{ $users->email }}">
                            {{ $users->email }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_7') }}</th>
                    {{-- <td>
                        {{ $users->roles->pluck('name')->implode(',') }}
                    </td> --}}
                     <td>
                        {{ $users->rol }}
                    </td>
                </tr>
                <tr>
                    <th>{{ __('views.admin.users.show.table_header_8') }}</th>
                    <td>
                        @if($users->active)
                            <span class="label label-primary">{{ __('views.admin.users.show.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.users.show.inactive') }}</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>{{ __('views.admin.users.show.table_header_9') }}</th>
                    <td>
                        @if($users->confirmed)
                            <span class="label label-success">{{ __('views.admin.users.show.confirmed') }}</span>
                        @else
                            <span class="label label-warning">{{ __('views.admin.users.show.not_confirmed') }}</span>
                        @endif</td>
                    </td>
                </tr>

                <tr>
                    <th>{{ __('views.admin.users.show.table_header_10') }}</th>
                    <td>{{ $users->created_at }} ({{ $users->created_at }})</td>
                </tr>

                <tr>
                    <th>{{ __('views.admin.users.show.table_header_11') }}</th>
                    <td>{{ $users->updated_at }} ({{ $users->updated_at }})</td>
                </tr>

                <tr>
                    <th>{{ __('views.admin.users.show.table_header_12') }}</th>
                    <td>{{ $users->last_login }} ({{ $users->last_login }})</td>
                </tr>
                </tbody>
            </table>  
        @endforeach
        <a href="{{ route('admin.users') }}" style="color: black">
            <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>
    </div>
@endsection
