<script type="text/javascript">
    function educator()
    {
        
        $( "#collapse7" ).addClass( "in" );
    }
    function CampusMarket()
    {
        
        $( "#collapse13" ).addClass( "in" );

    }
    function Showall()
    {
        $("#collapse").removeClass("in");
        $("#collapse13").removeClass("in");
    }
</script>
<body>
    <div id="page">
       <section id="" class="page-section light-bg">
            <div class="image-bg content-in fixed">
            </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 icons-circle icons-bg-color fa-1x">
                        
                            <h2 class="section-title white">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
        </section>
        <section class="page-section">

            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12 work-section">
                        <div id="options" class="filter-menu">
                            <ul class="option-set black nav nav-pills">
                            <li data-filter="all" class="filter active" onclick="Showall();">Show All</li>
                                <li class="filter" data-filter=".for-learners" >For Learners</li>
                                <li class="filter" data-filter=".for-educators" onclick="educator();">For Educators</li>
                                <li class="filter" data-filter=".CampusMarket"  onclick="CampusMarket();">CampusMarket</li>
                            </ul>
                        </div>
                        <div class="panel-group list-style" id="accordion">
                        <?php  print_r($faq->cms_desc);?>
                        </div>
                       
                     
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- page-section -->
       
       
    </div>
 
