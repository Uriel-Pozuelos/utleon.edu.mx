<head>
    
    <title>UTL | Programa Institucional de Tutorías</title>
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
        
            <div id="appProgTutorias" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Programa Institucional</span> de Turorías PIT
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 
                                    <h1 class="h4 mb-3">
                                    </h1>

                                    <v-row>
                                        <v-col cols="12" md="5" lg="5"  >
                                            <v-card elevation="6" height="100%" width="100%" class="d-flex justify-center align-items-center flex-column" style="border-radius: 8px; padding: 20px; ">
                                                <p class="">
                                                    En la Universidad Tecnológica de León existe un Programa Institucional de Tutorías, 
                                                    y la acción tutorial se define como un acompañamiento y apoyo que el personal docente 
                                                    con funciones de tutoreo brinda a los estudiantes con el objetivo de alentar su permanencia 
                                                    y aprovechamiento escolar. Nuestro programa de tutoría fortalece la formación humana del 
                                                    estudiantado, mediante la atención personalizada a la problemática que cada estudiante enfrenta, 
                                                    facilitando su adaptación a la comunidad universitaria y el logro de los objetivos académicos.
                                                </p>

                                                <p>
                                                    Los principales alcances de la acción tutorial son: 
                                                </p>
                                                <ul>
                                                    <li>Detección</li>
                                                    <li>Orientación</li>
                                                    <li>Canalización</li>
                                                    <li>Seguimiento</li>
                                                </ul>
                                            </v-card>

                                        </v-col>

                                        <v-col cols="12" md="7" lg="7" class="text-center" >
                                            <v-img :src="mainImage" style="border-radius: 8px;"></v-img>
                                        </v-col>

                                    </v-row>

                                    <v-img :src="imgProceso" class="mt-6"></v-img>
                                    
                                    <v-div class="d-flex justify-center align-items-center flex-column mt-6">
                                        <h2 class="h3 text-center" style="color: #1A237E">Puedes consultar la asignación del tutor o tutora de tu grupo, a través de <a href="https://sito.utleon.edu.mx">SITO</a></h2>
                                        <v-row class=" px-3 d-flex justify-center">
                                            <v-col cols="12" md="6" lg="6" class="d-flex justify-center">
                                                <v-card elevation="6" class="my-4 pa-3">
                                                    
                                                    <!-- <h2 class="h3 primary--text">Contáctanos </h2> -->
                                                    <div class="d-flex flex-column py-2 px-3 pl-2" >
                                                        <p class="font-weight-bold"> 
                                                            Responsable Institucional de Tutorías:
                                                        </p>
                                                        <p >
                                                            Mtra. Reyna Gabriela Martínez García
                                                        </p>
                                                        <p>
                                                            Edificio CVD planta alta
                                                        </p>
                                                        <p>
                                                            <span class="font-weight-bold">Horario de atención:</span> de lunes a viernes de 11:00 a 15:00 horas
                                                        </p>
                                                        <p>
                                                            <a href="mailto:rmartinezg@utleon.edu.mx">rmartinezg@utleon.edu.mx</a>
                                                        </p>
                                                        <p>
                                                            Ext. 302
                                                        </p>
                                                        
                                                    </div>
                                                </v-card>
                                            </v-col>
                                        </v-row>

                                        <v-row class="px-3 d-flex justify-center">
                                            <h2 class="h3" style="color:  #1A237E">COORDINACIÓN DE PSICOPEDAGÓGICO CAMPÚS CENTRAL Y CAMPÚS II</h2>
                                            <v-col cols="12" md="6" lg="6">
                                                <v-img :src="imgCoordinacion" height="auto"></v-img>
                                            </v-col>
                                            <v-col col="12" md="6" lg="6" class="mt-4">
                                                <v-img :src="imgCoordinacion2" height="auto"></v-img>
                                            </v-col>
                                        </v-row>
                                    </v-div>

                                        

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
        el: '#appProgTutorias',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/Normativa%20Estudiantil.JPG",
            imgProceso: "https://www.utleon.edu.mx/resource/img/imagenes/tutoreo/flechas_tutoreo.png",
            imgCoordinacion: "https://www.utleon.edu.mx/resource/img/imagenes/tutoreo/directorio1.png",
            imgCoordinacion2: "https://www.utleon.edu.mx/resource/img/imagenes/tutoreo/directorio2.png"
        })

    })

</script>