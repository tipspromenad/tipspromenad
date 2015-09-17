@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#minatips" aria-controls="minatips" role="tab" data-toggle="tab">Mina tipspromenader</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My Information</a></li>
                      </ul>

                      <div class="tab-content">

                        <div role="tabpanel" class="tab-pane" id="profile">
                            <table class="table table-striped table-hover table-bordered dashboard-table">
                                <tr>
                                    <th>Name</th>
                                    <td>{!! $user->name !!}</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>{!! $user->email !!}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $user->created_at !!} ({!! $user->created_at->diffForHumans() !!})</td>
                                </tr>
                                <tr>
                                    <th>Last Updated</th>
                                    <td>{!! $user->updated_at !!} ({!! $user->updated_at->diffForHumans() !!})</td>
                                </tr>
                                <tr>
                                    <th>Actions</th>
                                    <td>
                                        <a href="{!!route('profile.edit', $user->id)!!}" class="btn btn-primary btn-xs">Edit Information</a>
                                        <a href="{!!url('auth/password/change')!!}" class="btn btn-warning btn-xs">Change Password</a>
                                    </td>
                                </tr>
                            </table>
                        </div><!--tab panel profile-->

                        <div role="tabpanel" class="tab-pane active" id="minatips">
                            <p style="padding: 10px;">
                                Detta kommer inte se ut såhär sen tänker jag men här har jag iaf samlat
                                en tabell med varje användares skapade tipspromenader samt länk till redigeringsläget.
                                <br>Detta främst för att du och jag lättare ska kunna orientera oss.
                            </p>
                            <table class="table table-striped table-hover table-bordered dashboard-table">
                                <thead>
                                    <tr>
                                        <th>Tipspromenad</th>
                                        <th>Antal frågor</th>
                                        <th>Länk för redigera</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Auth::user()->tipspromenader as $tipspromenad)
                                        <tr>
                                            <td>{{ $tipspromenad->name }}</td>
                                            <td>{{ $tipspromenad->questions->count() }}</td>
                                            <td><a href="{{ action('Frontend\SkapaTipspromenadController@edit',
                                                        ['tipsId' => $tipspromenad->id, 'slug' => $tipspromenad->slug ])
                                                    }}">Redigera tipspromenad</a>
                                                <br>
                                                <code class="text-gray-light">/tipspromenad/{{ $tipspromenad->id .'/'. $tipspromenad->slug }}</code>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--tab panel profile-->

                      </div><!--tab content-->

                    </div><!--tab panel-->

                </div><!--panel body-->


            </div><!-- panel -->

		</div><!-- col-md-10 -->

	</div><!-- row -->
@endsection
