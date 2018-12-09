<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

@foreach($finalHeaderCssData as $name => $cssKey)
<link href="{{url($cssKey)}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{url($cssKey)}}" rel="stylesheet" type="text/css" media="all"/>
@endforeach


@foreach($finalHeaderJsData as $name => $jsKey)
<script type="text/javascript" src="{{url($jsKey)}}"></script> 
<script type="text/javascript" src="{{url($jsKey)}}"></script>
<script type="text/javascript" src="{{url($jsKey)}}"></script>
<script type="text/javascript" src="{{url($jsKey)}}"></script>
@endforeach
</head>