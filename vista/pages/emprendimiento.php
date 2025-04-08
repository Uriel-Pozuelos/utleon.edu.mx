<head>
    
    <title>UTL | Emprendimiento </title>
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
        
            <div id="appEmprendimiento" class="main-content">
                <v-app>
                    <v-main >
                        <v-container class="py-8">

                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Emprendimiento </span> Incubación de Proyectos
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 
                            

                            <v-row justify="center" class="mb-1">
                                <v-col cols="12" md="8" lg="11">
                                    <v-row class="d-flex justify-center align-center mb-2">
                                        <v-col cols="12" sm="12" md="12" lg="10" width="100" >
                                            <v-card height="100%" hover style="background-color: #1A237E;" class="white--color">
                                                <v-card-text class="text-center white--text text-h5">
                                                    <p class=" mb-3">¿Sueñas con tener tu propia empresa?</p>
                                                    <p class=" mb-3">Acércate a nosotros.</p>
                                                    <p class="">¡Te ayudamos a desarrollar tu idea de negocio!</p>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" sm="12" md="6" lg="4">
                                            <a href="https://www.utleon.edu.mx/img/images/convocatorias%20ciem/2023/CIEM-UTL%20ONE%20PAGER.pdf" target="_blank" rel="noopener noreferrer" class="white--text text-decoration-none" >
                                                <v-btn color="primary" large block class="mt-2" >
                                                    <v-icon left>mdi-calendar</v-icon>
                                                    Descarga las convocatorias 
                                                </v-btn>
                                            </a>
                                        </v-co>
                                    </v-row>
                                </v-col>
                            </v-row>

                            <v-row justify="center" class="mb-8">
                                <v-col cols="12" md="10" lg="11">
                                    <v-row class="d-flex justify-center align-center mb-2">
                                        <v-col cols="12" sm="12" md="6" lg="3" >
                                            <v-card  height="100%" hover >
                                                <v-card-text class="d-flex text-center align-center">
                                                    <h3 class="text-h5">¿A quién va dirigido?</h3>
                                                    <v-icon x-large color="primary" class="mb-3" style="font-size: 60px" style="font-size: 60px">mdi-chevron-right</v-icon>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" sm="12" md="6" lg="3">
                                            <v-card height="100%" hover >
                                                <v-card-text class="d-flex text-center align-center">
                                                    <h3 class="text-h5 mb-3">Casos de Éxito</h3>
                                                    <v-icon x-large color="primary" class="mb-3" style="font-size: 60px">mdi-chevron-right</v-icon>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" sm="12" md="6" lg="3">
                                            <v-card height="100%" hover >
                                                <v-card-text class="d-flex text-center align-center">
                                                    <h3 class="text-h5 mb-3">Requisitos para incubar</h3>
                                                    <v-icon x-large color="primary" class="mb-3" style="font-size: 60px">mdi-chevron-right</v-icon>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" sm="12" md="6" lg="3">
                                            <v-card height="100%" hover >
                                                <v-card-text class="d-flex text-center align-center">
                                                    <h3 class="text-h5 mb-3">Aliados Estratégicos</h3>
                                                    <v-icon x-large color="primary" class="mb-3" style="font-size: 60px">mdi-chevron-right</v-icon>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-col>
                            </v-row>

                            
                            <v-row justify="center" class="mb-6">
                                <v-col cols="12" md="10" lg="8">
                                    <v-card class=" pa-6 mb-6" color="primary">
                                        <v-row align="center">
                                            <v-col cols="12" md="8">
                                                <h2 class="text-h4 white--text mb-3">Lanza tu empresa al mercado</h2>
                                                <p class="text-body-1 white--text mb-4">
                                                    Asesorado por mentores especialistas que te guiarán en cada paso del proceso.
                                                </p>
                                            </v-col>
                                            <v-col cols="12" md="4" class="text-center">
                                                <v-btn x-large color="white"  class="primary--text font-weight-bold" block>
                                                    Regístrate
                                                    <v-icon right>mdi-arrow-right</v-icon>
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                    </v-card>

                                    <v-card class=" pa-6 mb-6" color="secondary">
                                        <v-row align="center">
                                            <v-col cols="12" md="8">
                                                <h2 class="text-h4 white--text mb-3">Fondos Guanajuato</h2>
                                                <p class="text-body-1 white--text mb-4">
                                                    Financiamientos disponibles para tu proyecto. Consulta las reglas de operación.
                                                </p>
                                            </v-col>
                                            <v-col cols="12" md="4" class="text-center">
                                                <v-btn x-large color="white" class="secondary--text font-weight-bold" block>
                                                    Ver reglas
                                                    <v-icon right>mdi-file-document</v-icon>
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                    </v-card>

                                    <v-card class=" pa-6" color="">
                                        <v-row align="center">
                                            <v-col cols="12" md="8">
                                                <h2 class="text-h4 mb-3">IdeaGto y Valle de la Mentefactura</h2>
                                                <p class="text-body-1 mb-4">
                                                    Programas de impulso que llevan tus ideas, proyectos y negocios al siguiente nivel.
                                                </p>
                                            </v-col>
                                            <v-col cols="12" md="4" class="text-center">
                                                <v-btn x-large color="white" class="grey--text text--darken-4 font-weight-bold" block>
                                                    Ver reglas
                                                    <v-icon right>mdi-file-document</v-icon>
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                    </v-card>
                                </v-col>
                            </v-row>




                            <v-row justify="center">
                                <v-col cols="12" md="6" lg="4" class="d-flex justify-center align-center mb-4">
                                    <v-img :src="imgCIEM"></v-img>
                                </v-col>

                                <v-col cols="12" md="6" lg="8">
                                    <v-card class="pa-4 contact-card">
                                        <h3 class="text-h4 mb-4 primary--text">Contáctanos</h3>
                                        <h3 class="text-h5 mb-4" style="color:#1A237E">
                                            Centro Incubador de Empresas (CIEM)
                                        </h3>
                                        
                                        <v-row class="mb-4">
                                            <v-col cols="12" md="6">
                                                <v-card  class="pa-4" height="100%">
                                                    <h4 class="text-h6 font-weight-bold mb-2">Campús Central y Campús II</h4>
                                                    <h4 class="text-subtitle-1 font-weight-bold mb-2">Contacto:</h4>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-account</v-icon>
                                                        <span>Lcda. Araceli Hernández Pérez</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-phone</v-icon>
                                                        <span>Tel. (477) 710 0020</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-phone</v-icon>
                                                        <span>Ext. 431, 420</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-map-marker</v-icon>
                                                        <span>Edificio del Centro de Información, 1er Nivel</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-email</v-icon>
                                                        <a heref="mailto:ciem@utleon.edu.mx">Correo: ciem@utleon.edu.mx</a>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-icon small class="mr-2">mdi-clock</v-icon>
                                                        <span>Lunes a viernes de 8:30 a 16:30 hrs.</span>
                                                    </div>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="6">
                                                <v-card  class="pa-4" height="100%">
                                                    <h4 class="text-h6 font-weight-bold mb-2">Unidad Académica del Sureste</h4>
                                                    <h4 class="text-subtitle-1 font-weight-bold mb-2">Contacto:</h4>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-account</v-icon>
                                                        <span>Lcdo. Jonathan Hernández Ávila</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-phone</v-icon>
                                                        <span>Tel: (417) 155 0600</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-phone</v-icon>
                                                        <span>Ext. 642</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-map-marker</v-icon>
                                                        <span>Edificio de biblioteca</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-email</v-icon>
                                                        <a heref="mailto:jhavila@utleon.edu.mx">Correo: jhavila@utleon.edu.mx</a>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-icon small class="mr-2">mdi-clock</v-icon>
                                                        <span>Lunes a viernes de 8:00 a 16:00 hrs.</span>
                                                    </div>
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                        
                                    </v-card>
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
        el: '#appEmprendimiento',
        vuetify: new Vuetify(),
        data: () => ({
            imgCIEM: 'https://www.utleon.edu.mx/resource/img/imagenes/LOGO%20CIEM.jpg',

        })
    })

</script>