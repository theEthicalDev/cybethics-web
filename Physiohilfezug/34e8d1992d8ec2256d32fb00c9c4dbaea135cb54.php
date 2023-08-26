<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <?php echo $__env->make('voyager::alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('voyager::dimmers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="analytics-container" style="display: none;">
            <?php $google_analytics_client_id = Voyager::setting("admin.google_analytics_client_id"); ?>
            <?php if(isset($google_analytics_client_id) && !empty($google_analytics_client_id)): ?>
                
                <div id="embed-api-auth-container"></div>
            <?php else: ?>
                <p style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">
                    <?php echo __('voyager::analytics.no_client_id'); ?>

                    <a href="https://console.developers.google.com" target="_blank">https://console.developers.google.com</a>
                </p>
            <?php endif; ?>

            <div class="Dashboard Dashboard--full" id="analytics-dashboard">
                <header class="Dashboard-header">
                    <ul class="FlexGrid">
                        <li class="FlexGrid-item">
                            <div class="Titles">
                                <h1 class="Titles-main" id="view-name"><?php echo e(__('voyager::analytics.select_view')); ?></h1>
                                <div class="Titles-sub"><?php echo e(__('voyager::analytics.various_visualizations')); ?></div>
                            </div>
                        </li>
                        <li class="FlexGrid-item FlexGrid-item--fixed">
                            <div id="active-users-container"></div>
                        </li>
                    </ul>
                    <div id="view-selector-container"></div>
                </header>

                <ul class="FlexGrid FlexGrid--halves">
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main"><?php echo e(__('voyager::analytics.this_vs_last_week')); ?></h1>
                                <div class="Titles-sub"><?php echo e(__('voyager::analytics.by_users')); ?></div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-1-container"></figure>
                            <ol class="Chartjs-legend" id="legend-1-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main"><?php echo e(__('voyager::analytics.this_vs_last_year')); ?></h1>
                                <div class="Titles-sub"><?php echo e(__('voyager::analytics.by_users')); ?></div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-2-container"></figure>
                            <ol class="Chartjs-legend" id="legend-2-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main"><?php echo e(__('voyager::analytics.top_browsers')); ?></h1>
                                <div class="Titles-sub"><?php echo e(__('voyager::analytics.by_pageview')); ?></div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-3-container"></figure>
                            <ol class="Chartjs-legend" id="legend-3-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main"><?php echo e(__('voyager::analytics.top_countries')); ?></h1>
                                <div class="Titles-sub"><?php echo e(__('voyager::analytics.by_sessions')); ?></div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-4-container"></figure>
                            <ol class="Chartjs-legend" id="legend-4-container"></ol>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">



            <!-- LAYOUT -->


        <div id="statistic-div" style="width: 65%; float:left">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <h3 class="text-center">STATISTIKA PORUDŽBINA I ZARADE</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 class="day"></h3>

                            <p>Nove porudžbine u 24h</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/24h.png')); ?>" height="40px" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 class="week"></h3>

                            <p>Nove porudžbine u 7 dana</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/7d.png')); ?>" height="40px" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 class="month"></h3>

                            <p>Nove porudžbine u 30 dana</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/30.png')); ?>" height="40px" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 class="total"></h3>

                            <p>Ukupno porudžbina</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/pie-chart.png')); ?>" height="40px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><span class="income_day"></span><sup style="font-size: 20px">RSD</sup></h3>

                            <p>24h</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/trend.png')); ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><span class="income_week"></span><sup style="font-size: 20px">RSD</sup></h3>

                            <p>7 dana</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/trend.png')); ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><span class="income_month"></span><sup style="font-size: 20px">RSD</sup></h3>

                            <p>30 dana</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/trend.png')); ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><span class="income_total"></span><sup style="font-size: 20px">RSD</sup></h3>

                            <p>Ukupna zarada</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo e(asset('images/trend.png')); ?>" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <div  id="users-div" style="width: 35%; float: right; padding-left: 30px;">
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <h3 class="text-center">NOVE PORUDŽBINE</h3>
                    </div>
                </div>
                <div class="row" id="userTable">

                </div>
            </div>




            


























































































































































































































































        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        $(document).ready(function() {
            $(".nav-tabs li a").click(function(){
                $(".nav-tabs li a").removeClass("active");
                $(this).addClass("active");
            });
            $.ajax({
                url: '/seo-names',
                method: 'get',
                dataType: 'json',
                success: function(response){
                    appendNames(response);

                    //ukoliko se vrate imena iz baze i prikazu se aktivira se onChange funkcija
                    //koja na promenu id prikazuje sve ostale podatke iz baze vezane za tu stranicu
                    //koja je kliknuta
                    seoNameClickListener();
                },
                error: function(xhr){
                    console.log(xhr);
                }
            })

            //funkcija koja ispisuje sva imena stranice
            function appendNames(data){
                let html = '<select class="form-control name_value">';
                html += '<option value="0">Izaberite stranicu: </option>';
                for(let d of data){
                    html += '<option value="' + d.id + '">' + d.page_name + '</option>';
                }
                html += '</select>';
                html += '<div class="form_information"></div>'
                $('.select_form_append').append(html);
            }


            //funkcija koja vraca poslednjih 5 korisnika


            $.ajax({
                url: '/get-users',
                method: 'get',
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    showUsers(response)
                },
                error: function(xhr){
                    console.log(xhr);
                }
            })

            function showUsers(data){
                let html = `<table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">First name</th>
                                    <th scope="col">Last name</th>
                                    <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>`;
                let i=0;
                for(let d of data){
                    console.log(d);
                    html+=`  <tr>
                                <th scope="row">${d.id}</th>
                                <td>${d.users_name}</td>
                                <td>${d.last_name}</td>
                                <td>${d.users_email}</td>
                             </tr>`;
                    i++;
                }
                html+=`</tbody>
                    </table>`;

                $('#userTable').html(html);
            }


            //funkcija koja vraca sve seo tagove za odredjenu stranicu po id
            function seoNameClickListener(){
                $('.name_value').on('change', function(e){
                    e.preventDefault();

                    let name_id = $('.name_value').val();
                    //console.log(name_id);

                    $.ajax({
                        url: '/seo-all',
                        method: 'get',
                        data: {
                            id_n: name_id
                        },
                        dataType: 'json',
                        success: function(response){
                            $('.form_information').css('display', 'block');

                            if(name_id == 0){
                                $('.form_information').css('display', 'none');
                            }

                            fillForm(response);
                        },
                        error: function(xhr){
                            console.log(xhr);
                        }
                    })

                    //funckija koja popunjava formu informacijama iz baze
                    function fillForm(data){
                        let html = '';
                        for(let d of data){
                            html += '<form action="/save-seo/'+ d.id +'" method="post" enctype="multipart/form-data">';
                            html += '<?php echo csrf_field(); ?>';

                            html += `<div class="form-group">
                                <label for="title_tag">Meta title</label>`;
                            if(d.title_tag != null){
                                html += `<input type="text" class="form-control" value="${d.title_tag}" name="title_tag" id="title_tag">`;
                            }else{
                                html += `<input type="text" class="form-control" name="title_tag" id="title_tag">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="meta_description">Meta description</label>`;
                            if(d.meta_description != null){
                                html += `<input type="text" class="form-control" value="${d.meta_description}" name="meta_description" id="meta_description">`;
                            }else{
                                html += `<input type="text" class="form-control" name="meta_description" id="meta_description">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="canonical_tag">Canonical tag</label>`;
                            if(d.canonical_tag != null){
                                html += `<input type="text" class="form-control" value="${d.canonical_tag}" name="canonical_tag" id="canonical_tag">`;
                            }else{
                                html += `<input type="text" class="form-control" name="canonical_tag" id="canonical_tag">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="robots_meta_tag">Robots meta tag</label>`;
                            if(d.robots_meta_tag != null){
                                html += `<input type="text" class="form-control" value="${d.robots_meta_tag}" name="robots_meta_tag" id="robots_meta_tag">`;
                            }else{
                                html += `<input type="text" class="form-control" name="robots_meta_tag" id="robots_meta_tag">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="open_graph_type">OpenGraph type</label>`;
                            if(d.open_graph_type != null){
                                html += `<input type="text" class="form-control" value="${d.open_graph_type}" name="open_graph_type" id="open_graph_type">`;
                            }else{
                                html += `<input type="text" class="form-control" name="open_graph_type" id="open_graph_type">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="open_graph_title">OpenGraph_title</label>`;
                            if(d.open_graph_title != null){
                                html += `<input type="text" class="form-control" value="${d.open_graph_title}" name="open_graph_title" id="open_graph_title">`;
                            }else{
                                html += `<input type="text" class="form-control" name="open_graph_title" id="open_graph_title">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="open_graph_desc">OpenGraph description</label>`;
                            if(d.open_graph_desc != null){
                                html += `<input type="text" class="form-control" value="${d.open_graph_desc}" name="open_graph_desc" id="open_graph_desc">`;
                            }else{
                                html += `<input type="text" class="form-control" name="open_graph_desc" id="open_graph_desc">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="alt_tag">Alt tag</label>`;
                            if(d.alt_tag != null){
                                html += `<input type="text" class="form-control" value="${d.alt_tag}" name="alt_tag" id="alt_tag">`;
                            }else{
                                html += `<input type="text" class="form-control" name="alt_tag" id="alt_tag">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="open_graph_url">OpenGraph url</label>`;
                            if(d.open_graph_url != null){
                                html += `<input type="text" class="form-control" value="${d.open_graph_url}" name="open_graph_url" id="open_graph_url">`;
                            }else{
                                html += `<input type="text" class="form-control" name="open_graph_url" id="open_graph_url">`;
                            }

                            html += `</div>
                            <div class="form-group">
                                <label for="open_graph_site_name">OpenGraph site name</label>`;
                            if(d.open_graph_site_name != null){
                                html += `<input type="text" class="form-control" value="${d.open_graph_site_name}" name="open_graph_site_name" id="open_graph_site_name">`;
                            }else{
                                html += `<input type="text" class="form-control" name="open_graph_site_name" id="open_graph_site_name">`;
                            }

                            html += `</div>
                             <input type="submit" value="Save" class="btn btn-success">
                             </form>`;
                        }

                        $('.form_information').html(html);
                    }
                });
            }
            $.ajax({
                url: '/get-time-orders',
                method: 'get',
                success: function(response) {
                    let daily = response[0];
                    let weekly = response[1];
                    let monthly = response[2];
                    let total = response[3];

                    let income_day = response[4];
                    let income_week = response[5];
                    let income_month = response[6];
                    let income_total = response[7];

                    $('.day').html(daily);
                    $('.week').html(weekly);
                    $('.month').html(monthly);
                    $('.total').html(total);

                    $('.income_day').html(income_day);
                    $('.income_week').html(income_week);
                    $('.income_month').html(income_month);
                    $('.income_total').html(income_total);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            })

            $.ajax({
                url: '/orders',
                method: 'get',
                success: function(response) {
                    showOrders(response);
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            })

            function showOrders(orders) {
                console.log(orders);
                let html = '';
                let html1 = '';
                let html2 = '';
                for(let o of orders) {
                    let date = o.created_at;
                    let splited = date.split(' ');
                    console.log(o.order_status)
                    if(o.order_status == 'Poslato' || o.order_status == 'Kompletirana') {
                        html += '<tr style="background-color: rgba(40,167,69,0.8)">' +
                                '<th style="color: #fff" scope="row">'+ o.id +'</th>' +
                                '<td style="color: #fff">'+ o.users_name +'</td>' +
                            // ' + o.last_name + '
                                '<td style="color: #fff">'+ splited[0] +'</td>' +
                                '<td style="color: #fff">' + o.order_status + '</td>' +
                                // '<td style="color: #fff">' +
                                //     '<a href="/send-invoice/'+ o.id +'"> Kompetiraj </a>' +
                                // '</td>' +

                                '<td style="color: #fff">' +
                                '<a href="/send-InvoiceOne/'+ o.id +'""> Odbaci </a>' +
                                '</td>' +

                                '<td style="color: #fff">' +
                                    '<a href="/delete-order/'+ o.id +'""> Obriši </a>' +
                                '</td>' +
                                '<td style="color: #fff">' +
                                    '<a href="#" data-id="'+ o.id +'" class="order-button" data-toggle="modal" data-target="#exampleModal"> <img src="<?php echo e(asset('images/right-arrow-button.png')); ?>"> </a>' +
                                '</td>' +
                            '</tr>';
                    } else if(o.order_status == 'Poručeno' ){
                        html1 += '<tr>' +
                                '<th style="color: #000" scope="row">'+ o.id +'</th>' +
                                '<td style="color: #000">'+ o.users_name + ' </td>' +
                            // ' + o.last_name + '
                                '<td style="color: #000">'+ splited[0] +'</td>' +
                                '<td style="color: #000">Aktivna</td>' +
                                '<td style="color: #000">' +
                                    '<a href="/send-invoice/'+ o.id +'"> Kompetiraj </a>' +
                                '</td>' +

                            '<td style="color: #fff">' +
                            '<a href="/send-InvoiceOne/'+ o.id +'""> Odbaci </a>' +
                            '</td>' +

                                '<td style="color: #000">' +
                                    '<a href="/delete-order/'+ o.id +'""> Obriši </a>' +
                                '</td>' +
                                '<td style="color: #000">' +
                                    '<a href="#" data-id="'+ o.id +'" class="order-button" data-toggle="modal" data-target="#exampleModal"> <img src="<?php echo e(asset('images/right-arrow-button.png')); ?>"> </a>' +
                                '</td>' +
                            '</tr>';
                    }
                     else if(o.order_status == 'Odbačena'){
                        html2 += '<tr style="background-color: rgb(228,135,132)">' +
                            '<th style="color: #fff" scope="row">'+ o.id +'</th>' +
                            '<td style="color: #fff">'+ o.users_name +'</td>' +
                            // ' + o.last_name +
                            '<td style="color: #fff">'+ splited[0] +'</td>' +
                            '<td style="color: #fff">' + o.order_status + '</td>' +
                            '<td style="color: #fff">' +
                            '<a href="/send-invoice/'+ o.id +'"> Kompetiraj </a>' +
                            '</td>' +

                            '<td style="color: #fff">' +
                            '<a href="/send-InvoiceOne/'+ o.id +'""> Odbaci </a>' +
                            '</td>' +

                            '<td style="color: #fff">' +
                            '<a href="/delete-order/'+ o.id +'""> Obriši </a>' +
                            '</td>' +
                            '<td style="color: #fff">' +
                            '<a href="#" data-id="'+ o.id +'" class="order-button" data-toggle="modal" data-target="#exampleModal"> <img src="<?php echo e(asset('images/right-arrow-button.png')); ?>"> </a>' +
                            '</td>' +
                            '</tr>';
                    }

                }

                $('.show_orders').html(html1);
                $('.show_orders1').html(html);
                $('.show_orders2').html(html2);
            }

            $(document).on('click', '.order-button', function(e) {
                e.preventDefault();

                let id = $(this).attr('data-id');

                $.ajax({
                    url: '/get-order-products',
                    method: 'get',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        populateModal(response[0], id, response[1]);
                    },
                    error: function(xhr) {
                        console.log(xhr);
                    }
                })

                function populateModal(response, id, order) {
                    $('#exampleModalLabel').html('Order ID: ' + id);
                    let html = '';
                    for(let r of response) {
                        html += '<tr>' +
                              '<td>' + r.products_quantity + '</td>' +
                              '<td>' + r.products_name + '</td>' +
                              '<td>' + r.final_price + ' RSD</td>' +
                              '<td>' + r.final_price * r.products_quantity + ' RSD</td>' +
                            '</tr>';
                    }

                    $('.append_products').html(html);

                    let stmt = `<p><strong>First name:</strong> ${order.users_name}</p>
                		<p><strong>Last name:</strong> ${order.users_lastname}</p>
                		<p><strong>Email:</strong> ${order.users_email}</p>
                        <p><strong>Telefon:</strong> ${order.users_telephone}</p>
                		<p><strong>Street address:</strong> ${order.users_street_address}</p>
                		<p><strong>City:</strong> ${order.users_city}</p>
                		<p><strong>Postcode:</strong> ${order.users_postcode}</p>`;

                	$('.order_detail').html(stmt);

                }
            });
        })
    </script>
    <?php if(isset($google_analytics_client_id) && !empty($google_analytics_client_id)): ?>
        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {
                    q: [], ready: function (f) {
                        this.q.push(f);
                    }
                };
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script>
            // View Selector 2 JS
            !function(e){function t(r){if(i[r])return i[r].exports;var o=i[r]={exports:{},id:r,loaded:!1};return e[r].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t,i){"use strict";function r(e){return e&&e.__esModule?e:{"default":e}}var o=i(1),s=r(o);gapi.analytics.ready(function(){function e(e,t,i){e.innerHTML=t.map(function(e){var t=e.id==i?"selected ":" ";return"<option "+t+'value="'+e.id+'">'+e.name+"</option>"}).join("")}function t(e){return e.ids||e.viewId?{prop:"viewId",value:e.viewId||e.ids&&e.ids.replace(/^ga:/,"")}:e.propertyId?{prop:"propertyId",value:e.propertyId}:e.accountId?{prop:"accountId",value:e.accountId}:void 0}gapi.analytics.createComponent("ViewSelector2",{execute:function(){return this.setup_(function(){this.updateAccounts_(),this.changed_&&(this.render_(),this.onChange_())}.bind(this)),this},set:function(e){if(!!e.ids+!!e.viewId+!!e.propertyId+!!e.accountId>1)throw new Error('You cannot specify more than one of the following options: "ids", "viewId", "accountId", "propertyId"');if(e.container&&this.container)throw new Error("You cannot change containers once a view selector has been rendered on the page.");var t=this.get();return(t.ids!=e.ids||t.viewId!=e.viewId||t.propertyId!=e.propertyId||t.accountId!=e.accountId)&&(t.ids=null,t.viewId=null,t.propertyId=null,t.accountId=null),gapi.analytics.Component.prototype.set.call(this,e)},setup_:function(e){function t(){s["default"].get().then(function(t){i.summaries=t,i.accounts=i.summaries.all(),e()},function(e){i.emit("error",e)})}var i=this;gapi.analytics.auth.isAuthorized()?t():gapi.analytics.auth.on("signIn",t)},updateAccounts_:function(){var e=this.get(),i=t(e),r=void 0,o=void 0,s=void 0;if(!this.summaries.all().length)return this.emit("error",new Error('This user does not have any Google Analytics accounts. You can sign up at "www.google.com/analytics".'));if(i)switch(i.prop){case"viewId":r=this.summaries.getProfile(i.value),o=this.summaries.getAccountByProfileId(i.value),s=this.summaries.getWebPropertyByProfileId(i.value);break;case"propertyId":s=this.summaries.getWebProperty(i.value),o=this.summaries.getAccountByWebPropertyId(i.value),r=s&&s.views&&s.views[0];break;case"accountId":o=this.summaries.getAccount(i.value),s=o&&o.properties&&o.properties[0],r=s&&s.views&&s.views[0]}else o=this.accounts[0],s=o&&o.properties&&o.properties[0],r=s&&s.views&&s.views[0];o||s||r?(o!=this.account||s!=this.property||r!=this.view)&&(this.changed_={account:o&&o!=this.account,property:s&&s!=this.property,view:r&&r!=this.view},this.account=o,this.properties=o.properties,this.property=s,this.views=s&&s.views,this.view=r,this.ids=r&&"ga:"+r.id):this.emit("error",new Error("This user does not have access to "+i.prop.slice(0,-2)+" : "+i.value))},render_:function(){var t=this.get();this.container="string"==typeof t.container?document.getElementById(t.container):t.container,this.container.innerHTML=t.template||this.template;var i=this.container.querySelectorAll("select"),r=this.accounts,o=this.properties||[{name:"(Empty)",id:""}],s=this.views||[{name:"(Empty)",id:""}];e(i[0],r,this.account.id),e(i[1],o,this.property&&this.property.id),e(i[2],s,this.view&&this.view.id),i[0].onchange=this.onUserSelect_.bind(this,i[0],"accountId"),i[1].onchange=this.onUserSelect_.bind(this,i[1],"propertyId"),i[2].onchange=this.onUserSelect_.bind(this,i[2],"viewId")},onChange_:function(){var e={account:this.account,property:this.property,view:this.view,ids:this.view&&"ga:"+this.view.id};this.changed_&&(this.changed_.account&&this.emit("accountChange",e),this.changed_.property&&this.emit("propertyChange",e),this.changed_.view&&(this.emit("viewChange",e),this.emit("idsChange",e),this.emit("change",e.ids))),this.changed_=null},onUserSelect_:function(e,t){var i={};i[t]=e.value,this.set(i),this.execute()},template:'<div class="ViewSelector2">  <div class="ViewSelector2-item">    <label>Account</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>Property</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>View</label>    <select class="FormField"></select>  </div></div>'})})},function(e,t,i){function r(){var e=gapi.client.request({path:n}).then(function(e){return e});return new e.constructor(function(t,i){var r=[];e.then(function o(e){var c=e.result;c.items?r=r.concat(c.items):i(new Error("You do not have any Google Analytics accounts. Go to http://google.com/analytics to sign up.")),c.startIndex+c.itemsPerPage<=c.totalResults?gapi.client.request({path:n,params:{"start-index":c.startIndex+c.itemsPerPage}}).then(o):t(new s(r))}).then(null,i)})}var o,s=i(2),n="/analytics/v3/management/accountSummaries";e.exports={get:function(e){return e&&(o=null),o||(o=r())}}},function(e,t){function i(e){this.accounts_=e,this.webProperties_=[],this.profiles_=[],this.accountsById_={},this.webPropertiesById_=this.propertiesById_={},this.profilesById_=this.viewsById_={};for(var t,i=0;t=this.accounts_[i];i++)if(this.accountsById_[t.id]={self:t},t.webProperties){r(t,"webProperties","properties");for(var o,s=0;o=t.webProperties[s];s++)if(this.webProperties_.push(o),this.webPropertiesById_[o.id]={self:o,parent:t},o.profiles){r(o,"profiles","views");for(var n,c=0;n=o.profiles[c];c++)this.profiles_.push(n),this.profilesById_[n.id]={self:n,parent:o,grandParent:t}}}}function r(e,t,i){Object.defineProperty?Object.defineProperty(e,i,{get:function(){return e[t]}}):e[i]=e[t]}i.prototype.all=function(){return this.accounts_},r(i.prototype,"all","allAccounts"),i.prototype.allWebProperties=function(){return this.webProperties_},r(i.prototype,"allWebProperties","allProperties"),i.prototype.allProfiles=function(){return this.profiles_},r(i.prototype,"allProfiles","allViews"),i.prototype.get=function(e){if(!!e.accountId+!!e.webPropertyId+!!e.propertyId+!!e.profileId+!!e.viewId>1)throw new Error('get() only accepts an object with a single property: either "accountId", "webPropertyId", "propertyId", "profileId" or "viewId"');return this.getProfile(e.profileId||e.viewId)||this.getWebProperty(e.webPropertyId||e.propertyId)||this.getAccount(e.accountId)},i.prototype.getAccount=function(e){return this.accountsById_[e]&&this.accountsById_[e].self},i.prototype.getWebProperty=function(e){return this.webPropertiesById_[e]&&this.webPropertiesById_[e].self},r(i.prototype,"getWebProperty","getProperty"),i.prototype.getProfile=function(e){return this.profilesById_[e]&&this.profilesById_[e].self},r(i.prototype,"getProfile","getView"),i.prototype.getAccountByProfileId=function(e){return this.profilesById_[e]&&this.profilesById_[e].grandParent},r(i.prototype,"getAccountByProfileId","getAccountByViewId"),i.prototype.getWebPropertyByProfileId=function(e){return this.profilesById_[e]&&this.profilesById_[e].parent},r(i.prototype,"getWebPropertyByProfileId","getPropertyByViewId"),i.prototype.getAccountByWebPropertyId=function(e){return this.webPropertiesById_[e]&&this.webPropertiesById_[e].parent},r(i.prototype,"getAccountByWebPropertyId","getAccountByPropertyId"),e.exports=i}]);
            // DateRange Selector JS
            !function(t){function e(n){if(a[n])return a[n].exports;var i=a[n]={exports:{},id:n,loaded:!1};return t[n].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var a={};return e.m=t,e.c=a,e.p="",e(0)}([function(t,e){"use strict";gapi.analytics.ready(function(){function t(t){if(n.test(t))return t;var i=a.exec(t);if(i)return e(+i[1]);if("today"==t)return e(0);if("yesterday"==t)return e(1);throw new Error("Cannot convert date "+t)}function e(t){var e=new Date;e.setDate(e.getDate()-t);var a=String(e.getMonth()+1);a=1==a.length?"0"+a:a;var n=String(e.getDate());return n=1==n.length?"0"+n:n,e.getFullYear()+"-"+a+"-"+n}var a=/(\d+)daysAgo/,n=/\d{4}\-\d{2}\-\d{2}/;gapi.analytics.createComponent("DateRangeSelector",{execute:function(){var e=this.get();e["start-date"]=e["start-date"]||"7daysAgo",e["end-date"]=e["end-date"]||"yesterday",this.container="string"==typeof e.container?document.getElementById(e.container):e.container,e.template&&(this.template=e.template),this.container.innerHTML=this.template;var a=this.container.querySelectorAll("input");return this.startDateInput=a[0],this.startDateInput.value=t(e["start-date"]),this.endDateInput=a[1],this.endDateInput.value=t(e["end-date"]),this.setValues(),this.setMinMax(),this.container.onchange=this.onChange.bind(this),this},onChange:function(){this.setValues(),this.setMinMax(),this.emit("change",{"start-date":this["start-date"],"end-date":this["end-date"]})},setValues:function(){this["start-date"]=this.startDateInput.value,this["end-date"]=this.endDateInput.value},setMinMax:function(){this.startDateInput.max=this.endDateInput.value,this.endDateInput.min=this.startDateInput.value},template:'<div class="DateRangeSelector">  <div class="DateRangeSelector-item">    <label>Start Date</label>     <input type="date">  </div>  <div class="DateRangeSelector-item">    <label>End Date</label>     <input type="date">  </div></div>'})})}]);
            // Active Users JS
            !function(t){function i(s){if(e[s])return e[s].exports;var n=e[s]={exports:{},id:s,loaded:!1};return t[s].call(n.exports,n,n.exports,i),n.loaded=!0,n.exports}var e={};return i.m=t,i.c=e,i.p="",i(0)}([function(t,i){"use strict";gapi.analytics.ready(function(){gapi.analytics.createComponent("ActiveUsers",{initialize:function(){this.activeUsers=0,gapi.analytics.auth.once("signOut",this.handleSignOut_.bind(this))},execute:function(){this.polling_&&this.stop(),this.render_(),gapi.analytics.auth.isAuthorized()?this.pollActiveUsers_():gapi.analytics.auth.once("signIn",this.pollActiveUsers_.bind(this))},stop:function(){clearTimeout(this.timeout_),this.polling_=!1,this.emit("stop",{activeUsers:this.activeUsers})},render_:function(){var t=this.get();this.container="string"==typeof t.container?document.getElementById(t.container):t.container,this.container.innerHTML=t.template||this.template,this.container.querySelector("b").innerHTML=this.activeUsers},pollActiveUsers_:function(){var t=this.get(),i=1e3*(t.pollingInterval||5);if(isNaN(i)||5e3>i)throw new Error("Frequency must be 5 seconds or more.");this.polling_=!0,gapi.client.analytics.data.realtime.get({ids:t.ids,metrics:"rt:activeUsers"}).then(function(t){var e=t.result,s=e.totalResults?+e.rows[0][0]:0,n=this.activeUsers;this.emit("success",{activeUsers:this.activeUsers}),s!=n&&(this.activeUsers=s,this.onChange_(s-n)),1==this.polling_&&(this.timeout_=setTimeout(this.pollActiveUsers_.bind(this),i))}.bind(this))},onChange_:function(t){var i=this.container.querySelector("b");i&&(i.innerHTML=this.activeUsers),this.emit("change",{activeUsers:this.activeUsers,delta:t}),t>0?this.emit("increase",{activeUsers:this.activeUsers,delta:t}):this.emit("decrease",{activeUsers:this.activeUsers,delta:t})},handleSignOut_:function(){this.stop(),gapi.analytics.auth.once("signIn",this.handleSignIn_.bind(this))},handleSignIn_:function(){this.pollActiveUsers_(),gapi.analytics.auth.once("signOut",this.handleSignOut_.bind(this))},template:'<div class="ActiveUsers">Active Users: <b class="ActiveUsers-value"></b></div>'})})}]);
        </script>

        <script>
            // == NOTE ==
            // This code uses ES6 promises. If you want to use this code in a browser
            // that doesn't supporting promises natively, you'll have to include a polyfill.

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user immediately if the user has already granted access.
                 * If no access has been created, render an authorize button inside the
                 * element with the ID "embed-api-auth-container".
                 */
                gapi.analytics.auth.authorize({
                    container: 'embed-api-auth-container',
                    clientid: '<?php echo e($google_analytics_client_id); ?>'
                });


                /**
                 * Create a new ActiveUsers instance to be rendered inside of an
                 * element with the id "active-users-container" and poll for changes every
                 * five seconds.
                 */
                var activeUsers = new gapi.analytics.ext.ActiveUsers({
                    container: 'active-users-container',
                    pollingInterval: 5
                });


                /**
                 * Add CSS animation to visually show the when users come and go.
                 */
                activeUsers.once('success', function () {
                    var element = this.container.firstChild;
                    var timeout;

                    document.getElementById('embed-api-auth-container').style.display = 'none';
                    document.getElementById('analytics-dashboard').style.display = 'block';

                    this.on('change', function (data) {
                        var element = this.container.firstChild;
                        var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
                        element.className += (' ' + animationClass);

                        clearTimeout(timeout);
                        timeout = setTimeout(function () {
                            element.className =
                                    element.className.replace(/ is-(increasing|decreasing)/g, '');
                        }, 3000);
                    });
                });


                /**
                 * Create a new ViewSelector2 instance to be rendered inside of an
                 * element with the id "view-selector-container".
                 */
                var viewSelector = new gapi.analytics.ext.ViewSelector2({
                    container: 'view-selector-container',
                    propertyId: '<?php echo e(Voyager::setting("site.google_analytics_tracking_id")); ?>'
                })
                        .execute();


                /**
                 * Update the activeUsers component, the Chartjs charts, and the dashboard
                 * title whenever the user changes the view.
                 */
                viewSelector.on('viewChange', function (data) {
                    var title = document.getElementById('view-name');
                    if (title) {
                        title.innerHTML = data.property.name + ' (' + data.view.name + ')';
                    }

                    // Start tracking active users for this view.
                    activeUsers.set(data).execute();

                    // Render all the of charts for this view.
                    renderWeekOverWeekChart(data.ids);
                    renderYearOverYearChart(data.ids);
                    renderTopBrowsersChart(data.ids);
                    renderTopCountriesChart(data.ids);
                });


                /**
                 * Draw the a chart.js line chart with data from the specified view that
                 * overlays session data for the current week over session data for the
                 * previous week.
                 */
                function renderWeekOverWeekChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisWeek, lastWeek]).then(function (results) {

                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = results[1].rows.map(function (row) {
                            return +row[0];
                        });

                        labels = labels.map(function (label) {
                            return moment(label, 'YYYYMMDD').format('ddd');
                        });

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: '<?php echo e(__('voyager::date.last_week')); ?>',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    pointColor: 'rgba(220,220,220,1)',
                                    pointStrokeColor: '#fff',
                                    data: data2
                                },
                                {
                                    label: '<?php echo e(__('voyager::date.this_week')); ?>',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    pointColor: 'rgba(151,187,205,1)',
                                    pointStrokeColor: '#fff',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-1-container')).Line(data);
                        generateLegend('legend-1-container', data.datasets);
                    });
                }


                /**
                 * Draw the a chart.js bar chart with data from the specified view that
                 * overlays session data for the current year over session data for the
                 * previous year, grouped by month.
                 */
                function renderYearOverYearChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'year').date(1).month(0)
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).date(1).month(0).subtract(1, 'day')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisYear, lastYear]).then(function (results) {
                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                        // Ensure the data arrays are at least as long as the labels array.
                        // Chart.js bar charts don't (yet) accept sparse datasets.
                        for (var i = 0, len = labels.length; i < len; i++) {
                            if (data1[i] === undefined) data1[i] = null;
                            if (data2[i] === undefined) data2[i] = null;
                        }

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: '<?php echo e(__('voyager::date.last_year')); ?>',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    data: data2
                                },
                                {
                                    label: '<?php echo e(__('voyager::date.this_year')); ?>',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-2-container')).Bar(data);
                        generateLegend('legend-2-container', data.datasets);
                    })
                            .catch(function (err) {
                                console.error(err.stack);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * show the top 5 browsers over the past seven days.
                 */
                function renderTopBrowsersChart(ids) {

                    query({
                        'ids': ids,
                        'dimensions': 'ga:browser',
                        'metrics': 'ga:pageviews',
                        'sort': '-ga:pageviews',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({value: +row[1], color: colors[i], label: row[0]});
                                });

                                new Chart(makeCanvas('chart-3-container')).Doughnut(data);
                                generateLegend('legend-3-container', data);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * compares sessions from mobile, desktop, and tablet over the past seven
                 * days.
                 */
                function renderTopCountriesChart(ids) {
                    query({
                        'ids': ids,
                        'dimensions': 'ga:country',
                        'metrics': 'ga:sessions',
                        'sort': '-ga:sessions',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({
                                        label: row[0],
                                        value: +row[1],
                                        color: colors[i]
                                    });
                                });

                                new Chart(makeCanvas('chart-4-container')).Doughnut(data);
                                generateLegend('legend-4-container', data);
                            });
                }


                /**
                 * Extend the Embed APIs `gapi.analytics.report.Data` component to
                 * return a promise the is fulfilled with the value returned by the API.
                 * @param  {Object} params The request parameters.
                 * @return  {Promise} A promise.
                 */
                function query(params) {
                    return new Promise(function (resolve, reject) {
                        var data = new gapi.analytics.report.Data({query: params});
                        data.once('success', function (response) {
                            resolve(response);
                        })
                                .once('error', function (response) {
                                    reject(response);
                                })
                                .execute();
                    });
                }


                /**
                 * Create a new canvas inside the specified element. Set it to be the width
                 * and height of its container.
                 * @param  {string} id The id attribute of the element to host the canvas.
                 * @return  {RenderingContext} The 2D canvas context.
                 */
                function makeCanvas(id) {
                    var container = document.getElementById(id);
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');

                    container.innerHTML = '';
                    canvas.width = container.offsetWidth;
                    canvas.height = container.offsetHeight;
                    container.appendChild(canvas);

                    return ctx;
                }


                /**
                 * Create a visual legend inside the specified element based off of a
                 * Chart.js dataset.
                 * @param  {string} id The id attribute of the element to host the legend.
                 * @param  {Array.<Object>} items A list of labels and colors for the legend.
                 */
                function generateLegend(id, items) {
                    var legend = document.getElementById(id);
                    legend.innerHTML = items.map(function (item) {
                        var color = item.color || item.fillColor;
                        var label = item.label;
                        return '<li><i style="background:' + color + '"></i>' + label + '</li>';
                    }).join('');
                }


                // Set some global Chart.js defaults.
                Chart.defaults.global.animationSteps = 60;
                Chart.defaults.global.animationEasing = 'easeInOutQuart';
                Chart.defaults.global.responsive = true;
                Chart.defaults.global.maintainAspectRatio = false;

                // resize to redraw charts
                window.dispatchEvent(new Event('resize'));

            });

        </script>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/physiohilfezug/public_html/resources/views/vendor/voyager/index.blade.php ENDPATH**/ ?>