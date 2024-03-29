<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuesta de Enero</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

</head>
<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark"> <!--Expandimos el navbar colapsado al llegar a las medidas de la propiedad lg-->
            <div class="container-fluid">
              <img id="icon" src="img/ordenJedi.png">
              <a class="navbar-brand"><h1>Biblioteca del templo</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">  <!--Boton de menu-->
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-lg-end" id="mynavbar"> <!--Cuando se expande se alinean a la izquierda-->
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link tx-white" href="#Adulta"><h6>Adulta</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link tx-white" href="#Juvenil"><h6>Juvenil</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link tx-white" href="#Nino"><h6>Niños</h6></a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <section id="banner">
                <section id="intro">
                    <div id="salir">
                    <h3>Bienvenido al registro de novelas del Universo Star Wars</h3>
                    <h5>En esta página tendras a tu disposición una lista de las diferentes novelas de Star Wars divididas por su demografía</h5>
                    </div>
                </section>
                <section id="imagen">
                    <div id="salir">
                    <img src="img/biblio.png">
                    </div>
                </section>
            </section>
            <div class="mt-5 text-center" id="calendario">
            <?php include 'calendario.php'; ?>
            </div>
            <section id="Adulta" class="seccion">
                <section id="texto-section">
                    <h4>Adulto</h4>
                    <h5>Encuentra aquí novelas adultas sel universo Star Wars</h5>
                </section>
                <section class="cards">
                    <div class="card" style="width: 18rem;">
                        <img src="img/discip.png" class="card-img-top" alt="Discipulo Oscuro">
                        <div class="card-body">
                          <p class="card-text">Discípulo Oscuro es una novela canon protagonizada por Asajj Ventress y Quinlan Vos, escrita por Christie Golden y publicada por Del Rey el 7 de julio de 2015. La novela forma parte de la iniciativa multimedia The Clone Wars Legacy, ya que está basada en un arco argumental de ocho partes que fue escrito para la serie de televisión Star Wars: The Clone Wars</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/lores.jpg" class="card-img-top" alt="Los lores Sith">
                        <div class="card-body">
                          <p class="card-text">Los Lores Sith es una novela canon escrita por Paul S. Kemp. Fue publicada el 28 de abril de 2015 por Del Rey. La historia está ambientada en el año 14 ABY y se conecta con tramas de las series de televisión Star Wars: The Clone Wars y Star Wars Rebels.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/luzDe.png" class="card-img-top" alt="Luz de los Jedi">
                        <div class="card-body">
                          <p class="card-text">The High Republic: Luz de los Jedi es una novela canon escrita por Charles Soule. Es el primer volumen de la campaña editorial Star Wars: The High Republic. Los sucesos de la novela se desarrollan dos siglos antes de los acontecimientos de Star Wars: Episodio I La Amenaza Fantasma, y la historia seguirá a la Jedi Avar Kriss mientras la Orden Jedi enfrenta una nueva amenaza.</p>
                        </div>
                    </div>
                </section>
            </section>
            <section id="Juvenil" class="seccion">
                <section id="texto-section">
                    <h4>Juvenil</h4>
                    <p>Novelas juveniles perfectas para jovenes adultos</p>
                </section>
                <section class="cards">
                    <div class="card" style="width: 18rem;">
                        <img src="img/ashoka.png" class="card-img-top" alt="ashoka">
                        <div class="card-body">
                          <p class="card-text">Ahsoka es una novela para jóvenes de Disney–Lucasfilm Press. La novela, escrita por E.K. Johnston, se centra en Ahsoka Tano en un periodo de tiempo situado entre su abandono de la Orden Jedi y su transformación en una operativa de la Rebelión. </p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/estrellas.jpg" class="card-img-top" alt="Estrellas Perdidas">
                        <div class="card-body">
                          <p class="card-text">Estrellas Perdidas es una novela para jóvenes adultos escrita por Claudia Gray.EL REINADO DEL IMPERIO GALÁCTICO ha alcanzado al Borde Exterior, donde el aristócrata Thane Kyrel y la campesina Ciena Reed están unidos por su amor a volar. Enrolarse en la Academia Imperial es un auténtico sueño hecho realidad para ambos. Pero para Thane el sueño se convierte en pesadilla cuando ve con sus propios ojos las horribles tácticas que el imperio emplea para mantener su reinado con puño de hierro.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/jinErso.png" class="card-img-top" alt="Rebel Rising">
                        <div class="card-body">
                          <p class="card-text">Rebel Rising es una novela escrita por Beth Revis. Se centra en Jyn Erso antes de los acontecimientos de Rogue One: Una Historia de Star Wars, cuando era una rebelde junto con Saw Gerrera. Se publicó el 2 de mayo de 2017.</p>
                        </div>
                    </div>
                </section>
            </section>
            <section id="Nino" class="seccion">
                <section id="texto-section">
                    <h4>Niño</h4>
                    <h5>Adaptaciones para los mas pequeños, diseñadas para su disfrute de la saga</h5>
                </section>
                <section class="cards">
                    <div class="card" style="width: 18rem;">
                        <img src="img/niños1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">The Great Jedi Rescue que recuenta la primera novela de la Alta República, Light of the Jedi, en formato cuento para los más pequeños de la casa. ¡Todos somos Star Wars!</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/niños2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">La Feria de la República se acerca y visitantes de cada rincón de la galaxia viajan hasta el planeta Valo para el festival. Mientras todos hacen los preparativos, el Padawan Ram Jomaram está escondido en su lugar favorito: un garaje oscuro lleno de chatarra. De repente, una alarma salta en lo alto de Pico Crashpoint y Ram y su droide V-18 deciden ir a investigar</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img/niños3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">La historia se desarrolla dos siglos antes de los sucesos de Star Wars: Episodio I La Amenaza Fantasma, y sigue a la adolescente Jedi Vernestra Rwoh y a un grupo joven y variopinto mientras están varados en una luna selvática después del Gran Desastre.</p>
                        </div>
                    </div>
                </section>
            </section>
        </div>

    </main>
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>
</html>