@extends('layouts.app')

@section('template_title')
    Cuestion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuestion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cuestions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Questions</th>
										<th>Answers</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuestions as $cuestion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cuestion->questions }}</td>
											<td>{{ $cuestion->answers }}</td>

                                            <td>
                                                <form action="{{ route('cuestions.destroy',$cuestion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuestions.show',$cuestion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuestions.edit',$cuestion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cuestions->links() !!}
            </div>
        </div>
    </div>
@endsection
