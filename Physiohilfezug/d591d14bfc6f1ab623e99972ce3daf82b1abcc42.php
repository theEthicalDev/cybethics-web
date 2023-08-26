<?php $__env->startSection('content'); ?>




<?php echo $__env->make('pages.shop.productsNew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

        function generateBreadcumps(category, parentCategory, category_id, parentCategory_id) {

            if(parentCategory!=""){
                $('.bread').html(' >  <a href="/svi-proizvodi/'+ parentCategory_id +'"> '+parentCategory+' </a> > <a  href="/svi-proizvodi/'+category_id+'"> '+ category+'</a>');}

            else{
                $('.bread').html(' >  <a href="/svi-proizvodi/'+ category_id +'"> '+category+' </a>');
            }
        }
    }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/shopNew.blade.php ENDPATH**/ ?>