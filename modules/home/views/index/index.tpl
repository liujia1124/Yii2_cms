<{$public_header}>

    <!-- Portfolio block BEGIN -->
    <div class="portfolio-block content content-center" id="portfolio" style="min-height: 550px;">
        <div class="row">

            <{foreach from=$list item=e}>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="/upload/<{$e.show_url}>" alt="NAME" class="img-responsive">
                <a href="/upload/<{$e.url}>" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong><{$e.name}></strong>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <{/foreach}>

        </div>
    </div>

<div id="page" style="text-align: center">
</div>

    <div style="height:50px;"></div>

<script>
    $(function(){
        create_page('<{$now_page}>', '<{$total_page}>', '&size=18');
    })
</script>


<{$public_footer}>