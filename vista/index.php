<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <link href="../resource/css/icon_material_design_4495/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../resource/javascript/VueJs/vuetify/vuetify.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <script src="../resource/javascript/sweetalert2/sweetalert2.all.js"></script>
        <script src="../../resource/javascript/axios/axios.min.js" ></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <script src="../resource/javascript/VueJs/vue/vue.js"></script>
        <script type="" src="../resource/javascript/VueJs/vue/vue-composition-api.prod.js" ></script>
        <script src="../resource/javascript/VueJs/vuetify/vuetify.min.js"></script>

        <!-- <link href="../resource/css/estilos.css" rel="stylesheet"> -->
        <link href="../resource/css/roboto.css" rel="stylesheet">
        
        <link rel="stylesheet" href="/vista/styles.css">


        <title>UTL | Home</title>
        
    </head>

    <?php 
 
    ?>

    <body class="app-container">
        
            <?php 
                include_once("headerUriel.php") 
            ?>
            <div class="content-wrapper">
                <?php
                    include_once("sideBar.php")
                ?>
                
            
                <div id="app" class="main-content">

                    <v-app>   

                        <v-main>
                            <v-container fluid>
                                <v-row>
                                    <v-col cols="12">

                                        <!-- Carrusel de imágenes principal -->
                                        <v-carousel
                                        cycle
                                        height="450" 
                                        width="100%"
                                        hide-delimiter-background
                                        show-arrows-on-hover
                                        >
                                            <v-carousel-item
                                                v-for="(item, i) in items"
                                                :key="i"
                                                height="auto"
                                                min-width="100%"
                                            >
                                            <v-img
                                                :src="item.src"
                                                max-height="auto"
                                                class="mx-auto"
                                                style="height: 100%; width: auto; object-fit: contain; background: #f5f5f5;"
                                                ></v-img>
                                            </v-carousel-item>
                                        </v-carousel>
                                    
                                        <!-- Oferta Educativa -->
                                        <h2 class="secondary--text mt-5">Oferta Educativa</h2>
                                    
                                        <v-row class="mx-2" >
                                            <v-col cols="12" max-height="50px">
                                                <v-chip-group v-model="filter" column multiple>
                                                    <!-- <v-chip filter outlined value="pregrado">Pregrado</v-chip>
                                                    <v-chip filter outlined value="postgrado">Postgrado</v-chip>
                                                    <v-chip filter outlined value="diplomados">Diplomados</v-chip>
                                                    <v-chip filter outlined value="online">En línea</v-chip> -->
                                                    <v-btn color="primary" class="" @click="window.location.href='ofertaEducativa.php'">
                                                        Ver más carreras
                                                    </v-btn>
                                                </v-chip-group>       
                                            </v-col>
                                        </v-row>

                                        <!-- Grid de carreras -->
                                        <v-row class="mx-2 mb-2">
                                            <v-col
                                                v-for="(programa, i) in programasFiltrados"
                                                :key="i"
                                                cols="12"
                                                sm="6"
                                                md="4"
                                                lg="3"
                                            >
                                                <v-card height="100%" hover class=" d-flex flex-column justify-space-between">
                                                    <v-img
                                                        :src="programa.imagen"
                                                        height="190"
                                                        max-height="190"
                                                        
                                                    >
                                                        <!-- <v-card-title class="white--text">
                                                            {{ programa.nombre.toUpperCase() }}
                                                        </v-card-title> -->
                                                    </v-img>

                                                    <v-card-text>
                                                        <div class="text-subtitle-1 mb-2">
                                                            <v-icon small>mdi-clock</v-icon>
                                                            {{ programa.duracion }}
                                                        </div>
                                                        <div class="text-caption font-weight-black">
                                                            <!-- {{ programa.descripcionCorta }} -->
                                                            {{ programa.nombre.toUpperCase() }}
                                                        </div>
                                                    </v-card-text>

                                                    <v-card-actions class="px-4 pb-3">
                                                        <v-btn color="primary" small text @click="verDetalle(programa)">
                                                            Más información
                                                        </v-btn>
                                                        <v-spacer></v-spacer>
                                                    </v-card-actions>
                                                </v-card>
                                            </v-col>
                                        </v-row>

                                        <!-- Carrusel de cards de noticias-->
                                        
                                        <h2 class="secondary--text mt-5">Avisos y Noticias</h2>

                                        <v-carousel 
                                            v-if="eventos.length > 0"
                                            cycle 
                                            height="auto"
                                            hide-delimiters
                                            :show-arrows="eventos.length > 3"
                                        >
                                            <v-carousel-item 
                                            v-for="(chunk, index) in chunkedEventos" 
                                            :key="'chunk-'+index"
                                            >
                                            <v-container>
                                                <v-row>
                                                <v-col
                                                    v-for="(evento, i) in chunk"
                                                    :key="'evento-'+evento.cve_eventos"
                                                    cols="12"
                                                    sm="6"
                                                    md="4"
                                                >
                                                    <v-card hover height="100%" class="d-flex flex-column evento-card">
                                                    <v-img
                                                        :src="evento.imagen_portada"
                                                        height="180"
                                                        class="white--text align-end evento-imagen"
                                                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    >
                                                        <v-card-title class="evento-title">{{ formatFecha(evento.fecha) }}</v-card-title>
                                                    </v-img>
                                                    
                                                    <v-card-text class="evento-info">
                                                        <div class="text-subtitle-1">
                                                            {{ evento.titulo }}
                                                        </div>
                                                        <div class="text-subtitle-1">
                                                            <v-icon small>mdi-clock</v-icon>
                                                            {{ evento.hora_inicio }} - {{ evento.hora_fin }}
                                                        </div>
                                                        <div class="text-subtitle-1">
                                                        <v-icon small>mdi-map-marker</v-icon>
                                                            {{ evento.lugar }}
                                                        </div>
                                                    </v-card-text>
                                                    
                                                    <v-card-actions class="mt-auto">
                                                        <v-btn 
                                                        color="primary" 
                                                        text 
                                                        @click="abrirModalEvento(evento)"
                                                        class="evento-btn"
                                                        >
                                                        Ver más
                                                        </v-btn>
                                                    </v-card-actions>
                                                    </v-card>
                                                </v-col>
                                                </v-row>
                                            </v-container>
                                            </v-carousel-item>
                                        </v-carousel>


                                        <!-- Servicios culturales y deportivos -->
                                        <h2 class="secondary--text mt-4"> Servicios culturales y deportivos</h1>
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
                                                            <v-card hover >
                                                                <v-img :src="item.imagen" height="auto" contain></v-img>
                                                                <v-card-title>{{ item.nombre }}</v-card-title>
                                                                <v-card-text>
                                                                    <v-chip small class="mr-2" color="indigo" dark>
                                                                        {{ item.tipo }} <!-- Taller, Concierto, Exposición -->
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
                                                                        {{ item.tipo }} <!-- Fútbol, Natación, Yoga -->
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
                                        

                                        <v-dialog v-model="modalEvento" max-width="800">
                                            <v-card v-if="eventoSeleccionado">
                                                <v-card-title class="headline">
                                                    {{ eventoSeleccionado.titulo }}
                                                    <v-spacer></v-spacer>
                                                    <v-btn icon @click="modalEvento = false">
                                                        <v-icon>mdi-close</v-icon>
                                                    </v-btn>
                                                </v-card-title>
                                                
                                                <v-img
                                                :src="eventoSeleccionado.imagen_portada"
                                                height="300"
                                                class="white--text align-end"
                                                ></v-img>
                                                
                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12" md="6">
                                                        <div class="text-h6 mb-2">
                                                            <v-icon left>mdi-calendar</v-icon>
                                                            Fechas:
                                                        </div>
                                                        <p>Inicio: {{ formatFecha(eventoSeleccionado.fecha) }}</p>
                                                        <p v-if="eventoSeleccionado.fecha_fin">
                                                            Fin: {{ formatFecha(eventoSeleccionado.fecha_fin) }}
                                                        </p>
                                                        
                                                        <div class="text-h6 mt-4 mb-2">
                                                            <v-icon left>mdi-clock</v-icon>
                                                            Horario:
                                                        </div>
                                                        <p>{{ eventoSeleccionado.hora_inicio }} - {{ eventoSeleccionado.hora_fin }}</p>
                                                        </v-col>
                                                        
                                                        <v-col cols="12" md="6">
                                                        <div class="text-h6 mb-2">
                                                            <v-icon left>mdi-map-marker</v-icon>
                                                            Ubicación:
                                                        </div>
                                                        <p>{{ eventoSeleccionado.lugar }}</p>
                                                        
                                                        <div class="text-h6 mt-4 mb-2">
                                                            <v-icon left>mdi-information</v-icon>
                                                            Información:
                                                        </div>
                                                        <p>{{ eventoSeleccionado.informacion }}</p>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                                
                                                <v-card-actions>
                                                    <v-spacer></v-spacer>
                                                    <v-btn color="primary" @click="modalEvento = false">
                                                        Cerrar
                                                    </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </v-dialog>

                                        
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-main>
                        
                    </v-app>
                    
                </div>  
                
            </div>
            <?php include_once("footer.php") ?>
            

    </body>

    <!-- Desarrollo -->
    
    
    <script type="module">
        import {preloader, guardar, errorGuardar, actualizar, errorActualizar, eliminar, errorEliminar, cerrar, confirmarE, aviso, confirmar} from '../resource/javascript/sweetalert2/mensajes_sweetalert_vue.js'; 
        

        const ca = window.VueCompositionAPI;
        Vue.use(ca.default);
        new Vue({
            el: "#app",
            vuetify: new Vuetify(),

            methods: {
                hoverEffect(event) {
                    event.currentTarget.style.background = 'rgba(156, 211, 198, 0.74)';
                    event.currentTarget.style.color = '#FFFFFF';
                },
                unhoverEffect(event) {
                    event.currentTarget.style.background = '#283593';
                    event.currentTarget.style.color = '#9CD3C6';
                },
                chunkArray(array, size) {
                    const result = [];
                    for (let i = 0; i < array.length; i += size) {
                        result.push(array.slice(i, i + size));
                    }
                    return result;
                },
                limitWords(text, maxWords) {
                    if (!text) return '';
                    const words = text.split(' ');
                    if (words.length > maxWords) {
                    return words.slice(0, maxWords).join(' ') + '...';
                    }
                    return text;
                },

                verDetalle(programa) {
                    
                },
              
            },
            
            setup(){
                const {ref, onMounted, watch, computed} = VueCompositionAPI;
                const url = ref('');
                const eventos = ref([]);
                const modalEvento = ref(false);
                const eventoSeleccionado = ref(null);
    
                
                const chunkedEventos = computed(() => {
                    const chunkSize = 3;
                    const chunks = [];
                    for (let i = 0; i < eventos.value.length; i += chunkSize) {
                        chunks.push(eventos.value.slice(i, i + chunkSize));
                    }
                    return chunks;
                });
                

                async function cargarEventos() {
                    try {
                        const response = await axios.post('../../controlador/controlador_eventos.php', 
                        new URLSearchParams({ accion: 11 })
                        );
                        
                        if (response.status === 200 && response.data && Array.isArray(response.data)) {
                        eventos.value = response.data.map(evento => ({
                            ...evento,
                            imagen_portada: `http://localhost/resource/${evento.imagen_portada}`,
                            titulo: evento.titulo || 'Evento sin título',
                            fecha: evento.fecha || '',
                            hora_inicio: evento.hora_inicio || '',
                            lugar: evento.lugar || 'Ubicación no especificada'
                        }));
                        }
                    } catch (error) {
                        console.error("Error cargando eventos:", error);
                        eventos.value = [];
                    }
                }

                function abrirModalEvento(evento) {
                    eventoSeleccionado.value = evento;
                    modalEvento.value = true;
                }
                
                function formatFecha(fecha) {
                    if (!fecha) return '';
                    try {
                        const options = { year: 'numeric', month: 'long', day: 'numeric' };
                        return new Date(fecha).toLocaleDateString('es-ES', options);
                    } catch {
                        return fecha;
                    }
                }

                onMounted(() => {
                    url.value = window.location.search;
                    cargarEventos();
                });

                return {
                    eventos,
                    chunkedEventos,
                    modalEvento,
                    eventoSeleccionado,
                    abrirModalEvento,
                    formatFecha
                }
            },

            computed: {
                
                programasFiltrados() {
                    if (this.filter.length === 0) return this.programas;
                    return this.programas.filter((p) =>
                        this.filter.some((f) => p.categoria === f)
                    );
                },
            },

            data: () => ({
                items:[
                    {
                        src: "https://www.utleon.edu.mx/resource/popup/v2_202503111137.jpg",
                    },
                    {
                        src: "https://www.utleon.edu.mx/resource/img/imagenes/zona%20libre/Conoce%20la%20UTL.PNG",
                    },
                    {
                        src: "https://www.utleon.edu.mx/resource/img/imagenes/zona%20libre/Conoce%20la%20UTL.PNG",
                    }
                ], 
                currentSlide: 0,
                
                quickLinks: [
                    {
                        title: 'Eventos Institucionales',
                        description: 'Conoce los eventos más importantes de la universidad',
                        link: '#',
                    },
                    {
                        title: 'Biblioteca Digital',
                        description: 'Consulta el acervo digital de la universidad',
                        link: '#',
                    },
                    {
                        title: 'Bolsa de Trabajo',
                        description: 'Encuentra las mejores ofertas laborales',
                        link: '#',
                    },
                    {
                        title: 'Oferta Académica',
                        description: 'Conoce la oferta académica de la universidad',
                        link: '#',
                    },

                ],
                filter: [],
                programas: [
                    {
                        nombre: "Ingeniería en entornos virtuales y negocios digitales",
                        duracion: "3 años y 4 meses",
                        descripcionCorta: "Formación en diseño y construcción de infraestructuras.",
                        modalidad: "Presencial",
                        categoria: "pregrado",
                        imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/ENTORNOS%20VIRTUALES%20Y%20NEGOCIOS%20DIGITALES.jpg",
                    },
                    {
                        nombre: "INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN DESARROLLO DE SOFTWARE MULTIPLATAFORMA",
                        duracion: "3 años y 4 meses",
                        descripcionCorta: "Formación en desarrollo de software y sistemas.",
                        modalidad: "Presencial",
                        categoria: "pregrado",
                        imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20TECNOLOG%C3%8DAS%20DE%20LA%20INFORMACI%C3%93N%20E%20INNOVACI%C3%93N%20CON%20TSU%20EN%20DESARROLLO%20DE%20SOFTWARE%20MULTIPLATAFORMA.JPG",
                    },
                    {
                        nombre: "INGENIERIA EN MECATRÓNICA CON TSU EN OPTOMECATRÓNICA",
                        duracion: "3 años y 4 meses",
                        descripcionCorta: "Formación avanzada en administración y gestión empresarial.",
                        modalidad: "Presencial",
                        categoria: "postgrado",
                        imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/INGENIERIA%20EN%20MECATR%C3%93NICA%20CON%20TSU%20EN%20OPTOMECATR%C3%93NICA.JPG",
                    },
                    {
                        nombre: "LICENCIATURA EN GESTIÓN Y DESARROLLO TURÍSTICO CON TSU EN TURISMO",
                        duracion: "3 años y 4 meses",
                        descripcionCorta: "Formación en estrategias de marketing digital.",
                        modalidad: "En línea",
                        categoria: "diplomados",
                        imagen: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/TURISMO.jpg",
                    },
                    
                ],   
                culturales: [
                    {
                        nombre: "Taller de artes plásticas",
                        tipo: "Taller",
                        descripcion: "Aprende artes plásticas y pintura.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/artes-plasticas.jpg",
                    },
                    {
                        nombre: "Baile de Salón",
                        tipo: "Clases",
                        descripcion: "Clases de salsa y bachata.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/baile-de-salon.jpg",
                    },
                    {
                        nombre: "Yoga",
                        tipo: "Taller",
                        descripcion: "Clases de yoga para principiantes.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/yoga.jpg",
                    },
                    {
                        nombre: "Canto",
                        tipo: "Taller",
                        descripcion: "Aprende a cantar y mejorar tu voz.",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/canto.jpg",
                    },
                    // {
                    //     nombre: "Música",
                    //     tipo: "Taller",
                    //     descripcion: "Taller de música e instrumentos.",
                    //     imagen: "https://www.utleon.edu.mx/resource/img/actividades/musica.jpg",
                    // },
                ],
                deportivos: [
                    {
                        nombre: "Fútbol",
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
                        nombre: "Porra Acrobática",
                        tipo: "Deporte",
                        horario: "Lunes y Miércoles 15:00 - 17:00",
                        imagen: "https://www.utleon.edu.mx/resource/img/actividades/porraacrobatica.jpg",                     
                    }
                ],
                tab: null,
            }),
            
        });


        document.addEventListener("DOMContentLoaded", function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');
            
            submenuToggles.forEach(toggle => {
                
                toggle.addEventListener('mouseover', function () {
                    const submenu = this.nextElementSibling; 
                    submenu.classList.add('open'); 
                });

                
                toggle.addEventListener('mouseout', function () {
                    const submenu = this.nextElementSibling; 
                    submenu.classList.remove('open'); 
                });
            });
        });

        document.querySelectorAll(".submenu-toggle").forEach((toggle) => {
            toggle.addEventListener("click", function (event) {
                event.preventDefault();
                let submenu = this.nextElementSibling;
                submenu.classList.toggle("open");
            });
        });
    

    </script>
</html>