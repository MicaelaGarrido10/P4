

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CSS GRID </title>
    <link rel="stylesheet" href="cv.css">

</head>

<body>

    <div id="layout">
        <div class="header">
            <h2> 
                
                <?php
session_start();

echo "Hola " . $_SESSION['nom']."!";

?>
</h2>
            <img class="image" src="foto.png" width="188" height="188" border="2px" />
        </div>

        <main class="grid">


            <section id="leftSection">

                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Datos Personales</span>
                </h4>
                <div class="leftMenuContainer">
                    <ul class="unordenated-list">
                        <li>๐คGermรกn Rossi</li>
                        <li>๐ Calle24 5632, CityBell, La Plata</li>
                        <li>โ๏ธ 1234 5678</li>
                        <li>@ germanrossi@gmail.com</li>
                        <li>๐ 04/01/1995</li>
                        <li>๐ณ๏ธ Argentina</li>
                        <li>๐ฑ 9876 5432</li>
                        <li>๐ Soltero</li>
                        <li>๐ Clase C</li>
                    </ul>
                </div>

                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Habilidades</span>
                </h4>
                <div class="leftMenuContainer">
                    <div class="skillBarContainer">
                        <span>Disciplinado</span>
                        <progress value="70" max="100"></progress>
                    </div>

                    <div class="skillBarContainer">
                        <span>Liderazgo</span>
                        <progress value="70" max="100"></progress>
                    </div>
                    <div class="skillBarContainer">
                        <span>Visionario</span>
                        <progress value="70" max="100"></progress>
                    </div>

                    <div class="skillBarContainer">
                        <span>Habilidad numรฉrica</span>
                        <progress value="100" max="100"></progress>
                    </div>
                    <div class="skillBarContainer">
                        <span>Relaciones pรบblicas</span>
                        <progress value="50" max="100"></progress>
                    </div>
                </div>

                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Idiomas</span>
                </h4>
                <div class="leftMenuContainer">
                    <div class="skillBarContainer">
                        <span>Espaรฑol</span>
                        <progress value="100" max="100"></progress>
                    </div>
                    <div class="skillBarContainer">
                        <span>Inglรฉs</span>
                        <progress value="70" max="100"></progress>
                    </div>

                    <div class="skillBarContainer">
                        <span>Frances</span>
                        <progress value="70" max="100"></progress>
                    </div>

                    <div class="skillBarContainer">
                        <span>Portuguรฉs</span>
                        <progress value="50" max="100"></progress>
                    </div>
                  
                </div>

                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Informรกtica</span>
                </h4>

                <div class="leftMenuContainer">
                    <div class="skillBarContainer">
                    <span> Microsoft Excel </span>
                    <progress value="100" max="100"></progress>
                </div>

                <div class="skillBarContainer">
                    <span> Microsoft Word </span>
                    <progress value="70" max="100"></progress>
                </div>

                <div class="skillBarContainer">
                    <span> Software DelBol </span>
                    <progress value="50" max="100"></progress>
                </div>

                <div class="skillBarContainer">
                    <span>Contalux</span>
                    <progress value="70" max="100"></progress>
                </div>

                <div class="skillBarContainer">
                    <span>Cegit</span>
                    <progress value="20" max="100"></progress>
                </div>
                
            </div>
            

                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Competencias</span>
                </h4>
                <ul>
                <li> Comunicaciรณn </li>
                <li> Trabajo en equipo </li>
            </ul>




            </section>

            <section id="rightSection">
                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Perfil</span>
                </h4>

                <div class="rightMenuContainer">

                    <p> Experiencia en diferente proyectos de Implementaciรณn y mantenimietno post implementaciรณn,
                        como asi tambiรฉn tareas de mantenimiento correctivo y evolutivo. Proactivo orientado a
                        resultados,
                        con 4 aรฑos de experiencia en รกreas adminitrativo-contables, y mรกs de 4 aรฑos de experiencia como
                        consultor. </p>
                </div>
                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                    </svg>
                    <span>Experiencia de trabajo</span>
                </h4>

                <div class="rightMenuContainer">
                    <table class="table-main">
                        <tbody>
                            <tr>
                                <td>01/2017 - Presente</td>
                                <td>
                                    <b>Consultor &Ap</b><br>
                                    Bunge Cono Blur
                                    <p>
                                        Mantenimiento Correctivo / evolutivo Moduls FI-CO-TRM.
                                        Omplementaciรณn Interfase con bancos para registro de cobranzas
                                        por cuentas recaudadoras. Implementaciรณn del registro de recaudaciones
                                        a travรฉs de sistema Lapos. Uder Funcional FICO para proyecto Upgrade
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>01/2017 - 12/20/2016</td>
                                <td>
                                    <b>Consultor &Ap FICO 8r.</b><br>
                                    Boftlek - La Plata, Bueno Aires
                                    <p>
                                        Como consultor BAP FICO, participe activamente en los siguientes proyectos: <br>
                                        <ul>
                                            <li> Banco Hipotecario - Upgrade de versiรณn 5.0 a 6.0 </li>
                                            <li> PC Arts Argentina (BANGHO) - implementaciรณn BAP ALL IN ONE </li>
                                            <li>Laboratorios Banofi Awentis - 8aporte para LATAM </li>
                                            <li> Investigaciรณn y desarrollo de casos de estudio sobre parametrizaciรณn y aplicaciรณn de modulo TRM - PlazosFijos.</li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>01/2015 - 07/2016</td>
                                <td>
                                    <b>Especialista BAP FI</b><br>
                                    Accenture Argentina
                                    <p>
                                        Consultor funcional del modulo FI creado de nuevas sociedades Fi,configuraciรณn de operaciones bancarias de extractos automaticos, configuracion de nuevas estructuras de balances, 
                                        configuaracion de nuevas cuentas bancarias en las distintas sociedades del grupo de empresas, configuracion parcial modulo activo fijo, configuracion de nuevos indicadores de impuestos, 
                                        soporte funcional a usuarios de moduloFI-AR, FI-TR, FI-GL, FI-AP.
                                    </p>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <h4 class="subtitle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path
                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z" />
                </svg>
                <span>Educaciรณn</span>
            </h4>

            <div class="rightMenuContainer">
                <table class="table-main">
                    <tbody>
                        <tr>
                            <td>08/2009 - Presente</td>
                            <td>
                                <b>Contador Publico</b><br>
                                Universidad de Buenos AIres (UBA) - Buenos Aires <br>
                                Promedio: 8
                                <p>
                                    Durante mi formaciรณn me he capacitado para formar a personas y empresas.
                                    Omplementaciรณn Interfase con bancos para registro de cobranzas
                                    por cuentas recaudadoras. Implementaciรณn del registro de recaudaciones
                                    a travรฉs de sistema Lapos. Uder Funcional FICO para proyecto Upgrade
                                </p>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


            </section>
    </div>



</body>

</html>