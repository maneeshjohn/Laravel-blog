<div class="col-sm-3 sidebar">

  <div class="side-about">

    <h3>About</h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit id dolores possimus, reiciendis minus neque</p>

  </div>

  <ul class="side-archives">

    @foreach($archives as $month)

      <li><a href="/?month={{ $month['month'] }}&year={{ $month['year'] }}" class="nav-link">{{ $month['month'].' '.$month['year'] }}</a></li>

    @endforeach

  </ul>

</div>