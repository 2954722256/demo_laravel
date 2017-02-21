<br>
@forelse ($vars as $va)
    <b>  <a href={{ $va['id'] }}  target="view_window"> {{ $va['name'] }} <br><br><br></a></b>
@empty
    <p>No Data</p>
@endforelse
<br>
<br>