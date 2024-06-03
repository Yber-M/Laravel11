<x-layouts.section title="BLOG" meta-description="BLOG Meta Description">
    <style>
        button {
            background: green;
            cursor: pointer;
            border-color: blueviolet;
            padding: 0.5rem;
            font-family: 'roboto';
            font-size: 20px
        }

        .btnAdd {
            background: blue;
            border-color: rgb(116, 116, 185);
        }

        .btnDelete {
            background: red;
            border-color: rgb(204, 97, 97);
        }

        .btnEditar {
            background: rgb(255, 238, 0);
            border-color: rgb(207, 196, 42);
        }
    </style>

    <h1 style="color: rgb(175, 59, 59)">Este es mi primer BLOG</h1>

    <div id="buttonCrud">

        <a href=" {{ route('posts.crear') }} ">
            <button class="btnAdd">
                AGREGAR POST
            </button>
        </a>
        <br>
        <br>
    </div>

    <h2 style="color: green">TODOS LOS POST:</h2>

    @foreach ($posts as $post)
        <h2>
            Titulo: {{ $post->title }} <br>
            Autor: {{ $post->nombre }} <br>
            <a style="text-decoration: none;" href=" {{ route('posts.show', $post) }} ">
                <button>VER MÁS</button>
            </a>

            <a href=" {{ route('posts.editar', $post) }}">
                <button class="btnEditar">EDITAR</button>
            </a>
        </h2>
        <br><br>
    @endforeach

</x-layouts.section>
