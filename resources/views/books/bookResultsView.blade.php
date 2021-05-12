<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{ $keyword }}</h2>
        </div>
        <table>
            <tr>
                <td class="cv"><h5>Mostrar por:</h5></td>
                <td>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                @switch($type)
                                    @case('title')
                                        <li class="filter-active" {{--onclick="myFunction()"--}} onclick="search('title', '{{ $order }}')" {{--data-filter=".filter-card"--}}>Título</li>
                                        <li onclick="search('author', '{{ $order }}')"{{--data-filter="*"--}} {{--class="filter-active"--}}>Autor</li>
                                    @break
                                    @case('author')
                                        <li onclick="search('title', '{{ $order }}')" {{--data-filter=".filter-card"--}}>Título</li>
                                        <li class="filter-active" onclick="search('author', '{{ $order }}')"{{--data-filter="*"--}}>Autor</li>
                                    @break
                                @endswitch
                            </ul>
                        </div>
                    </div>
                </td>
                <td class="cv"><h5>Ordenado por:</h5></td>
                <td>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                @switch($order)
                                    @case('asc')
                                    <li class="filter-active" onclick="search('{{ $type }}', 'asc')"{{--data-filter="*"--}} {{--class="filter-active"--}}>Asc</li>
                                    <li onclick="search('{{ $type }}', 'desc')"{{--onclick="myFunction()"--}}  {{--data-filter=".filter-card"--}}>Desc</li>
                                    @break
                                    @case('desc')
                                        <li onclick="search('{{ $type }}', 'asc')"{{--data-filter="*"--}} {{--class="filter-active"--}}>Asc</li>
                                        <li class="filter-active" {{--onclick="myFunction()"--}} onclick="search('{{ $type }}', 'desc')" {{--data-filter=".filter-card"--}}>Desc</li>
                                    @break
                                @endswitch
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @if(count($books) > 0)
                @foreach($books as $book)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src={{ $book->book_cover_route }} class="img-fluid" alt="">
                            <a href="/bookSheet/{{ $book->id }}"><div class="portfolio-info">
                                    <h4>{{ $book->title }}</h4>
                                    <p>{{ $book->author }}</p>
                                </div></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
