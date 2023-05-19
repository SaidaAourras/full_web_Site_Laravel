@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')





<script>
    const element = document.getElementById("chnageTitle");
    element.innerHTML = "Solution ";
    document.getElementById('img-bg-header').style.background =
        "url(addons/img/referenceBg1.png) center center no-repeat ";
    document.getElementById('img-bg-header').style.backgroundSize = "cover";
</script>
@endsection