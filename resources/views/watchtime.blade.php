<html>
    <body>
    <h4>History <?php echo $history; ?></h4>

    {{--var_dump($watchtime)--}}
    {{$watchtime}}
    {{'_______________'}}
    {{$teste}}
    {{'_____________'}}
    {{$history3}}
    {{'_____________'}}
    @php
        for($i=0; $i<3; $i++){
            //$user[$i] = $watchtime[$i];

        echo($user[$i]);
        }
    @endphp
    </body>
</html>
