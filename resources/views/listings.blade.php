<h1><?php echo $heading; ?> </h1>


@unless(count($listings) == 0)



@foreach ($listings as $list)

    <h1>{{ $list['id'] }}</h1>
    <h3>{{ $list['titre'] }}</h3>
    <p>{{ $list['dec'] }}</p>

@endforeach
@else
<p>No listings found</p>

@endunless 
