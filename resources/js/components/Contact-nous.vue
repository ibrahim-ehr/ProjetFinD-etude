<template>
    <div class="">
        <div class="container intro-container">

            <div class="">
                <div class="col-sm-8 form-container p-5 border mb-2" >
                    <h2 class="mb-3" style="    text-decoration: underline;">Our Contact information :</h2>
                    <h6>Address: <strong> Centre de ain defla rue 20 fèvrier 1956 à coté de la direction de l'éducation</strong></h6>
                    <h6>Email: <a href="https://www.facebook.com/%D8%B1%D9%88%D8%B6%D8%A9%D8%A8%D8%B1%D8%A7%D8%B9%D9%85-%D8%A7%D9%84%D8%A5%D9%8A%D9%85%D8%A7%D9%86-302662697118211/" target="_blank" > <strong> روضة براعم الايمان</strong></a></h6>
                </div>
                <div class="col-sm-8 form-container p-5 border mb-2" >


                    <h2 style="    text-decoration: underline;">Contact us</h2>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="name">Nom parent :</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Prénon parent :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="Email">Subject :</label>
                            <input type="subject" class="form-control" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="content" cols="30" rows="10" id="message"
                                      class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
</template>

<script>
export default {
    data() {
        return {}
    },
    mounted()
    {

    },
    methods:{

    }
}
</script>
