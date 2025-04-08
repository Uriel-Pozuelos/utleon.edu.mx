<head>
    <title>UTL | Trámite Credenial</title>
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
        
            <div id="appTramiteCredencial" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            <v-row class="mb-3">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Reposición </span> de Credencial
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 
                            

                            <v-row class="mt-4 mb-6" align="center">
                                <v-col cols="12" md="7" order-md="1" order="2" >
                                    
                                    <v-card class="pa-4 " elevation="4">
                                        <p class="body-1 mb-4">Si extraviaste tu credencial de alumno, es tu responsabilidad reponerla lo antes posible.</p>
                                        <p class="body-1 mb-4">Recuerda que la credencial de alumno es necesaria para acceder a los laboratorios y otros servicios que brinda la universidad.</p>
                                        

                                        <v-expansion-panels multiple v-model="panel" class="mb-6">
                                            <v-expansion-panel>
                                                <v-expansion-panel-header class="text-left text-body-1 font-weight-bold">
                                                    <span class="text-left">
                                                        <v-icon left :color="panelIconColor">mdi-credit-card-settings</v-icon>
                                                        Proceso completo de reposición
                                                    </span>
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                <v-list dense>
                                                    <!-- Paso 1 -->
                                                    <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-numeric-1-box</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="font-weight-medium">Realizar el pago</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                        Ingresa a tu cuenta de SITO en: 
                                                        <strong>1-Reinscripción y Referencias de Pago → 3-Otras Referencias → Otros Pagos → Reposición de credencial</strong>
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                    </v-list-item>

                                                    <!-- Paso 2 -->
                                                    <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-numeric-2-box</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="font-weight-medium">Solicitud en Servicios Estudiantiles</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                        Acude personalmente a Servicios Estudiantiles para iniciar el trámite
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                    </v-list-item>

                                                    <!-- Paso 3 -->
                                                    <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-numeric-3-box</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="font-weight-medium">Recolección de firmas y sellos</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                        Obtén las autorizaciones necesarias en los diferentes departamentos usando el formato proporcionado
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                    </v-list-item>

                                                    <!-- Paso 4 -->
                                                    <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-numeric-4-box</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="font-weight-medium">Entrega de documentación</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                        Devuelve el formato completo a Servicios Estudiantiles
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                    </v-list-item>

                                                    <!-- Paso 5 -->
                                                    <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-numeric-5-box</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="font-weight-medium">Recibir credencial</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                        Servicios Estudiantiles te indicará la fecha exacta para recoger tu nueva credencial
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                    </v-list-item>
                                                </v-list>
                                                </v-expansion-panel-content>
                                            </v-expansion-panel>

                                        </v-expansion-panels>

                                    </v-card>
                                </v-col>
                                
                                <!-- Imagen -->
                                <v-col cols="12" md="5" order-md="2" order="1" class="text-center">
                                    <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/Reposici%C3%B3n%20de%20Credencial.jpeg"
                                    height="auto"
                                    width="100%"
                                    class="elevation-3 "
                                    style=" border-radius: 8px;"
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
        el: '#appTramiteCredencial',
        vuetify: new Vuetify(),
        data: () => ({
            panel: [0],
        }),
        computed: {
            panelIconColor() {
                return this.panel.length > 0 ? 'white' : 'grey';
            }
        }
    })
</script>