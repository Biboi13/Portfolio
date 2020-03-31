@extends('layouts.layout')


@section('content')
        <div class="flex-center position-ref full-height">
         

            <div class="content">
                
             
            <img src="/img/pikachu.png" alt="Pikachu" height="250" width="250">
                <div class="title m-b-md">
                
               
                  Fourth Day of <br> #100daysofCode 
                </div>
                <br>

                <p>

                {{ $name}}
                </p>

                <!--@for($i = 0; $i < 5; $i++)
                <p> the valaue of i is {{$i}}  </p>
                @endfor-->

                  
               <!--@for($i = 0 ; $i < count($login); $i++)
                 <p>{{ $login[$i]['name'] }}</p>
               @endfor-->
               @foreach($login as $login)
                    <div>
                    {{$loop->index}} - {{$login['type']}} -  {{$login['name']}} 
                    @if($loop->first)
                    <span>- first</span>
                    @endif

                    @if($loop->last)
                    <span>- last</span>
                    @endif
                    </div>
               @endforeach

            </div>
        </div>
 
 @endsection('content')