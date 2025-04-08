<head>
    
    <title>UTL | Aula Virtual </title>
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
        
            <div id="appAulaVirtual" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    
                            

                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Aula</span> Virtual
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-row>
                                <v-col cols="12" md="6" lg="6">
                                    <v-card>
                                        <v-card-title class="text-h4 secondary--text" >Objetivo </v-card-title>
                                        <v-card-text>

                                            <p class="text-body-2 mb-4"> 
                                                Brindar asesoría para producir recursos y servicios educativos digitales, 
                                                a través de estrategias tecnológicas, que contribuyen al aprendizaje y 
                                                mejora continua para la práctica docente en las diferentes modalidades 
                                                que se imparten en la comunidad educativa.
                                            </p>
                                            
                                            <v-alert color="blue lighten-5" class="mb-4">
                                                <h3 class="text-h6 ">Horario de atención:</h3>
                                                <div class="pl-4">
                                                    <div><strong>Matutino:</strong> 10:40 - 11:40 a.m.</div>
                                                    <div><strong>Vespertino:</strong> 6:00 - 7:00 p.m.</div>
                                                    <div class="mt-2">De Lunes a viernes</div>
                                                </div>
                                            </v-alert>

                                            <v-btn color="primary" large block href="https://aulaut.utleon.edu.mx" target="_blank">
                                                <v-icon left>mdi-open-in-new</v-icon>
                                                Acceder al Micrositio del Aula Virtual
                                            </v-btn>

                                            

                                        </v-card-text>
                                    </v-card>
                                </v-col>
                                <v-col cols="12" md="6" lg="6">
                                    <v-img :src="imgInfo" width="100%" height="auto" style="border-radius:8px;"></v-img>
                                </v-col>

                            </v-row>

                            <v-container class="py-8">
                                <v-row justify="center">
                                    <v-col cols="12" md="6" lg="6">
                                        <v-img :src="imgAula" ></v-img>
                                    </v-col>
                                    <v-col cols="12" md="6" lg="6">
                                        <v-card class="contact-card pa-4">
                                            <v-card-title class="text-h4 primary--text mb-6">Contáctanos</v-card-title>
                                            <v-card-text>
                                                <div class="mb-4 ml-4">
                                                    <v-icon>mdi-account</v-icon>
                                                    <span><strong>Liliana González Arredondo</strong></span>
                                                </div>
                                                <div class="mb-4 ml-4">
                                                    <v-icon>mdi-email</v-icon>
                                                    <a href="mailto:larredondo@utleon.edu.mx">larredondo@utleon.edu.mx</a>
                                                </div>
                                                <div class="mb-4 ml-4">
                                                    <v-icon>mdi-email</v-icon>
                                                    <a href="mailto:tecnologiaeducativa@utleon.edu.mx">tecnologiaeducativa@utleon.edu.mx</a>
                                                </div>
                                                <div class="mb-4 ml-4">
                                                    <v-icon>mdi-map-marker</v-icon>
                                                    <span>CVD planta alta</span>
                                                </div>
                                                <div class="mb-4 ml-4">
                                                    <v-icon>mdi-phone</v-icon>
                                                    <span>Ext. 308</span>
                                                </div>
                                            </v-card-text>
                                        </v-card>
                                    </v-col>
                                </v-row>
                            </v-container>
                            

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appAulaVirtual',
        vuetify: new Vuetify(),
        data: () => ({
            imgAula: 'https://www.utleon.edu.mx/resource/img/imagenes/Imagen%20Aula%20Virtual.png',
            imgInfo: 'https://www.utleon.edu.mx/resource/img/oficina_virtual-TE.jpg',

        })

    })

</script>