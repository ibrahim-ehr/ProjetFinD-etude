<template>
    <div class="">
        <div class="row">
            <div class="col-md-8" v-if="issearching">
                .... searching posts
            </div>
            <div class="col-md-8" v-else>
                <h1 class="my-4">Welcome to
                    <small>Baraim Al Iman</small>
                </h1>

                <div class="media simple-post" v-for="article in articles.data" :key="article.id">
                        <img class="mr-3" :src="'img/' + article.image" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0">
                                <router-link :to="'/article/' + article.slug">{{article.title}}</router-link>
                            </h4>
                            {{article.body.substr(0,150)}}
                            <ul class="list-inline list-unstyled d-flex post-info">
                                <li>
                                    <span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{article.user.name}}</strong></span>
                                </li>
                                <li>|</li>
                                <li>
                                    <span><i class="fa fa-calendar"></i>{{article.added_at}}</span>
                                </li>
                                <li>|</li>
                                <span><i class="fa fa-comment"></i>{{article.comments_count}} comments</span>
                            </ul>
                        </div>
                    </div>
                <pagination class="pagination float-right" :data="articles" @pagination-change-page="getArticles"></pagination>
            </div>
                <!-- Sidebar Widgets Column-->
                <div class="col-md-4">
                    <div class="card my-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." v-model="searcharicle">
                                <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                articles: {},
                searcharicle: '',
                issearching: false
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getArticles();
        },
        watch:{
            searcharticle(query){
                if(query.length > 0){
                    this.issearching =true;
                    console.log(query)
                    axios.get('/api/searcharticles/'+query+'?page=1')
                        .then(res => {
                            this.aticles = res.data;

                        })
                        .catch(err => {
                            console.log(err)
                        })
                }else{
                    this.issearching =true;
                    let oldarticles = JSON.parse(localStorage.getItem('articles')) ;
                    this.articles = oldarticles;
                }
                this.issearching = false
            }
        },
        methods: {
            getArticles(page) {
                axios.get('/api/articles?page='+page)
                    .then(res => {
                        this.articles = res.data
                        localStorage.setItem('articles',JSON.stringify(this.articles));
                    })
                    .catch(err => {
                        console.log(err)
                    })
            }
        }
    }
</script>
