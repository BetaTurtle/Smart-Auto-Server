{{ Form::open(array(
		'url' => '/post'
		)
	) }}

	{{ Form::label('secret', 'Super Secret')}}
	{{ Form::password('secret')}}
	{{ Form::label('first_name', 'First Name')}}
	{{ Form::text('first_name', 'Jun')}}
	{{ Form::label('select_l', 'Select')}}
	{{ Form::select('bear', array(
		'Panda' => array(
			'red' => 'Red',
			'black' => 'Black',
			'white' => 'White'
			),
		'Character' => array(
			'pooh' => 'Pooh',
			'baloo' => 'Baloo'
			)
		), 'black')}}
	{{ Form::label('avatar', 'Avatar') }}
	{{ Form::file('avatar') }}
	{{ Form::submit('Update') }}
{{ Form::close() }}