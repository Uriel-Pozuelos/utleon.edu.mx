<head>
    <title>UTL | Programa Anual de compras</title>
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
        
            <div id="appFinanzas" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    
                            
                            <v-row class="mb-3">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Programa Anual </span>de Compras
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row>

                            <v-row justify="center" class="mb-6">
                                <v-col cols="12" md="11">
                                    
                                    <v-row>
                                        <v-col 
                                            v-for="(item, index) in programaCompras.items"
                                            :key="`compra-${index}`"
                                            cols="6" sm="4" md="5" lg="3"
                                        >
                                            <v-btn
                                            block
                                            color="primary"
                                            dark
                                            :href="item.url"
                                            target="_blank"
                                            class="white--text text-no-wrap"
                                            height="120"
                                            
                                            >
                                                {{ item.titulo }}
                                                <v-icon right dark>mdi-file-download</v-icon>
                                            </v-btn>
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
        el: '#appFinanzas',
        vuetify: new Vuetify(),
        data: () => ({
            programaCompras: {
                items: [
                    {
                        titulo: "PAC 2025",
                        url: "https://www.utleon.edu.mx/resource/img/imagenes/utl_datos/Anexo%20I%20POAC%20Programa%20Anual%20de%20Adquisiciones.pdf",
                    },
                    {
                        titulo: "PAC 2024",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2024.pdf",
                    },
                    {
                        titulo: "PAC 2023 modificado",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2023_Modificado.pdf",
                    },
                    {
                        titulo: "PAC 2023",
                        url: "www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2023_Modificado.pdf",
                    },
                    {
                        titulo: "PAC 2022",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2022.pdf",
                    }, 
                    {
                        titulo: "PAC 2021",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2021.pdf",
                    },
                    {
                        titulo: "PAC 2020",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2020.pdf",
                    },
                    {
                        titulo: "PAC 2019",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2019.pdf",
                    },
                    {
                        titulo: "PAC 2018",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2018.pdf",
                    },
                    {
                        titulo: "PAC 2017",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2017.pdf",
                    },
                    {
                        titulo: "PAC 2016",
                        url: "https://www.utleon.edu.mx/public_html/transparencia/programa-anual-compras/PAC_2016.pdf",
                    }
                ]
            }
        }),

    })
</script>