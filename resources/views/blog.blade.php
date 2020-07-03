@extends('master.layout')
@section('content')

    <?php
    echo '<div class="container-blog">';
            echo '<div class="row">';
            echo '<div class="col-lg-2 col-xl-3"></div>';
            $cont = 0;
            foreach ($posts as $post){
                $cont++;
                if ($cont == 3 || $cont == 5){
                    echo '<div class="col-lg-2 col-xl-3"></div>';
                    echo '</div>';
                }
                if ($cont == 3 || $cont == 5){
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-lg-2 col-xl-3"></div>';
                }
                $route = "blog/" . $post->slug;
                echo '<div class="col-12 col-md-6 col-lg-4 col-xl-3 blog-content">';
                    echo '<div class="left-blog">';
                        echo '<a href="' . $route . '">';
                        echo '<img src="' . asset('storage/blog/' . $post->img) . '">';
                        echo '<h1>' . $post->titulo . '</h1>';
                        echo '</a>';
                        echo '<h2>' . substr($post->created_at, 0, 10) . ' - <a href="#">' . $post->autor . '</a> - ' . $post->comentarios . ' comentários </h2>';
                        echo '<h3>' . $post->resumo . '</h3>';
                        echo '<a href="' . $route . '">';
                        echo '<button type="button" class="btn btn-light btn-continue btn-readMore">Leia mais</button>';
                        echo '</a>';
                    echo '</div>';
                echo '</div>';

            }
            echo '<div class="col-lg-2 col-xl-3"></div>';
            echo '</div>';
        echo '</div>';
    ?>
    <div class="row align-items-center justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
