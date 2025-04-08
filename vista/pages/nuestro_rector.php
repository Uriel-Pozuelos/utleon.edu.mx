<head>
    <title>UTL | Nuestro Rector</title>
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
        
            <div id="appRector" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    
                            
                            <v-row class="mb-3">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Mensaje de </span>Nuestro Rector
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row>

                            <v-row class="mb-2" width="100%">
                                
                                <v-col cols="12" md="7">
                                    <v-card
                                        class="pa-6"
                                        elevation="3"
                                        height="100%"
                                    >
                                        <h2 class="text-h6 mb-4">Querida Comunidad UTL:</h2>
                                        <p class="text-body-1 text-justify ml-4">
                                            Es un gusto para mi poder dirigirme a todas y todos quienes integran a la 
                                            comunidad de la Universidad Tecnológica de León: estudiantes, docentes, 
                                            personal administrativo, directivo, y demás plantilla actoral de nuestro 
                                            entorno universitario.
                                        </p>

                                        <p class="text-body-1 text-justify ml-4">
                                            Desde sus inicios, la UTL se ha distinguido por formar jóvenes profesionistas 
                                            que sean ciudadanas y ciudadanos de mundo, preparados con una educación tecnológica 
                                            de calidad, así como humanística que, de manera integral, desarrolle las capacidades 
                                            y competencias de su comunidad permitiendo generar un impacto significativo en el entorno.
                                        </p>
                                        <p class="text-body-1 text-justify ml-4">
                                            En una constante actividad de preparación, capacitación y siempre con una visión de 
                                            mejora constante, nos mantenemos en la tarea de reinventarnos para ser mejores, de 
                                            innovar en los métodos de formación académica y administrativa para seguir siendo un 
                                            parámetro en la educación de nuestra juventud guanajuatense.
                                        </p>
                                        <p class="text-body-1 text-justify ml-4">
                                            En esta nueva etapa al frente de esta honorable casa de estudios quiero invitarles a 
                                            realizar un trabajo colaborativo para que construyamos un ambiente de convivencia en 
                                            donde los valores sean eje central del desarrollo para propiciar un entorno en donde 
                                            prevalezca una cultura de paz, de respeto y siempre con una responsabilidad universitaria 
                                            hacia los derechos humanos.
                                        </p>
                                        <div class="d-flex flex-column align-center mt-4">
                                            <span class="font-weight-bold">José Christian Padilla Navarro</span>
                                            <span>Rector UTL</span>
                                        </div>
                                    </v-card>
                                </v-col>

                                
                                <v-col cols="12" md="5">
                                    <v-img
                                        src="https://www.utleon.edu.mx/resource/img/imagenes/FOTO_RECTOR.jpg"
                                        height="100%"
                                        width="100%"
                                        class="elevation-3 rounded-lg"
                                        style="object-fit: cover;"
                                        
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
        el: '#appRector',
        vuetify: new Vuetify(),
        data: () => ({

        })
    });
</script>