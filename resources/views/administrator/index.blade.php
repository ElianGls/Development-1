@extends('layouts.app')

@section('template_title')
    Administrator
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrator') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('administrators.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Num Administrators</th>
										<th>Id Departments</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrators as $administrator)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $administrator->user_id }}</td>
											<td>{{ $administrator->num_administrators }}</td>
											<td>{{ $administrator->id_departments }}</td>

                                            <td>
                                                <form action="{{ route('administrators.destroy',$administrator->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('administrators.show',$administrator->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('administrators.edit',$administrator->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $administrators->links() !!}
            </div>
        </div>
    </div>
@endsection
