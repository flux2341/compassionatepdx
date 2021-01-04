

<?php ob_start(); ?>
<h2>Fur Free Friday 2020</h2>
<div class="subtitle">Join us for the annual Fur Free Friday Rally the day after Thanksgiving in Downtown Portland! Everyone is welcome to this important event focused on encouraging retailers in adopting fur free policies and to urging lawmakers to pass a fur sale ban in Oregon. All in-person events will be livestreamed!</div>
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
        background-color: var(--card-background);
        color: var(--card-foreground);
        display:flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .card {
        box-shadow: var(--card-shadow) !important;
        border: var(--card-border);
    }
    .card-action {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .card-action a {
        margin: 10px;
    }
    .fact img {
        max-width:100%;
    }
    .fact .card-panel, .card {
        min-height:300px;
    }
    .fact .image-container .card-panel {
        background-size: cover;
        background-position: center;
        
        /* border:2px solid #000; */
        outline: 1px solid #fff;
        outline-offset: -4px;
    }
    .fact .image-container {
        min-height:300px;
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
                <div class="card-content">
                    <span class="card-title">{{fact.title}}</span>
                    <p v-html="fact.text"></p>
                </div>
                <div class="card-action" v-if="fact.links.length > 0">
                    <a class="btn" v-for="link in fact.links" :href="link.url">{{link.text}}</a>
                </div>
            </div>

            <!-- <div class="card-panel">
                <div class="fact_title">{{fact.title}}</div>
                <span class="white-text" ></span>
            </div> -->
        </div>
        <div class="col s12 m6 image-container">
            <div class="card-panel" :style="{ backgroundImage: 'url(\'/content/furfreefriday/' + fact.image.file_name + '\')' }"></div>
            <a class="image_fact_source" :href="fact.image.source.url">{{ fact.image.source.name }}</a>
        </div>
    </div>
</div>

<script>








    let app = new Vue({
        el: '#take_action',
        data: {
            facts: [{
                title: 'Virtual Fur Free Friday Portland',
                text: `<p>Friday, November 27th at 12:00 PM</p><br/><p>In light of the new state restrictions we are moving this years Fur Free Friday Portland event online.
Everyone, regardless of location, is welcome to join our Virtual Fur Free Friday which is sure to leave you feeling informed, empowered and equipped to get active for the Fur Free Oregon campaign!
Enjoy informative talks, Q&As and calls to action for the Fur Free Oregon campaign. The event will be shared LIVE in this event page in 2 parts: the talks and interactive Q&A followed by a special screening of The Farm in My Backyard by We Animals.</p>
<div style="display:flex; flex-direction:row; align-items: center; margin-top:10px;">
    <a class="btn" href="https://www.facebook.com/events/1195587417476917/">RSVP</a>
</div><br/>
<div style="display:flex; flex-direction:row; align-items: center; margin-top:10px;">
    <div style="flex-grow:1">
        <b>Virtual Action Hour for Fur Free Friday</b><br/>
        <p>Saturday November 27th at 5:00 PM</p><br/>
        <p>Join us via Zoom as we take virtual action for fur-bearing animals as part of Fur Free Friday! Everyone is welcome regardless of their activism or tech level. We will also be streaming the event LIVE in the Animal Rights Collective Portland (ARCPDX) group but encourage people to join the zoom.</p>
    </div>
    
</div><br/>
<a class="btn" href="https://www.facebook.com/events/838013140267304/">RSVP</a>`
 ,
                image: {
                    file_name: '83823431_10162762324235401_3203357239817535488_o.jpg',
                    source: {
                        name: '',
                        url: ''
                    },
                },
                links: []
            }]
        }
    })



</script>






<?php
include('footer.php');
?>