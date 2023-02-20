<style>
    #instafeed a {
        cursor: pointer;
    }

    #instafeed a img {
        object-fit: cover;
        width: 300px !important;
        height: 150px;
        border-radius: 10px;
        border:3px solid #fff;
    }
</style>

<div id="instafeed" class="grid grid-cols-2 gap-3"></div>

<script type="text/javascript">
    var feed = new Instafeed({
        accessToken: sessionStorage.getItem('ig_token'),
        limit: 4,
        resolution: 'standard_resolution',
        debug:false,
        template:'<a href="{{link}}" target="_blank"><img src="{{image}}"/></a>',
    });
    feed.run();
</script>