@extends('layouts.app')

@section('template_title')
    Personal Information
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personal Information') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personal-informations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Gender</th>
										<th>Birthday</th>
										<th>Curp</th>
										<th>Civil Status</th>
										<th>Social Security</th>
										<th>Country</th>
										<th>City</th>
										<th>Neighborhood</th>
										<th>Address</th>
										<th>Zip</th>
										<th>Phone</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personalInformations as $personalInformation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personalInformation->user_id }}</td>
											<td>{{ $personalInformation->gender }}</td>
											<td>{{ $personalInformation->birthday }}</td>
											<td>{{ $personalInformation->curp }}</td>
											<td>{{ $personalInformation->civil_status }}</td>
											<td>{{ $personalInformation->social_security }}</td>
											<td>{{ $personalInformation->country }}</td>
											<td>{{ $personalInformation->city }}</td>
											<td>{{ $personalInformation->neighborhood }}</td>
											<td>{{ $personalInformation->address }}</td>
											<td>{{ $personalInformation->zip }}</td>
											<td>{{ $personalInformation->phone }}</td>
											<td>{{ $personalInformation->email }}</td>

                                            <td>
                                                <form action="{{ route('personal-informations.destroy',$personalInformation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personal-informations.show',$personalInformation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personal-informations.edit',$personalInformation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $personalInformations->links() !!}
            </div>
        </div>
    </div>
@endsection
