<head>
    
    <title>UTL | Actividades culturales y deportivas</title>
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
        
            <div id="appCulturaDeporte" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Cultura y</span> Deporte
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <h1 class="h4 mb-3">
                                    </h1>

                                    <v-img :src="mainImage" style="border-radius: 8px" ></v-img>

                                    <p class="text-justify py-2 px-3">
                                        Contribuir al desarrollo integral del estudiantado universitario 
                                        fomentando valores, actitudes, habilidades y conocimientos a través 
                                        de actividades culturales.
                                    </p>
                                    <p class="text-justify py-2 px-3">
                                        Dentro de las actividades culturales y deportivas desarrollamos 
                                        las habilidades, destrezas, actitudes y valores de nuestro alumnado 
                                        de manera integral.
                                    </p>
                                    <p class="text-justify py-2 px-3">
                                        Mostramos a la comunidad mediante exposiciones y presentaciones 
                                        nuestras cualidades adquiridas en los talleres culturales.
                                    </p>

                                    <v-tabs v-model="tab" grow>
                                            <v-tab> <v-icon left>mdi-palette</v-icon> Cultura </v-tab>
                                            <v-tab> <v-icon left>mdi-soccer</v-icon> Deporte </v-tab>
                                    </v-tabs>

                                    <v-tabs-items v-model="tab">
                                        <!-- SECCIÓN CULTURAL -->
                                        <v-tab-item>
                                            <v-container fluid>
                                                <v-row>
                                                    <v-col v-for="(item, i) in culturales"  :key="i" cols="12" sm="6" md="4" lg="3">
                                                        <v-card hover>
                                                            <v-img :src="item.imagen" height="auto" contain></v-img>
                                                            <v-card-title>{{ item.nombre }}</v-card-title>
                                                            <v-card-text>
                                                                <v-chip small class="mr-2" color="indigo" dark>
                                                                    {{ item.tipo }} 
                                                                </v-chip>
                                                                <p class="mt-2">{{ item.descripcion }}</p>
                                                            </v-card-text>
                                                            <v-card-actions>
                                                                <v-btn text color="primary" @click="">
                                                                    Participar
                                                                </v-btn>
                                                            </v-card-actions>
                                                        </v-card>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                        </v-tab-item>

                                        <!-- SECCIÓN DEPORTIVA -->
                                        <v-tab-item>
                                            <v-container fluid>
                                                <v-row>
                                                    <v-col v-for="(item, i) in deportivos" :key="i" cols="12" sm="6" md="4" lg="3">
                                                        <v-card hover>
                                                            <v-img :src="item.imagen" height="auto" contain></v-img>
                                                            <v-card-title>{{ item.nombre }}</v-card-title>
                                                            <v-card-text>
                                                                <v-chip small class="mr-2" color="indigo" dark>
                                                                    {{ item.tipo }} 
                                                                </v-chip>
                                                                <p><v-icon small>mdi-calendar</v-icon> {{ item.horario }}</p>
                                                            </v-card-text>
                                                            <v-card-actions>
                                                                <v-btn text color="primary" @click="">
                                                                    Unirse
                                                                </v-btn>
                                                            </v-card-actions>
                                                        </v-card>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                        </v-tab-item>
                                    </v-tabs-items>

                                    <v-row>
                                        <v-col cols="12" md="6" lg="6" class="d-flex flex-column text-center justify-center">
                                            <v-btn color="primary" >
                                                Actividades culturales campus central
                                            </v-btn>
                                            <v-btn color="primary" class="my-10" >
                                                Actividades culturales campus II
                                            </v-btn>
                                            <v-btn color="primary" >
                                                Actividades deportivas campus central y II
                                            </v-btn>
                                        </v-col>
                                        
                                        <v-col cols="12" md="6" lg="6" class="">
                                            <v-card elevation="4" class="my-4 pa-3" style="width: 100%;">                                                
                                                <h2 class="h3 primary--text">Contáctanos </h2>
                                                <div class="d-flex flex-column py-2 px-3" >
                                                    <p>
                                                        Lic. Teresa Negrete Rayas
                                                    </p>
                                                    <p>
                                                        Lunes a viernes de 8:00 a 16:00 hrs
                                                    </p>
                                                    <p>
                                                        Edificio C Campus Central
                                                    </p>
                                                    <p>
                                                        <a href="mailto:mnegrete@utleon.edu.mx">mnegrete@utleon.edu.mx</a>
                                                    </p>
                                                </div>
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
        el: '#appCulturaDeporte',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/actividades/cultura-y-deporte-img.jpg",
            tab:null,
            culturales: [
                    {
                        nombre: "Taller de artes plásticas",
                        tipo: "Taller",
                        descripcion: "Aprende artes plásticas y pintura.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/artes-plasticas.jpg",
                    },
                    {
                        nombre: "Baile de Salón",
                        tipo: "Baile",
                        descripcion: "Clases de salsa y bachata.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/baile-de-salon.jpg",
                    },
                    {
                        nombre: "Yoga",
                        tipo: "Cultural",
                        descripcion: "Clases de yoga para principiantes.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/yoga.jpg",
                    },
                    {
                        nombre: "Canto",
                        tipo: "Clase de canto",
                        descripcion: "Aprende a cantar y mejorar tu voz.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/canto.jpg",
                    }, 
                    {
                        nombre: "Escolta a la Bandera",
                        tipo: "Cultural",
                        descripcion: "Participa en la escolta de la bandera.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/escolta2.jpg",
                    },
                    {
                        nombre: "Música",
                        tipo: "Taller",
                        descripcion: "Aprende a tocar un instrumento musical.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/musica.jpg",
                    },
                    {
                        nombre: "Teatro",
                        tipo: "Taller",
                        descripcion: "Clases de actuación y teatro.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/teatro.jpg",
                    },


                ],
                deportivos: [
                    {
                        nombre: "Fútbol Soccer",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/FutbolSoccer.jpg",
                    },
                    {
                        nombre: "Tae Kwon Do",
                        tipo: "Deporte",
                        horario: "Martes y Jueves 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/TaeKwonDo.jpg",
                    },
                    {
                        nombre: "Voleybol de Sala",
                        tipo: "Deporte",
                        horario: "Viernes 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/VoleiboldeSala.jpg",
                    },
                    {
                        nombre: "Atletismo",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/Atletismo.jpg",
                    },
                    {
                        nombre: "Beisbol",
                        tipo: "Deporte",
                        horario: "Martes y Jueves 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/beisbol21.jpg",
                    },
                    {
                        nombre: "Basquetbol",
                        tipo: "Deporte",
                        horario: "Martes y Jueves 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/basquetbol2021.jpg",
                    },
                    {
                        nombre: "Americano",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/americano.jpg",
                    },
                    {
                        nombre: "Fútbol 7",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/futbol7.jpg",
                    },
                    {
                        nombre: "Porra Acrobática",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/porraacrobatica.jpg",
                    },
                    {
                        nombre: "Defensa Personal",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/DefensaPersonal.jpg",
                    }
                ],
        })
    })

</script>

