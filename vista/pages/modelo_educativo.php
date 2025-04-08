<head>
    <title>UTL | Modelo Educativo</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appModeloEducativo" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>    
                        <!-- Título  -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h1 class="text-h3 text-center ">
                                    <span class="primary--text">Modelo</span> Educativo
                                </h1>
                                <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                            </v-col>
                        </v-row>

                        <!-- Sección 1: Modelo Educativo -->
                        <v-row class="mb-10" >
                            <v-col cols="12" md="5" height="100%" >
                                <v-card class="elevation-3 pa-3" >
                                    <h2 class="roudnded-lg text-h4 mb-4">
                                        <span class="primary--text">Formación</span> Dual
                                    </h2>
                                    <div class="text-justify body-1 mb-4 mx-3">
                                        <p>Estudiando en la UTL se pueden lograr <strong>2 títulos profesionales</strong> en menos de 4 años. Debido a la formación intensiva cuatrimestral en los primeros 2 años se puede obtener el título como Técnico/a Superior Universitario/a (TSU) y continuando los estudios por 1 año 4 meses más, se consigue un segundo título como Ingeniería o Licenciatura.</p>
                                        <p>Brindamos formación <strong>60% práctica y 40% teórica</strong>.</p>
                                    </div>
                                </v-card>
                            </v-col>
                            <v-col cols="12" md="7" height="100%">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/modelo_educativo.jpg"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 8px;"
                                    height="100%"
                                ></v-img>
                            </v-col>
                        </v-row>

                        <!-- Sección 2: Ventajas -->
                        <v-row class="mb-10" >
                            <v-col cols="12" md="5" order-md="1" order="2" height="100%">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Ventaja_estudiar_nosotros.jpg"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 8px;"
                                    height="100%"
                                ></v-img>
                            </v-col>
                            <v-col cols="12" md="7" order-md="2" order="1">
                                <v-card class="elevation-3 pa-3" height="100%">
                                    <h2 class="text-h4 mb-4">
                                        <span class="primary--text">Ventajas de</span> Estudiar en UTL
                                    </h2>
                                    <div class="body-1 mb-4">
                                        <p>La Universidad Tecnológica de León (UTL) forma parte del Sistema Nacional de Universidades Tecnológicas, integrado por más de 122 planteles en la República Mexicana. Nuestro modelo ofrece planes de estudio funcionales, para formar a los profesionales que requieren los sectores productivos y sociales.</p>
                                        <p>La UTL cuenta con más de <strong>29 años de experiencia</strong> y ha recibido importantes reconocimientos de calidad. Tenemos las certificaciones en la norma ISO 9001:2015 e ISO 14001:2015, además de todos nuestros programas educativos están acreditados en calidad por organismos reconocidos por el COPAES (Consejo para la Acreditación de la Educación Superior) y CIEES (Comités Interinstitucionales para la Evaluación de la Educación Superior).</p>
                                    </div>
                                </v-card>
                            </v-col>
                        </v-row>

                        <!-- Botones de acción -->
                        <v-row class="mb-6 justify-center">
                            <v-col cols="12" md="6">
                                <v-row justify="center">
                                    <v-col cols="12" sm="6">
                                        <v-hover v-slot="{ hover }">
                                            <v-card 
                                                flat
                                                :elevation="hover ? 6 : 2"
                                                class="boton-card"
                                                @click="navigateTo('#')"
                                                
                                            >
                                                <v-img
                                                    src="https://www.utleon.edu.mx/resource/img/botones/aspirante/3.png"
                                                    aspect-ratio="2.68"
                                                    contain
                                                ></v-img>
                                            </v-card>
                                        </v-hover>
                                    </v-col>
                                    <v-col cols="12" sm="6">
                                        <v-hover v-slot="{ hover }">
                                            <v-card 
                                                flat
                                                :elevation="hover ? 6 : 2"
                                                class="boton-card"
                                                @click="navigateTo('#')"
                                            >
                                                <v-img
                                                    src="https://www.utleon.edu.mx/resource/img/botones/aspirante/4.png"
                                                    aspect-ratio="2.7"
                                                    contain
                                                ></v-img>
                                            </v-card>
                                        </v-hover>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>

                    </v-container>
                </v-main>
            </v-app>
        </div>  
    </div>
    
    <?php include_once("vista/footer.php") ?>
</body>

<script>
    new Vue({
        el: '#appModeloEducativo',
        vuetify: new Vuetify(),
        data: () => ({
           
        }) 
    })
</script>

