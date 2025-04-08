<head>
    <title>UTL | Historia</title>
</head>
<body class="app-container historia-page" style="scroll-behavior: smooth;" data-app="true">
        
        <?php 
            include_once("vista/headerUriel.php") 
        ?>
        <div 
            class="content-wrapper" >
            
            <?php
                include_once("vista/sideBar.php")
                
            ?>
        
            <div id="appHistoria" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                    <span class="primary--text">Historia </span>
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-row>
                                <v-col cols="12">
                                    <v-card >
                                        <v-img :src="mainImage" height="400" gradient="to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5)"></v-img>
                                    </v-card>
                                </v-col>
                            </v-row>

                            <v-row align="center" class="">
                                <v-col cols="12" md="5" height="100%">
                                    <v-card clas="elevation-3 " height="100%" width="100%">
                                        <!-- <h1 class="mb-2 secondary--text ma-3">Historia</h1> -->
                                        <p class="ma-4  pt-4">
                                            La Universidad Tecnológica de León inició su funcionamiento el 26 de septiembre de 1995.
                                            Inauguración por el Gobernador Vicente Fox Quesada, con presencia de autoridades federales, 
                                            estatales y municipales.
                                            Formamos ciudadanos con pensamiento global y acción local, con innovación, valores humanos 
                                            y educación tecnológica de calidad.
                                            Orientados a la industria 4.0 y la mente-factura.
                                        </p>
                                        <p class="ma-4 pb-4" >
                                            La UTL tuvo su origen en la petición que el Consejo Coordinador Empresarial de León 
                                            (organismo que agrupa a 10 cámaras empresariales del Estado) hizo al Dr. Ernesto Zedillo Ponce de León, 
                                            entonces titular de la Secretaría de Educación Pública, a través de un documento fechado el 14 de octubre
                                            de 1993, en el que le manifestaron la necesidad de un Centro de Educación Superior y Formación Profesional Tecnológica,
                                            que estuviera vinculado con el aparato productivo de la localidad: “Por tal motivo y, habiendo analizado y 
                                            evaluado los requerimientos que en el campo educativo requerimos en Guanajuato, hemos detectado la necesidad
                                            de crear un centro educativo que se especialice en la capacitación profesional de los mandos intermedios de
                                            las empresas. Para ello hemos investigado las diferentes instituciones educativas y hemos llegado a la conclusión 
                                            que, por su modelo pedagógico e interacción con las empresas, la Universidad Tecnológica es la que mejor puede cubrir 
                                            esta necesidad, sentida en gran parte de las empresas.
                                        </p>
                                    </v-card>

                                </v-col>

                                <v-col cols="12" md="7" height="100%">
                                    
                                    <v-card elevation="6" height="100%">
                                        <div class="image-container flex-grow-1 d-flex align-center">
                                            <v-img
                                                :src="currentImage.src" 
                                                conatain
                                                rounded
                                                height="100%"
                                                width="100%"
                                                :aspect-ratio="14/9"
                                            ></v-img>
                                        </div>
                                        <v-card-actions elevation="3">
                                            <v-btn icon @click="prevImage" x-large>
                                                <v-icon style="color: #0f0f0f">mdi-chevron-left</v-icon>
                                            </v-btn>
                                            <v-spacer></v-spacer>
                                            <v-card-title class="secondary--text">Galería de Imágenes</v-card-title>
                                            <v-spacer></v-spacer>
                                            <v-btn icon @click="nextImage" x-large>
                                                <v-icon style="color: #0f0f0f">mdi-chevron-right</v-icon>
                                            </v-btn>
                                        </v-card-actions>
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

<script>
    new Vue({
        el: '#appHistoria',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/zona%20libre/Conoce%20la%20UTL.PNG",
            galleryImages: [
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/Historia%20%20(1).jpg", title: "Primer edificio" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%204.jpeg", title: "Inauguración" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%206.jpeg", title: "Expansión" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2020.jpeg", title: "Modernización" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%207.jpeg", title: "Nueva Era" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2010.jpeg", title: "Innovación" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2011.jpeg", title: "Crecimiento" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2012.jpeg", title: "Futuro" },
                
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%208.jpeg", title: "Compromiso" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/Historia%20%20(2).jpg", title: "Desarrollo" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%203.jpeg", title: "Visión" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2013.jpeg", title: "Éxito" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2014.jpeg", title: "Logros" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2015.jpeg", title: "Reconocimiento" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2016.jpeg", title: "Futuro Brillante" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2017.jpeg", title: "Innovación Continua" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2018.jpeg", title: "Compromiso Social" },
                { src: "https://www.utleon.edu.mx/resource/img/imagenes/historia/historia%2019.jpeg", title: "Crecimiento Sostenible" },
            ],
            showGallery: true,
            currentImageIndex: 0,
            panel: [0],
            readonly: false,
            
        }),
        computed: {
            // galleryPreview() {
            //     return this.galleryImages.slice(0, 6);
            // },
            currentImage() {
                return this.galleryImages[this.currentImageIndex];
            }
        },

        methods: {
            openImage(index) {
                this.currentImageIndex = index;
                this.showGallery = true;
                
                setTimeout(() => {
                    document.querySelector('.image-viewer-container').scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                }, 100);
            },
            nextImage() {
                this.currentImageIndex = (this.currentImageIndex + 1) % this.galleryImages.length;
            },
            prevImage() {
                this.currentImageIndex = (this.currentImageIndex - 1 + this.galleryImages.length) % this.galleryImages.length;
            }
                }
            })
</script>

<style>
</style>