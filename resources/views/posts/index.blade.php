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

        .btnUpdate {
            background: rgb(255, 0, 242);
            border-color: rgb(167, 58, 154);
        }
    </style>

    <h1 style="color: rgb(175, 59, 59)">Este es mi primer BLOG</h1>

    <div id="buttonCrud">

        <a href=" {{ route('posts.crear')}} ">
            <button class="btnAdd">
                AGREGAR POST
            </button>
        </a>
        <br>
        <br>
        <a href=" {{ route('posts.actualizar') }} ">
            <button class="btnUpdate">
                ACTUALIZAR POST
            </button>
        </a>
        <br>
        <br>
        <a href=" {{ route('posts.eliminar') }}">
            <button class="btnDelete">
                ELIMINAR POST
            </button>
        </a>
    </div>

    <h2 style="color: green">TODOS LOS POST:</h2>

    @foreach ($posts as $post)
        <h2>
            Titulo: {{ $post->title }} <br>
            Autor: {{ $post->nombre }} <br>
            <a style="text-decoration: none;" href=" {{ route('posts.show', $post) }} ">
                <button>VER MÁS</button>
            </a>
        </h2>
    @endforeach

</x-layouts.section>
