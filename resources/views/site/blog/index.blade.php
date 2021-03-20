@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section class="ss-window">
   <div class="fundo_full"
>
    <object type="text/html" data="{{ asset('blog')}}">
</object>
    </div>
  </section>
  





@include('site.rodape.index')

</div>
        
 @stop