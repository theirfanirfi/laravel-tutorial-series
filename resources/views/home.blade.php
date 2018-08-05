<html>
<head>
<title>This is my first view</title>
</head>

<body>
<h1>{{$n}}</h1>
	{{"<h1>this is value - blade syntax<h1>"}}
<h1><?php echo $n; ?></h1>
<h1><?php echo $s; ?></h1>
<h1><?php echo $logic; ?></h1>

	@if($y > 0 && $y < 5)
		
	<h1>{{"value is greater than zero - its blade syntax"}}</h1>
	@elseif($y ==0)
	<h1>The value is equal to zero  - blade syntax</h1>
	@else
		<h1>the value is not equal to zero but greater than 5 -blade syntax</h1>
	@endif
	@empty($countries)
	<p>countries variable is empty</p>
	@endempty
	@isset($countries)
	xyz
	@endisset
@foreach($countries as $c)
	{{$c}} <br/>
	@endforeach
	

</body>
</html>