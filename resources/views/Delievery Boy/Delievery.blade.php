@extends('layouts.nav')
<head>
  

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/maiin.css')}}">
</head>
@section('content')

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="contain">
                <div class="signup-content">
                    {{-- <form method="POST" id="signup-form" class="signup-form" action="{{ route('profile.update', ['profile'=> $profile->id]) }}">--}}
                    {{-- @csrf
                   @method('PUT') --}}
                  
               
               
                   @forelse ($All_ORDERS as $ORDER)
                
                 
                   <p>
                   <h3>
                  
                    <?php 
            

                     echo '<h3>';
                        echo 'Order Number: ';
                    print_r(  $ORDER->id );
                    echo '</h3>';


                    $str_arr = explode ("{", $ORDER->order);
    
                     for ($x = 2; $x < count($str_arr); $x++)
                     {
                         $item = substr($str_arr[$x] , 0 ,stripos($str_arr[$x],",\"price\""));
                         $item = str_replace("\"name\":","",$item);
                         $item = str_replace("\"quantity\":","",$item);
                         $item = str_replace("\"location\":","",$item);
                         $item_array = explode (",", $item);
                         $item_name     = $item_array[0];
                         $item_name = str_replace("\"","",$item_name); 
                         $item_Quantity = $item_array[1];
                         $item_string =  $item_name . "-" . $item_Quantity;
                         echo '<li>';
                         print_r(  $item_string );
                         echo '</li>';
                        //  echo '<br/>';
                        // print_r( substr($str_arr[$x] , 1 ,6));
                        // print_r( $str_arr[$x]);
                     } 
                      ?>
                  
                    {{-- {{$ORDER->order}} --}}
                  {{-- {{ $details['price']}} --}}
                   {{-- {{$item}} --}}
                   {{-- </h3>
                 //  </p> --}}
                  <a href="{{ route('Delievery.edit', ['Delievery' => $ORDER->id ] )}}">Process</a>
                <hr size="30" color="black">
               
                
                   {{-- @endforeach --}}
                   @empty
                   <p>No Orders yet</p>
                   @endforelse



                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    @endsection
    