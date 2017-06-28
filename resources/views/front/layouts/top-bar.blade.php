<section class="top-bar">
    <div class="container">

        <div class="left-text pull-left">
            <p><span>Soutenez nous:</span> {{ $community->email }}</p>
        </div> <!-- /.left-text -->

        <div class="social-icons pull-right">
            <ul>
                @foreach($community->links as $link)
                    @if($link->type == 'social')
                        <li><a href="{{ $link->link }}"><i class="fa fa-{{ $link->nom }}"></i></a></li>
                    @endif
                @endforeach
            </ul>
        </div> <!-- /.social-icons -->
    </div>
</section> <!-- /.top-bar -->
