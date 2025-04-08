<head>
    
    <title>UTL | Filosofía</title>
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
        
            <div id="appFilosofia" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">
                                    
                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                            <span class="primary--text">Filosofía</span>
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                        <v-img :src="mainImage" height="350" gradient="to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5)"></v-img>

                                        <v-tabs v-model="tab" grow slider-color="primary" class="mt-4 mb-4" background-color="grey lighten-5">
                                            <v-tab>Misión</v-tab>
                                            <v-tab>Visión</v-tab>
                                            <v-tab>Valores</v-tab>
                                        </v-tabs>

                                        <v-tabs-items v-model="tab" class="grey lighten-5" >
                                            <!-- Misión -->
                                            <v-tab-item >
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <h2 class="mb-2">Misión <v-icon large color="green">mdi-bullseye-arrow</v-icon></h2>
                                                    <p class="text-justify ">{{ mision }}</p>
                                                </v-card>
                                            </v-tab-item>

                                            <!-- Visión -->
                                            <v-tab-item class="">
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <h2 class="mb-2">Visión <v-icon large color="green">mdi-eye-outline</v-icon></h2>
                                                    <p class="text-justify">{{ vision }}</p>
                                                </v-card>
                                            </v-tab-item>

                                            <!-- Valores -->
                                            <v-tab-item>
                                                <v-container>
                                                    <v-row>
                                                        <v-col 
                                                        v-for="(valor, index) in valores" 
                                                        :key="index"
                                                        cols="12" md="6" lg="4"
                                                        >
                                                            <v-card class="" height="100%">
                                                                <v-card-text class="text-center">
                                                                    <v-icon x-large color="primary">{{ valor.icono }}</v-icon>
                                                                    <h3 class="title mt-2">{{ valor.nombre }}</h3>
                                                                    <p>{{ valor.descripcion }}</p>
                                                                </v-card-text>
                                                            </v-card>
                                                        </v-col>
                                                    </v-row>
                                                </v-container>
                                            </v-tab-item>
                                        </v-tabs-items>

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
        el: '#appFilosofia',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/empresario/filosofia.jpg",
            tab: null,
            mision: "Formar ciudadanos/as del mundo con educación tecnológica de calidad a través de la docencia, la investigación aplicada, la difusión del conocimiento y la vinculación, que contribuyan a la innovación y al desarrollo sustentable.",
            vision: "Somos una universidad reconocida por su calidad internacional, sus aportaciones al desarrollo de la tecnología y al bienestar de la sociedad.",
            valores: [
                // Dignidad, Honestidad, Libertad, Busqueda de la verdad, Responsabilidad, Justicia
                {
                    nombre: "Dignidad",
                    descripcion: "Es el valor intrínseco de las personas, así como de los objetos y situaciones en cuanto contribuyen a la realización personal.",
                    icono: "mdi-human-greeting"
                },
                {
                    nombre: "Honestidad",
                    descripcion: "Tener conciencia clara de lo que está bien en nuestra propia conducta y en nuestra relación con los demás.",
                    icono: "mdi-account-check"
                },
                {
                    nombre: "Libertad",
                    descripcion: "Tomar decisiones propias y expresar ideales aceptando las diferencias con el resto de las personas.",
                    icono: "mdi-lock-open"
                },
                {
                    nombre: "Búsqueda de la verdad",
                    descripcion: "Cualidad de la inteligencia por la cual el ser humano se capacita y perfecciona para llegar a las causas de las cosas.",
                    icono: "mdi-magnify"
                },
                {
                    nombre: "Responsabilidad",
                    descripcion: "Cumplir con las obligaciones y trabajos asignados según las normas establecidas.",
                    icono: "mdi-bookmark-check"
                },
                {
                    nombre: "Justicia",
                    descripcion: "Conjunto de principios que adopta una comunidad a fin de asegurar el orden y la convivencia entre sus miembros.",
                    icono: "mdi-scale-balance"
                },

            ]
        }),
    });
</script>

<style scope>

</style>