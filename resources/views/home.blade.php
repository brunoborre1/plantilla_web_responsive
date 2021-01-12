<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Plantilla Modelo Pagina Web</title>
    
</head>
<body>
    <div class="container">
        <header class="row">
            <div class="col">
                <h1>HEADER</h1>
            </div>
        </header>
        <section class="contenedor-main row">
            <main class="col-md-8">
                <h2>MAIN</h2>
                <p> Aqui colocamos todo lo que seria parrrafo para nuestra pagina web con bootstrap</p>
                <p> Aqui colocamos todo la informacion correspondiente al segundo párrafo de nuestro sitio web</p>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </main>
        <aside class="col-md-4 align-self-center">
            <h3>ASIDE</h3>
        </aside>
        </section>

        <section class="row widgets justify-content-between">
            <div class="col-12 col-md-4 col-lg-3">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>

            <div class="col-12 col-md-4 col-lg-3">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>

            <div class="col-12 col-md-4 col-lg-3">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </section>

        <footer class="row">
            <div class="col">
                <h4>Footer</h4>
            </div>
        </footer>

    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>