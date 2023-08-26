<?php $__env->startSection('content'); ?>




<?php echo $__env->make('pages.shop.products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    
    if (sessionStorage.getItem("is_reloaded")) alert('Reloaded!');

    let data = {}

    $(".js-range-slider").on('change', function(){
        data.price_range = $(this).val();

        ajaxRequest();
    });

       <?php if($singleCat != ''): ?>

        let cat_id= <?php echo e($singleCat['id']); ?>;
         data.cat_id = cat_id;
        ajaxRequest();
        <?php endif; ?>



    $('.category').click(function(e) {
        e.preventDefault();

        let cat_id = $(this).attr('data-id');
        data.cat_id = cat_id;
        let categoryText=$(this).text();

        categoryText=categoryText.replaceAll(" ","_").toLowerCase();
     //   console.log(categoryText);
        // window.history.pushState('new','title',categoryText+".html");

        //console.log(data);
        ajaxRequest();
    })

    $('.tags').click(function(e) {
        e.preventDefault();

        let tag_id = $(this).attr('data-id');
        data.tag_id = tag_id;

        //console.log(data);
        ajaxRequest();
    })

    $('.sort').click(function(e) {
        e.preventDefault();

        let sort_number = $(this).attr('data-id');
        data.sort_number = sort_number;

        //console.log(data);
        ajaxRequest();
    })

    function ajaxRequest() {
        $.ajax({
            url: '<?php echo e(route("filter-products")); ?>',
            method: 'get',
            data: data,
            success: function(response) {
              //  console.log(response)
                let products = response.products;

                showProducts(products, response.category_id, response.parentCategory_id);
                generateBreadcumps(response.category, response.parentCategory, response.category_id, response.parentCategory_id);
            },
            error: function(xhr) {
                console.log(xhr);
            }
        })

        function showProducts(products, category_id, parentCategory_id) {
            console.log(category_id);
            console.log(parentCategory_id);
            let html = '';
            for (var prop in products) {
                if (products.hasOwnProperty(prop)) {
                    // or if (Object.prototype.hasOwnProperty.call(obj,prop)) for safety...
                    html += '<div class="col-md-4 col-sm-6">' +
                            '<div class="product-grid">' +
                                '<div class="product-image">';

                              if(category_id && parentCategory_id){

                                html+= '<a href="/single-page/'+ products[prop]['slug'] +'/'+ category_id+'/'+parentCategory_id + '"><img class="pic-1" src="/storage/'+ products[prop]['image'] +'" alt="product-1"></a>';
                              }
                              else if(category_id && !parentCategory_id){
                                 html+= '<a href="/single-page/'+ products[prop]['slug'] +'/'+ category_id+ '"> <img class="pic-1" src="/storage/'+ products[prop]['image'] +'" alt="product-1"></a>';
                              }
                              else{
                                 html+= '<a href="/single-page/'+ products[prop]['slug']+ '"> <img class="pic-1" src="/storage/'+ products[prop]['image'] +'" alt="product-1"></a>';
                              }

                                 html+=
                                    '<h6 class="product-name">'+ products[prop]['title'] +'</h6>' +
                                    '<ul class="social">' +
                                        '<li><a href="/add-cart/'+ products[prop]['id'] +'" data-tip="Dodaj u korpu"><i class="fa fa-shopping-cart"></i></a></li>' +
                                        '<li><a href="" data-tip="Dodaj u listu želja"><i class="fa fa-heart"></i></a></li>' +
                                    '</ul>' +
                                '</div>' +
                                '<div class="product-content">';
                                html += '<p class="product-price">'+ products[prop]['price'] +' RSD</p>';
                                html += '</div>' +
                            '</div>' +
                        '</div>';
                }
            }

            $('.append-products').html(html);
        }




        function generateBreadcumps(category, parentCategory, category_id, parentCategory_id) {

            if(parentCategory!=""){
                $('.bread').html(' >  <a href="/svi-proizvodi/'+ parentCategory_id +'"> '+parentCategory+' </a> > <a  href="/svi-proizvodi/'+category_id+'"> '+ category+'</a>');}

            else{
                $('.bread').html(' >  <a href="/svi-proizvodi/'+ category_id +'"> '+category+' </a>');}


        }
        

    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/shop.blade.php ENDPATH**/ ?>