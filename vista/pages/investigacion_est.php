<head>
    <title>UTL | Investigación Estudiantil </title>
</head>
<body class="app-container main-pages " style="scroll-behavior: smooth;" data-app="true">
        
        <?php 
            include_once("vista/headerUriel.php") 
        ?>
        <div 
            class="content-wrapper" >
            
            <?php
                include_once("vista/sideBar.php")
                
            ?>
        
            <div id="appInvestigacionEst" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h3">
                                        <span class="primary--text mr-2">Investigación</span> Estudiantil
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                                <v-row>
                                    <v-col cols="12">
                                        <h1 class=" text-h4 secondary--text">
                                            Programa Delfín
                                            
                                        </h1>
                                    </v-col>
                                </v-row>
                                
                                <v-row class="parrafo">
                                    <v-col cols="12">
                                        <p>El Programa Delfín, se creó en 1995 con el objetivo fortalecer la cultura de colaboración entre las Instituciones de Educación Superior y Centros de Investigación integrantes del Programa, a través de la movilidad de profesores-investigadores, estudiantes y de la divulgación de productos científicos y tecnológicos.</p>
                                        <p>La UTL forma parte de las más de 250 universidades de alcance nacional e internacional que integran este proyecto.</p>
                                    </v-col>
                                </v-row>
                                
                                <v-row justify="start" class="mb-4">
                                    <v-col cols="12" class="text-left ml-4">
                                        <h2 class="text-h4 secondary--text mb-4">Objetivos</h2>
                                        <v-divider class=" primary" width="150" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                                    </v-col>
                                </v-row>
                                
                                <v-row class="mt-4">
                                    <v-col cols="12" md="3" class="d-flex justify-center">
                                        <v-img
                                            src="https://www.utleon.edu.mx/resource/img/imagenes/delfin2.jpeg"
                                            aspect-ratio="1"
                                            class="rounded-img"
                                            style="border-radius: 1px 30px;"
                                        ></v-img>
                                    </v-col>
                                    
                                    <v-col cols="12" md="9" class="parrafo">
                                        <p>1. Contribuir a la creación de una cultura científico-tecnológica por medio de actividades de divulgación para el conocimiento, aprovechamiento y valoración de las tareas de investigación y posgrado que realizan las IES del Pacífico.</p>
                                        <p>2. Mediante la vinculación de estudiantes destacados con investigadores de los posgrados de las IES participantes, se contribuirá a la formación de cuadros académicos de alto nivel y con ello consolidar la investigación y el fortalecimiento de los programas de posgrado de las Instituciones del Pacífico.</p>
                                        <p>3. Fortalecer a través de la divulgación mediante estancias de profesores y/o investigadores, realizando cursos, talleres, conferencias y otras actividades con valor curricular.</p>
                                        <p>4. Crear un sistema editorial que dé a conocer el producto científico-tecnológico-académico de las IES del Programa Delfín y con ello fortalecer el posgrado y la investigación.</p>
                                        <br>
                                        <p>¿Quieres conocer más del programa y te gustaría algún día realizar proyectos de investigación de impacto para tu formación académica? Visita el sitio:  
                                            <a href="https://www.programadelfin.org.mx/" target="_blank" class="enlace">https://www.programadelfin.org.mx/</a>
                                        </p>
                                    </v-col>
                                </v-row>
                            
                            
                                <v-divider class="my-8" style="background-color:#1a237E; height:3px !important"></v-divider>
                            
                                <!-- Sección Jóvenes Investigadores -->
                                <h1 class="secondary--text">
                                    Jóvenes Investigadores e Investigadoras
                                </h1>
                                <v-row height="100%" class="my-6">
                                
                                    <v-col cols="12" md="6" lg="6" class="d-flex justify-center">
                                        <div class="parrafo ">
                                            <p>El Programa de Jóvenes Investigadoras e Investigadores impulsa el desarrollo de las competencias científicas como son: plantear un problema de investigación, saber revisar el estado del arte, analizar los datos y saber como estructurar un documento científico; diseñar un prototipo (en las carreras tecnológicas).</p>
                                            <p>Se realiza a través de las siguientes actividades:</p>
                                            <ul class="lista-actividades">
                                                <li>Colaboración en investigación con docentes UTL: colaboras en un proyecto, tienes un asesor (a) que te guía durante todo el desarrollo del proyecto.</li>
                                                <li>Estancias de investigación (virtuales y/o presenciales) locales, nacionales e internacionales. Las estancias de investigación se realizan durante varias semanas, en las cuales trabajarás en conjunto con un investigador(a) experto(a) en el tema, bajo su supervisión, realizaras un proyecto de investigación, realizarás revisión del marco teórico, validación de los instrumentos de intervención para la investigación, diseñarás o crearás un prototipo, realizarás experimentos, etc.</li>
                                                <li>Encuentro de Jóvenes Investigadores e Investigadoras: Se realiza de forma anual con la finalidad de mostrar los resultados de tus proyectos de investigación, innovación, estadías, emprendedores, e integradores.</li>
                                            </ul>
                                        </div>
                                    </v-col>
                                    
                                    <v-col cols="12" md="6" class="d-flex align-center" height="100%">
                                        <v-img
                                            src="https://www.utleon.edu.mx/resource/img/imagenes/Jovenes%20investigadores.jpeg"
                                            height="100%"
                                            max-width="100%"
                                            style="border-radius: 1px 100px;"
                                        ></v-img>
                                    </v-col>
                                </v-row>
                                

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appInvestigacionEst',
        vuetify: new Vuetify(),
    
    })
</script>