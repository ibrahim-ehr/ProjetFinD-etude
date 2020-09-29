<template>
    <div class="">
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4">{{article.title}}</h1>
           <hr>
            <!-- Date/Time -->
            <p>Posted on <strong class="badge badge-primary p-1">{{article.added_at}}</strong>
                <span class="float-right"><strong class="badge badge-info p-1">{{article.comments_count}}</strong> comments</span></p>
            <hr>
            <!-- Preview Image -->
            <img class="img-fluid rounded" :src="'/img/' + article.image" style="width:900px;max-height:300px" alt="article_img">

            <hr>

            <!-- Post Content -->
            {{article.body}}
            <hr>
            <!-- Comments Form -->
            <div class="card my-4" v-if="isLogged">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>

            <!-- Single Comment -->
            <div class="media mb-4" v-for="(comment,index) in article.comments" :key="index">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">{{comment.user.name}}</h5>
                    {{comment.body}}
                </div>
            </div>

            <!-- Comment with nested comments -->

        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                article:''
            }
        },
        mounted() {
            this.getArticle();
        },
        computed:{
            isLogged(){
                return this.$store.getters.isLogged
            }
        },
        methods:{
            getArticle() {
                axios.get('/api/articles/'+this.$route.params.slug)
                .then(res=>{
                    console.log(res)
                    this.article=res.data;
                })
                .catch(err=>{
                    console.log(err)
                    }
                )
            }


        }
    }
</script>
