<head>
    
    <title>UTL | Órganos Colegiados</title>
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
        
            <div id="appOrgColegiados" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">
                                    <h1 class="h4 mb-3">
                                        <span class="primary--text">Órganos</span> Colegiados
                                    </h1>
                                    <!-- <v-img :src="mainImage" ></v-img> -->

                                    
                                    <h2 class="h3 primary--text my-3">Comisión</h2>
                                    <v-row class="pb-3" style="border-bottom: 2px solid #00b293;">
                                        <v-col 
                                        v-for="(comision, index) in comisiones" 
                                        :key="index"
                                        cols="12" md="2" lg="3"
                                        >
                                            <v-card class="d-flex justify-center align-center" style="background-color:#1A237E;" style="background-color:#1A237E;" height="100%">
                                                <v-card-text class="text-center d-flex flex-column justify-center align-center" >
                                                    <h3 class="title white--text white--text ">{{ comision.nombre }}</h3>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>

                                    <h2 class="h3 primary--text my-3">Comisión</h2>
                                    <v-row class="pb-3" style="border-bottom: 2px solid #00b293;">
                                        <v-col 
                                        v-for="(comite, index) in comites" 
                                        :key="index"
                                        cols="12" md="2" lg="3"
                                        >
                                            <v-card class="d-flex justify-center align-center" style="background-color:#1A237E;" height="100%">
                                                <v-card-text class="text-center d-flex flex-column justify-center align-center" >
                                                    <h3 class="title white--text ">{{ comite.nombre }}</h3>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>

                                    <h2 class="h3 primary--text my-3">Comisión</h2>
                                    <v-row class="pb-3" style="border-bottom: 2px solid #00b293;">
                                        <v-col 
                                        v-for="(consejo, index) in consejos" 
                                        :key="index"
                                        cols="12" md="2" lg="3"
                                        >
                                            <v-card class="d-flex justify-center align-center" style="background-color:#1A237E;" height="100%">
                                                <v-card-text class="text-center d-flex flex-column justify-center align-center" >
                                                    <h3 class="title white--text ">{{ consejo.nombre }}</h3>
                                                </v-card-text>
                                            </v-card>
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

<script setup>
    new Vue({
        el: '#appOrgColegiados',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagen_institucional.jpg",
            comisiones: [
                { nombre: "Comisión de Calidad Integral", src:""},
                { nombre: "Comisión de Salud", src:"" },
                { nombre: "Comisión Mixta de Capacitación y Adiestramiento", src:""},
                { nombre: "Comisión de Seguridad, Salud e Higiene", src:""}
            ],
            comites: [
                // 18 comites
                { nombre: "Comité de Adquisiciones", src:""},
                { nombre: "Comité de Evaluación de Proyectos", src:"" },
                { nombre: "Comité de Evaluación de Proyectos de Inversión", src:""},
                { nombre: "Comité de Evaluación de Proyectos de Inversión", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Académico", src:""},
                { nombre: "Comité de Evaluación del Desempeño del Personal Administrativo", src:""},
            ],
            consejos:[
                {nombre: "Consejo de Formación DUAL", src:""},
                { nombre:"Consejo de Vinculación y Pertinencia", src:""},
            ]
        })
    })

</script>

