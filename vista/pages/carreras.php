<head>
    <title>UTL | Oferta Educativa</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appCarreras" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>    
                        
                        <v-row class="mb-6" align="center">
                            <v-col cols="12" md="5">
                                <h1 class="text-h2">
                                    <span class="primary--text">Carreras de</span> Licenciatura e Ingeniería
                                </h1>
                            </v-col>
                            <v-col cols="12" md="7" class="text-center">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/ing_oferta_general.JPG"
                                    aspect-ratio="1.5"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px; max-height: 459px;"
                                    alt="Oferta educativa UTL"
                                ></v-img>
                            </v-col>
                        </v-row>

                        <v-divider class="my-6"></v-divider>

                        <!-- Cards de carreras -->
                        <v-row class="mx-2 mb-2">
                            <v-col
                                v-for="(programa, i) in programas"
                                :key="i"
                                cols="12"
                                sm="6"
                                md="4"
                                lg="3"
                            >
                                <v-card height="100%" hover class="d-flex flex-column justify-space-between" elevation="2">
                                    <v-img
                                        :src="programa.imagen"
                                        height="190"
                                        max-height="190"
                                        class="align-end"
                                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                    >
                                        <v-card-title class="white--text text-subtitle-1">
                                            {{ programa.nombre.split('CON TSU')[0] }}
                                        </v-card-title>
                                    </v-img>

                                    <v-card-text>
                                        <div class="text-subtitle-2 mb-2">
                                            <v-icon small color="primary">mdi-clock-outline</v-icon>
                                            {{ programa.duracion }}
                                        </div>
                                        <div class="text-caption font-weight-bold primary--text">
                                            {{ programa.nombre.split('CON TSU')[1] || ' ' }}
                                        </div>
                                    </v-card-text>

                                    <v-card-actions class="px-4 pb-3">
                                        <!-- redireccionar a la pagina con el atributo de href del objeto -->
                                        <v-btn 
                                            color="primary" 
                                            small 
                                            text 
                                            :href="programa.href"
                                            block
                                        >
                                            Más información
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

    <script>
    new Vue({
        el: '#appCarreras',
        vuetify: new Vuetify(),
        data: () => ({
            programas: [
                {
                    nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN ENTORNOS VIRTUALES Y NEGOCIOS DIGITALES",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en diseño y construcción de infraestructuras.",
                    href: '/entornos-virtuales',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/ENTORNOS%20VIRTUALES%20Y%20NEGOCIOS%20DIGITALES.jpg",
                },
                {
                    nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN INFRAESTRUCTURA DE REDES DIGITALES",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en desarrollo de software y sistemas.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/REDES%20DIGITALES.jpg",
                },
                {
                    nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN DESARROLLO DE SOFTWARE MULTIPLATAFORMA",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en desarrollo de software multiplataforma.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20TECNOLOG%C3%8DAS%20DE%20LA%20INFORMACI%C3%93N%20E%20INNOVACI%C3%93N%20CON%20TSU%20EN%20DESARROLLO%20DE%20SOFTWARE%20MULTIPLATAFORMA.JPG",
                },
                {
                    nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN INTELIGENCIA ARTIFICIAL",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en inteligencia artificial y machine learning.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INTELIGENCIA%20ARTIFICIAL.jpg",
                },
                {
                    nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN CIENCIA DE DATOS",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en análisis y ciencia de datos.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/CIENCIA%20DE%20DATOS.jpg",
                },
                {
                    nombre: "INGENIERÍA EN MECATRÓNICA CON TSU EN SISTEMAS DE MANUFACTURA FLEXIBLE",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en sistemas de manufactura flexible.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/MANUFACTURA%20FLEXIBLE.jpg",
                },
                {
                    nombre: "INGENIERÍA EN MECATRÓNICA CON TSU EN OPTOMECATRÓNICA",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en optomecatrónica y sistemas ópticos.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20MECATR%C3%93NICA%20CON%20TSU%20EN%20OPTOMECATR%C3%93NICA.JPG",
                },
                {
                    nombre: "INGENIERÍA EN MECATRÓNICA CON TSU EN AUTOMATIZACIÓN",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en automatización industrial.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/AUTOMATIZACI%C3%93N.jpg",
                },
                {
                    nombre: "INGENIERÍA INDUSTRIAL CON TSU EN SISTEMAS PRODUCTIVOS",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en sistemas productivos industriales.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20MECATR%C3%93NICA%20CON%20TSU%20EN%20SISTEMAS%20DE%20MANUFACTURA%20FLEXIBLE.JPG",
                },
                {
                    nombre: "INGENIERÍA INDUSTRIAL CON TSU EN MOLDEO DE PLÁSTICOS",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en moldeo y transformación de plásticos.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/PLASTICOS.jpg",
                },
                {
                    nombre: "INGENIERÍA INDUSTRIAL CON TSU EN GESTIÓN Y PRODUCTIVIDAD DE CALZADO",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en industria del calzado.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/CALZADO.jpg",
                },
                {
                    nombre: "INGENIERÍA INDUSTRIAL CON TSU EN AUTOMOTRÍZ",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en industria automotriz.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIER%C3%8DA%20INDUSTRIAL%20CON%20TSU%20EN%20AUTOMOTR%C3%8DZ.JPG",
                },
                {
                    nombre: "INGENIERÍA EN MANTENIMIENTO INDUSTRIAL CON TSU EN MANTENIMIENTO INDUSTRIAL",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en mantenimiento industrial.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20MANTENIMIENTO%20INDUSTRIAL%20CON%20TSU%20EN%20MANTENIMIENTO%20INDUSTRIAL.JPG",
                },
                {
                    nombre: "INGENIERÍA EN LOGÍSTICA CON TSU EN TRANSPORTE Y MOVILIDAD",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en logística y transporte.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20LOG%C3%8DSTICA%20CON%20TSU%20EN%20TRANSPORTE%20Y%20MOVILIDAD.JPG",
                },
                {
                    nombre: "INGENIERÍA EN AMBIENTAL Y SUSTENTABILIDAD CON TSU EN GESTIÓN AMBIENTAL",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en gestión ambiental y sustentabilidad.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20AMBIENTAL%20Y%20SUSTENTABILIDAD%20CON%20TSU%20EN%20GESTI%C3%93N%20AMBIENTAL.JPG",
                },
                {
                    nombre: "LICENCIATURA EN ADMINISTRACIÓN CON TSU EN GESTIÓN DE CAPITAL HUMANO",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en administración y recursos humanos.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/LICENCIATURA%20EN%20ADMINISTRACI%C3%93N%20CON%20TSU%20EN%20GESTI%C3%93N%20DE%20CAPITAL%20HUMANO.JPG",
                },
                {
                    nombre: "LICENCIATURA EN NEGOCIOS Y MERCADOTECNIA CON TSU EN MERCADOTECNIA",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en negocios y mercadotecnia.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/NEGOCIOS%20Y%20MERCA.jpg",
                },
                {
                    nombre: "LICENCIATURA EN GASTRONOMÍA CON TSU EN GASTRONOMÍA",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en gastronomía y artes culinarias.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/LICENCIATURA%20EN%20GASTRONOM%C3%8DA%20CON%20TSU%20EN%20GASTRONOM%C3%8DA.JPG",
                },
                {
                    nombre: "LICENCIATURA EN GESTIÓN Y DESARROLLO TURÍSTICO CON TSU EN TURISMO",
                    duracion: "3 años y 4 meses",
                    descripcionCorta: "Formación en gestión y desarrollo turístico.",
                    href: '/',
                    categoria: "pregrado",
                    imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/TURISMO.jpg",
                }
            ]
        }),
        methods: {
            verDetalle(programa) {
                
            }
        }
    })
    </script>

    <style>
    .v-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
    
    .v-card-title {
        word-break: break-word;
        line-height: 1.2;
    }
    
    </style>
</body>