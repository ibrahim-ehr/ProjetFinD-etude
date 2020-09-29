<template>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">Baraim Al Iman</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home

                            </a>
                        </li>
                        <li class="nav-item ">
                            <router-link class="nav-link" to="/galerie">Galerie</router-link>
                        </li>
                        <li class="nav-item active" v-if="!isLogged">
                            <router-link class="nav-link" to="/contact-nous">Contact-nous</router-link>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item" v-if="isAdmin">
                            <router-link class="nav-link" to="/admin">Admin</router-link>
                        </li>
                        <li class="nav-item" v-if="isLogged">
                            <router-link class="nav-link" to="">my children</router-link>
                        </li>

                        <li v-if="!isLogged" class="nav-item register-btn reg-login-btn" data-toggle="modal" data-target="#register-modal">
                            <a class="btn btn-info nav-link" href="" data-toggle="modal" data-target="#register-modal">pré-inscription</a>
                        </li>
                        <li v-if="!isLogged" class="nav-item reg-login-btn" data-toggle="modal" data-target="#login-modal">
                            <a class="btn btn-primary text-weight nav-link" href="" data-toggle="modal" data-target="#login-modal">login</a>
                        </li>


                        <li class="nav-item reg-login-btn" v-if="isLogged" @click.stop="logout">
                            <a class="btn btn-primary text-weight nav-link" href="">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <login></login>
        <router-view/>
    </div>
</template>

<script>
    export default {
        date(){
            return {

            }
        },
        mounted() {

        },
        computed:{
            isLogged(){
                return this.$store.getters.isLogged
            },
            isAdmin(){
                return this.$store.getters.isAdmin
            }
        },
        methods:{
            updateToken(){
                let token =JSON.parse(localStorage.getItem('userToken'));
                this.$store.commit('setUserToken',token)
            },
            setUser(){
                if(this.isLogged){
                    axios.get('/api/user')
                        .then(res => {
                            //console.log(res.data)
                            this.$store.commit('setUser', res.data.user)
                        })
                }
            },
            logout(){
                this.$store.commit('logout')
            }
        }
    }
</script>
