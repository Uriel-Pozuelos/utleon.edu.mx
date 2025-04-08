<head>
    
    <title>UTL | Política de Calidad Institucional</title>
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
        
            <div id="appCalidadInst" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">
                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Política </span>de Calidad Institucional
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 
                                    <h1 class="h4 mb-3">

                                    </h1>

                                    <v-card elevation="3">
                                        <v-img :src="mainImage"  height="350" gradient="to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5)"></v-img>
                                    </v-card>

                                    <div>
                                        <p class="text-justify pa-4">
                                            Nos comprometemos en brindar satisfacción a nuestros clientes y nuestras clientas, a través de los servicios 
                                            de educación superior tecnológica, de apoyo a los sectores productivo y social e incubación de negocios, así 
                                            como prevenir la contaminación de los aspectos ambientales institucionales, cumpliendo con la normativa ambiental 
                                            aplicable, promoviendo y difundiendo los principios de sustentabilidad a las partes interesadas, a través de la 
                                            mejora continua del Sistema de Gestión Integral.
                                        </p>
                                    </div>

                                    <v-card>
                                        <v-toolbar
                                        flat
                                        color="primary"
                                        dark
                                        >
                                            <v-toolbar-title>Objetivos de Calidad Integral</v-toolbar-title>
                                        </v-toolbar>
                                        <v-tabs >
                                            <v-tab>
                                                ACADÉMICO
                                            </v-tab>
                                            <v-tab class="text-center ">
                                                SERVICIOS DE APOYO AL SECTOR PRODUCTIVO Y SOCIAL
                                            </v-tab>
                                            <v-tab>
                                                INCUBACIÓN DE NEGOCIOS
                                            </v-tab>
                                            <v-tab>
                                                AMBIENTAL
                                            </v-tab>

                                            <v-tab-item>
                                                <v-card >
                                                    <v-card-text>
                                                        <p>
                                                            Contribuir a la formación de ciudadanos y ciudadanas del mundo que detonen el desarrollo de su 
                                                            entorno con valores, conocimientos y experiencias académicas, a través de la ejecución del proceso educativo.
                                                        </p>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>
                                            
                                            <v-tab-item>
                                                <v-card >
                                                    <v-card-text>
                                                        <p>
                                                            Fortalecer la vinculación académica con los sectores productivo y social en la aportación de 
                                                            soluciones tecnológicas a necesidades específicas, a través de estrategias innovadoras y de 
                                                            capacitación especializada que contribuyan al desarrollo sustentable.
                                                        </p>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>

                                            <v-tab-item>
                                                <v-card >
                                                    <v-card-text>
                                                        <p>
                                                            Fomentar una cultura de emprendimiento e innovación para la creación, desarrollo y consolidación 
                                                            de empresas a través de la incubación de negocios, ideas y proyectos, generados entre la comunidad 
                                                            universitaria y la sociedad en general.
                                                        </p>
                                                    </v-card-text>
                                                    </v-card>
                                            </v-tab-item>

                                            <v-tab-item>
                                                <v-card >
                                                    <v-card-text>
                                                        <p>
                                                            Promover la cultura de cuidado del medio ambiente para minimizar los impactos ambientales institucionales, 
                                                            cumplir la normativa aplicable y difundir a las partes interesadas los principios de sustentabilidad.
                                                        </p>
                                                    </v-card-text>
                                                    </v-card>
                                            </v-tab-item>

                                        </v-tabs>
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
        el: '#appCalidadInst',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/zona%20libre/7.3%20%20Calidad.jpg",
            tab: null,
        })
    })
</script>