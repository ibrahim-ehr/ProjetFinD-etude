<template>
    <!--login-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form action="#"  nonvalidate>
                            <h2 class="text-center">Log in</h2>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email"  v-model="email">
                                <div v-show="emailError" class="text-danger">
                                    ... the email is not valid
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" v-model="password">
                                <div v-show="passwordError" class="text-danger">
                                    ... the password is too short
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" :disabled="!isValidForm"
                                        @click.prevent="submitLogin">Log in</button>
                            </div>
                            <div class="clearfix">
                                <a href="#" class="pull-right">Forgot Password?</a>
                            </div>
                        </form>
                        <p class="text-center"><a class="switch-toregister-modal" href="#">Pré-inscription</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
           email:'',
           password:''
        }
    },
    methods:{
        submitLogin(){
            //console.log('submitted');
            //client sid  localstorage sessionstorage indexed db   state managment system
            //vue vuex

            //this.$store.state.userToken = "amine"

            //this.$store.commit('setUserToken',{userToken:'sdmfjsdkfjlsds'})
            //console.log(this.$store.getters.isLogged)
            let  {email,password} = this;
            this.$store.dispatch('LoginUser',{email,password})



        }

    },
    computed:{
        emailError(){
            return !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) && this.email.length > 0
        },
        passwordError(){
            return this.password.length > 0 && this.password.length < 7
        },
        isValidForm(){
               return  this.password.length > 5 && (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
        },

    }
}
</script>

