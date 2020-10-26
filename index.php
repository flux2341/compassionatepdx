

<?php ob_start(); ?>
<h2>Together We Can<br/>Make Fur History</h2>
<div class="subtitle">Compassionate PDX is a grass-roots group of volunteers dedicated to creating political change in favor of non-human animals.</div>
<a class="btn" href="/furtruth">Learn About Fur</a>
<a class="btn" href="#take_action">Take Action</a>

<a class=""></a>
<?php
$title = ob_get_clean();
$header_image_credit_text = '';
$header_image_credit_url = '';
?>


<?php
include('header.php');
?>

<style type="text/css">
    nav {
        background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('/content/headers/fox-1883658_1920 _flipped.jpg');
        background-position:50% 50%;
        background-size: cover;
    }

    .card {
        background-color: #455a64;
        display:flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .card-action {
        display: flex;
        flex-wrap: wrap;
    }
    .card-action a {
        margin: 10px;
    }
    .fact img {
        max-width:100%;
    }
    .fact .card-panel, .card {
        height:300px;
    }
    .fact .image-container .card-panel {
        background-size: cover;
        background-position: center;
        
        /* border:2px solid #000; */
        outline: 1px solid #fff;
        outline-offset: -4px;
    }
    .fact .image-container {
        height:300px;
        position:relative;
        
    }
    .fact_title {
        font-size:2rem;
        color: white;
        margin-bottom:10px;
    }
    .image_fact_source {
        position:absolute;
        bottom:0;
        right:20px;
        color:white;
        font-size: 0.7rem;
        opacity:0.5;
    }
    
    
</style>



<div id="take_action" class="container">
    <div class="row fact" v-for="fact in facts">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content white-text">
                    <span class="card-title">{{fact.title}}</span>
                    <p v-html="fact.text"></p>
                </div>
                <div class="card-action">
                    <a class="btn" v-for="link in fact.links" :href="link.url">{{link.text}}</a>
                </div>
            </div>

            <!-- <div class="card-panel">
                <div class="fact_title">{{fact.title}}</div>
                <span class="white-text" ></span>
            </div> -->
        </div>
        <div class="col s12 m6 image-container">
            <div class="card-panel" :style="{ backgroundImage: 'url(\'./content/index/' + fact.image.file_name + '\')' }"></div>
            <a class="image_fact_source" :href="fact.image.source.url">{{ fact.image.source.name }}</a>
        </div>
    </div>
</div>

<script>








    let app = new Vue({
        el: '#take_action',
        data: {
            facts: [{
                title: 'Join the Fur Squad',
                text: 'The Compassionate PDX Fur Squad is a group of volunteers that organizes events.',
                image: {
                    file_name: 'DSC01983.jpg',
                    source: {
                        name: '',
                        url: ''
                    },
                },
                links: [{
                    text: 'volunteer with us',
                    url: 'http://bit.ly/fursquad/'
                }]
            },{
                title: 'Find Your City',
                text: 'Not in Portland or Oregon? Compassionate PDX is part of a coalition of organizations working to protect fur-bearing animals.',
                image: {
                    file_name: 'elena-mozhvilo-znhEe1cbbQE-unsplash.jpg',
                    source: {
                        name: '',
                        url: ''
                    },
                },
                links: [
                    {url: 'https://furfreeminneapolis.org', text: 'Minneapolis' },
                    {url: 'https://www.furfreenyc.com', text: 'NYC' },
                    {url: 'https://www.furfreema.com', text: 'Massachusetts' },
                    {url: 'https://www.instagram.com/furfreetoronto', text: 'Toronto' },
                    {url: 'https://compassionatebay.org', text: 'California' }
                ]
            }]
        }
    })



</script>






<?php
include('footer.php');
?>