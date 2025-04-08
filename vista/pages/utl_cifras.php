
<head>
    <title>UTL | UTL en Cifras</title>
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
        
            <div id="appUtlCifras" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    
                            
                            <v-container fluid class="pa-0">
                                
                                <v-row justify="center" class="">
                                    <v-col cols="12" class="text-center">
                                        <h2 class="text-h3 font-weight-bold">
                                            <span class="primary--text ">Cifras que </span>nos destacan
                                        </h2>
                                        <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        <p class="text-h6 ">Conoce los números de nuestra universidad</p>
                                    </v-col>
                                </v-row>

                                
                                <v-row no-gutters>
                                    <v-col 
                                        v-for="(item, index) in cifras" 
                                        :key="index"
                                        cols="6" md="3"
                                        class="pa-2"
                                    >
                                        <v-hover v-slot="{ hover }">
                                            <v-card 
                                                class="image-card"
                                                :elevation="hover ? 12 : 3"
                                                @click="openLightbox(index)"
                                            >
                                                <v-img
                                                :src="item.imagen"
                                                aspect-ratio="1"
                                                gradient="to top, rgba(0,0,0,0.4), rgba(0,0,0,0.1)"
                                                class="white--text align-end"
                                                >
                                                    <v-expand-transition>
                                                        <div
                                                        v-if="hover"
                                                        class="d-flex transition-fast-in-fast-out v-card--reveal display-3 white--text"
                                                        style="height: 100%;"
                                                        >
                                                            <v-icon x-large color="white">mdi-magnify-plus-outline</v-icon>
                                                        </div>
                                                    </v-expand-transition>
                                                    <v-card-title class="text-h5 font-weight-bold">{{ item.titulo }}</v-card-title>
                                                </v-img>
                                            </v-card>
                                        </v-hover>
                                    </v-col>
                                </v-row>

                                
                                <v-dialog v-model="lightbox" max-width="1200">
                                    <v-card v-if="currentImage">
                                        <v-img :src="currentImage.imagen" contain max-height="80vh"></v-img>
                                        <v-card-actions>
                                        <v-btn icon @click="prevImage">
                                            <v-icon>mdi-chevron-left</v-icon>
                                        </v-btn>
                                        <v-spacer></v-spacer>
                                        <v-card-title class="text-h4">{{ currentImage.titulo }}</v-card-title>
                                        <v-spacer></v-spacer>
                                        <v-btn icon @click="nextImage">
                                            <v-icon>mdi-chevron-right</v-icon>
                                        </v-btn>
                                        <v-btn icon @click="lightbox = false">
                                            <v-icon>mdi-close</v-icon>
                                        </v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>

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
        el: '#appUtlCifras',
        vuetify: new Vuetify(),
        data: () => ({
            lightbox: false,
            currentIndex: 0,
            cifras: [
                { 
                    titulo: "Matricula 2018 a 2023", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-02.jpg", 
                    descripcion: "Estudiantes matriculados en nuestros programas" 
                },
                {
                    titulo: "Egresados 2018 a 2023 Hombres y Mujeres", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-03.jpg", 
                    descripcion: "Estudiantes que han concluido su formación profesional por genero" 
                },
                { 
                    titulo: "Absorción", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-07.jpg", 
                    descripcion: "Egresados que han encontrado empleo" 
                },
                { 
                    titulo: "Histórico de Egresados", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-05.jpg", 
                    descripcion: "Egresados por históricamente"
                },
                {
                    titulo: "Población Atendida ", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-06.jpg", 
                    descripcion: "Población atendida por la universidad" 
                },
                { 
                    titulo: "Eficiencia de Titulación", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-04.jpg", 
                    descripcion: "Eficiencia de titulación por programa y ciclo escolar" 
                },
                { 
                    titulo: "Modelo DUAL", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-08.jpg", 
                    descripcion: "Modelo DUAL por programa, histórico y ciclo escolar 2023" 
                },
                { 
                    titulo: "Calidad", 
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/UTL%20EN%20DATOS-09.jpg", 
                    descripcion: "Certificaciones y Acreditaciones"
                }

            ]
        }),
        computed: {
            currentImage() {
            return this.cifras[this.currentIndex]
            }
        },
        methods: {
            openLightbox(index) {
            this.currentIndex = index
            this.lightbox = true
            },
            nextImage() {
            this.currentIndex = (this.currentIndex + 1) % this.cifras.length
            },
            prevImage() {
            this.currentIndex = (this.currentIndex - 1 + this.cifras.length) % this.cifras.length
            }
        }
    })
</script>

<style scoped>
.image-card {
  transition: all 0.3s ease;
  cursor: pointer;
}
.image-card:hover {
  transform: scale(1.02);
}
.v-card--reveal {
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.3);
}
</style>