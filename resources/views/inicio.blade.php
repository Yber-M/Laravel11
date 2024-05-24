<x-layouts.app 
    title="Hello World" 
    meta-description="Esto es la Meta Description de HOME" 
    :sum="28 + 32" {{--OjO -> Debemos usar ':' para que lo ejecute PHP(Que se sume y que no lo ponga como STRING)--}}
    resultado="El resultado es"
>
    <h1>Hola Mundo!</h1>
</x-layouts.app>
